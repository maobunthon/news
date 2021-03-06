<?php 
namespace TYPO3\Flow\Error;

/*                                                                        *
 * This script belongs to the TYPO3 Flow framework.                       *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Result object for operations dealing with objects, such as the Property Mapper or the Validators.
 *
 * @api
 */
class Result_Original {

	/**
	 * @var array<\TYPO3\Flow\Error\Error>
	 */
	protected $errors = array();

	/**
	 * Caches the existence of errors
	 * @var boolean
	 */
	protected $errorsExist = FALSE;

	/**
	 * @var array<\TYPO3\Flow\Error\Warning>
	 */
	protected $warnings = array();

	/**
	 * Caches the existence of warning
	 * @var boolean
	 */
	protected $warningsExist = FALSE;

	/**
	 * @var array<\TYPO3\Flow\Error\Notice>
	 */
	protected $notices = array();

	/**
	 * Caches the existence of notices
	 * @var boolean
	 */
	protected $noticesExist = FALSE;

	/**
	 * The result objects for the sub properties
	 *
	 * @var array<\TYPO3\Flow\Error\Result>
	 */
	protected $propertyResults = array();

	/**
	 * @var \TYPO3\Flow\Error\Result
	 */
	protected $parent = NULL;

	/**
	 * Injects the parent result and propagates the
	 * cached error states upwards
	 *
	 * @param \TYPO3\Flow\Error\Result $parent
	 * @return void
	 */
	public function setParent(Result $parent) {
		if ($this->parent !== $parent) {
			$this->parent = $parent;
			if ($this->hasErrors()) {
				$parent->setErrorsExist();
			}
			if ($this->hasWarnings()) {
				$parent->setWarningsExist();
			}
			if ($this->hasNotices()) {
				$parent->setNoticesExist();
			}
		}
	}

	/**
	 * Add an error to the current Result object
	 *
	 * @param \TYPO3\Flow\Error\Error $error
	 * @return void
	 * @api
	 */
	public function addError(Error $error) {
		$this->errors[] = $error;
		$this->setErrorsExist();
	}

	/**
	 * Add a warning to the current Result object
	 *
	 * @param \TYPO3\Flow\Error\Warning $warning
	 * @return void
	 * @api
	 */
	public function addWarning(Warning $warning) {
		$this->warnings[] = $warning;
		$this->setWarningsExist();
	}

	/**
	 * Add a notice to the current Result object
	 *
	 * @param \TYPO3\Flow\Error\Notice $notice
	 * @return void
	 * @api
	 */
	public function addNotice(Notice $notice) {
		$this->notices[] = $notice;
		$this->setNoticesExist();
	}

	/**
	 * Get all errors in the current Result object (non-recursive)
	 *
	 * @return array<\TYPO3\Flow\Error\Error>
	 * @api
	 */
	public function getErrors() {
		return $this->errors;
	}

	/**
	 * Get all warnings in the current Result object (non-recursive)
	 *
	 * @return array<\TYPO3\Flow\Error\Warning>
	 * @api
	 */
	public function getWarnings() {
		return $this->warnings;
	}

	/**
	 * Get all notices in the current Result object (non-recursive)
	 *
	 * @return array<\TYPO3\Flow\Error\Notice>
	 * @api
	 */
	public function getNotices() {
		return $this->notices;
	}

	/**
	 * Get the first error object of the current Result object (non-recursive)
	 *
	 * @return \TYPO3\Flow\Error\Error
	 * @api
	 */
	public function getFirstError() {
		reset($this->errors);
		return current($this->errors);
	}

	/**
	 * Get the first warning object of the current Result object (non-recursive)
	 *
	 * @return \TYPO3\Flow\Error\Warning
	 * @api
	 */
	public function getFirstWarning() {
		reset($this->warnings);
		return current($this->warnings);
	}

	/**
	 * Get the first notice object of the current Result object (non-recursive)
	 *
	 * @return \TYPO3\Flow\Error\Notice
	 * @api
	 */
	public function getFirstNotice() {
		reset($this->notices);
		return current($this->notices);
	}

	/**
	 * Return a Result object for the given property path. This is
	 * a fluent interface, so you will probably use it like:
	 * $result->forProperty('foo.bar')->getErrors() -- to get all errors
	 * for property "foo.bar"
	 *
	 * @param string $propertyPath
	 * @return \TYPO3\Flow\Error\Result
	 * @api
	 */
	public function forProperty($propertyPath) {
		if ($propertyPath === '' || $propertyPath === NULL) {
			return $this;
		}
		if (strpos($propertyPath, '.') !== FALSE) {
			return $this->recurseThroughResult(explode('.', $propertyPath));
		}
		if (!isset($this->propertyResults[$propertyPath])) {
			$this->propertyResults[$propertyPath] = new Result();
			$this->propertyResults[$propertyPath]->setParent($this);
		}
		return $this->propertyResults[$propertyPath];
	}

	/**
	 * Internal use only!
	 *
	 * @param array $pathSegments
	 * @return \TYPO3\Flow\Error\Result
	 */
	public function recurseThroughResult(array $pathSegments) {
		if (count($pathSegments) === 0) {
			return $this;
		}

		$propertyName = array_shift($pathSegments);

		if (!isset($this->propertyResults[$propertyName])) {
			$this->propertyResults[$propertyName] = new Result();
			$this->propertyResults[$propertyName]->setParent($this);
		}

		return $this->propertyResults[$propertyName]->recurseThroughResult($pathSegments);
	}

	/**
	 * Does the current Result object have Errors? (Recursively)
	 *
	 * @return boolean
	 * @api
	 */
	public function hasErrors() {
		return $this->errorsExist;
	}

	/**
	 * Sets the error cache to TRUE and propagates the information
	 * upwards the Result-Object Tree
	 *
	 * @return void
	 */
	protected function setErrorsExist() {
		$this->errorsExist = TRUE;
		if ($this->parent !== NULL) {
			$this->parent->setErrorsExist();
		}
	}

	/**
	 * Does the current Result object have Warnings? (Recursively)
	 *
	 * @return boolean
	 * @api
	 */
	public function hasWarnings() {
		return $this->warningsExist;
	}

	/**
	 * Sets the warning cache to TRUE and propagates the information
	 * upwards the Result-Object Tree
	 *
	 * @return void
	 */
	protected function setWarningsExist() {
		$this->warningsExist = TRUE;
		if ($this->parent !== NULL) {
			$this->parent->setWarningsExist();
		}
	}

	/**
	 * Does the current Result object have Notices? (Recursively)
	 *
	 * @return boolean
	 * @api
	 */
	public function hasNotices() {
		return $this->noticesExist;
	}

	/**
	 * Sets the notices cache to TRUE and propagates the information
	 * upwards the Result-Object Tree
	 *
	 * @return void
	 */
	protected function setNoticesExist() {
		$this->noticesExist = TRUE;
		if ($this->parent !== NULL) {
			$this->parent->setNoticesExist();
		}
	}


	/**
	 * Does the current Result object have Notices, Errors or Warnings? (Recursively)
	 *
	 * @return bool
	 */
	public function hasMessages() {
		return $this->errorsExist || $this->noticesExist || $this->warningsExist;
	}

	/**
	 * Get a list of all Error objects recursively. The result is an array,
	 * where the key is the property path where the error occurred, and the
	 * value is a list of all errors (stored as array)
	 *
	 * @return array<\TYPO3\Flow\Error\Error>
	 * @api
	 */
	public function getFlattenedErrors() {
		$result = array();
		$this->flattenTree('errors', $result, array());
		return $result;
	}

	/**
	 * Get a list of all Warning objects recursively. The result is an array,
	 * where the key is the property path where the warning occurred, and the
	 * value is a list of all warnings (stored as array)
	 *
	 * @return array<\TYPO3\Flow\Error\Warning>
	 * @api
	 */
	public function getFlattenedWarnings() {
		$result = array();
		$this->flattenTree('warnings', $result, array());
		return $result;
	}

	/**
	 * Get a list of all Notice objects recursively. The result is an array,
	 * where the key is the property path where the notice occurred, and the
	 * value is a list of all notices (stored as array)
	 *
	 * @return array<\TYPO3\Flow\Error\Notice>
	 * @api
	 */
	public function getFlattenedNotices() {
		$result = array();
		$this->flattenTree('notices', $result, array());
		return $result;
	}

	/**
	 * Only use internally!
	 *
	 * Flatten a tree of Result objects, based on a certain property.
	 *
	 * @param string $propertyName
	 * @param array $result
	 * @param array $level
	 * @return void
	 */
	public function flattenTree($propertyName, &$result, $level) {
		if (count($this->$propertyName) > 0) {
			$result[implode('.', $level)] = $this->$propertyName;
		}
		foreach ($this->propertyResults as $subPropertyName => $subResult) {
			array_push($level, $subPropertyName);
			$subResult->flattenTree($propertyName, $result, $level);
			array_pop($level);
		}
	}

	/**
	 * Merge the given Result object into this one.
	 *
	 * @param \TYPO3\Flow\Error\Result $otherResult
	 * @return void
	 * @api
	 */
	public function merge(Result $otherResult) {
		if ($otherResult->errorsExist) {
			$this->mergeProperty($otherResult, 'getErrors', 'addError');
		}
		if ($otherResult->warningsExist) {
			$this->mergeProperty($otherResult, 'getWarnings', 'addWarning');
		}
		if ($otherResult->noticesExist) {
			$this->mergeProperty($otherResult, 'getNotices', 'addNotice');
		}

		foreach ($otherResult->getSubResults() as $subPropertyName => $subResult) {
			/** @var $subResult Result */
			if (array_key_exists($subPropertyName, $this->propertyResults) && $this->propertyResults[$subPropertyName]->hasMessages()) {
				$this->forProperty($subPropertyName)->merge($subResult);
			} else {
				$this->propertyResults[$subPropertyName] = $subResult;
				$subResult->setParent($this);
			}
		}
	}

	/**
	 * Merge a single property from the other result object.
	 *
	 * @param \TYPO3\Flow\Error\Result $otherResult
	 * @param string $getterName
	 * @param string $adderName
	 * @return void
	 */
	protected function mergeProperty(Result $otherResult, $getterName, $adderName) {
		foreach ($otherResult->$getterName() as $messageInOtherResult) {
			$this->$adderName($messageInOtherResult);
		}
	}

	/**
	 * Get a list of all sub Result objects available.
	 *
	 * @return array<\TYPO3\Flow\Error\Result>
	 */
	public function getSubResults() {
		return $this->propertyResults;
	}

	/**
	 * Clears the result
	 *
	 * @return void
	 */
	public function clear() {
		$this->errors = array();
		$this->notices = array();
		$this->warnings = array();

		$this->warningsExist = FALSE;
		$this->noticesExist = FALSE;
		$this->errorsExist = FALSE;

		$this->propertyResults = array();
	}
}
namespace TYPO3\Flow\Error;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * Result object for operations dealing with objects, such as the Property Mapper or the Validators.
 */
class Result extends Result_Original implements \TYPO3\Flow\Object\Proxy\ProxyInterface {


	/**
	 * Autogenerated Proxy Method
	 */
	 public function __wakeup() {

	if (property_exists($this, 'Flow_Persistence_RelatedEntities') && is_array($this->Flow_Persistence_RelatedEntities)) {
		$persistenceManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface');
		foreach ($this->Flow_Persistence_RelatedEntities as $entityInformation) {
			$entity = $persistenceManager->getObjectByIdentifier($entityInformation['identifier'], $entityInformation['entityType'], TRUE);
			if (isset($entityInformation['entityPath'])) {
				$this->$entityInformation['propertyName'] = \TYPO3\Flow\Utility\Arrays::setValueByPath($this->$entityInformation['propertyName'], $entityInformation['entityPath'], $entity);
			} else {
				$this->$entityInformation['propertyName'] = $entity;
			}
		}
		unset($this->Flow_Persistence_RelatedEntities);
	}
			}

	/**
	 * Autogenerated Proxy Method
	 */
	 public function __sleep() {
		$result = NULL;
		$this->Flow_Object_PropertiesToSerialize = array();
	$reflectionService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Reflection\ReflectionService');
	$reflectedClass = new \ReflectionClass('TYPO3\Flow\Error\Result');
	$allReflectedProperties = $reflectedClass->getProperties();
	foreach ($allReflectedProperties as $reflectionProperty) {
		$propertyName = $reflectionProperty->name;
		if (in_array($propertyName, array('Flow_Aop_Proxy_targetMethodsAndGroupedAdvices', 'Flow_Aop_Proxy_groupedAdviceChains', 'Flow_Aop_Proxy_methodIsInAdviceMode'))) continue;
		if (isset($this->Flow_Injected_Properties) && is_array($this->Flow_Injected_Properties) && in_array($propertyName, $this->Flow_Injected_Properties)) continue;
		if ($reflectionProperty->isStatic() || $reflectionService->isPropertyAnnotatedWith('TYPO3\Flow\Error\Result', $propertyName, 'TYPO3\Flow\Annotations\Transient')) continue;
		if (is_array($this->$propertyName) || (is_object($this->$propertyName) && ($this->$propertyName instanceof \ArrayObject || $this->$propertyName instanceof \SplObjectStorage ||$this->$propertyName instanceof \Doctrine\Common\Collections\Collection))) {
			if (count($this->$propertyName) > 0) {
				foreach ($this->$propertyName as $key => $value) {
					$this->searchForEntitiesAndStoreIdentifierArray((string)$key, $value, $propertyName);
				}
			}
		}
		if (is_object($this->$propertyName) && !$this->$propertyName instanceof \Doctrine\Common\Collections\Collection) {
			if ($this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
				$className = get_parent_class($this->$propertyName);
			} else {
				$varTagValues = $reflectionService->getPropertyTagValues('TYPO3\Flow\Error\Result', $propertyName, 'var');
				if (count($varTagValues) > 0) {
					$className = trim($varTagValues[0], '\\');
				}
				if (\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->isRegistered($className) === FALSE) {
					$className = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getObjectNameByClassName(get_class($this->$propertyName));
				}
			}
			if ($this->$propertyName instanceof \TYPO3\Flow\Persistence\Aspect\PersistenceMagicInterface && !\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->isNewObject($this->$propertyName) || $this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
				if (!property_exists($this, 'Flow_Persistence_RelatedEntities') || !is_array($this->Flow_Persistence_RelatedEntities)) {
					$this->Flow_Persistence_RelatedEntities = array();
					$this->Flow_Object_PropertiesToSerialize[] = 'Flow_Persistence_RelatedEntities';
				}
				$identifier = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->getIdentifierByObject($this->$propertyName);
				if (!$identifier && $this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
					$identifier = current(\TYPO3\Flow\Reflection\ObjectAccess::getProperty($this->$propertyName, '_identifier', TRUE));
				}
				$this->Flow_Persistence_RelatedEntities[$propertyName] = array(
					'propertyName' => $propertyName,
					'entityType' => $className,
					'identifier' => $identifier
				);
				continue;
			}
			if ($className !== FALSE && (\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getScope($className) === \TYPO3\Flow\Object\Configuration\Configuration::SCOPE_SINGLETON || $className === 'TYPO3\Flow\Object\DependencyInjection\DependencyProxy')) {
				continue;
			}
		}
		$this->Flow_Object_PropertiesToSerialize[] = $propertyName;
	}
	$result = $this->Flow_Object_PropertiesToSerialize;
		return $result;
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 private function searchForEntitiesAndStoreIdentifierArray($path, $propertyValue, $originalPropertyName) {

		if (is_array($propertyValue) || (is_object($propertyValue) && ($propertyValue instanceof \ArrayObject || $propertyValue instanceof \SplObjectStorage))) {
			foreach ($propertyValue as $key => $value) {
				$this->searchForEntitiesAndStoreIdentifierArray($path . '.' . $key, $value, $originalPropertyName);
			}
		} elseif ($propertyValue instanceof \TYPO3\Flow\Persistence\Aspect\PersistenceMagicInterface && !\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->isNewObject($propertyValue) || $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
			if (!property_exists($this, 'Flow_Persistence_RelatedEntities') || !is_array($this->Flow_Persistence_RelatedEntities)) {
				$this->Flow_Persistence_RelatedEntities = array();
				$this->Flow_Object_PropertiesToSerialize[] = 'Flow_Persistence_RelatedEntities';
			}
			if ($propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$className = get_parent_class($propertyValue);
			} else {
				$className = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getObjectNameByClassName(get_class($propertyValue));
			}
			$identifier = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->getIdentifierByObject($propertyValue);
			if (!$identifier && $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$identifier = current(\TYPO3\Flow\Reflection\ObjectAccess::getProperty($propertyValue, '_identifier', TRUE));
			}
			$this->Flow_Persistence_RelatedEntities[$originalPropertyName . '.' . $path] = array(
				'propertyName' => $originalPropertyName,
				'entityType' => $className,
				'identifier' => $identifier,
				'entityPath' => $path
			);
			$this->$originalPropertyName = \TYPO3\Flow\Utility\Arrays::setValueByPath($this->$originalPropertyName, $path, NULL);
		}
			}
}
#