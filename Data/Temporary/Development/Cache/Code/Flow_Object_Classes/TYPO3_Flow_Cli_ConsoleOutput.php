<?php 
namespace TYPO3\Flow\Cli;

/*                                                                        *
 * This script belongs to the TYPO3 Flow framework.                       *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Helper\DialogHelper;
use Symfony\Component\Console\Helper\FormatterHelper;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Helper\ProgressHelper;
use Symfony\Component\Console\Helper\TableHelper;
use Symfony\Component\Console\Output\ConsoleOutput as SymfonyConsoleOutput;

/**
 * A wrapper for Symfony ConsoleOutput and related helpers
 */
class ConsoleOutput_Original {

	/**
	 * @var SymfonyConsoleOutput
	 */
	protected $output;

	/**
	 * @var DialogHelper
	 */
	protected $dialogHelper;

	/**
	 * @var ProgressHelper
	 */
	protected $progressHelper;

	/**
	 * @var TableHelper
	 */
	protected $tableHelper;

	/**
	 * Creates and initializes the SymfonyConsoleOutput instance
	 *
	 * @return void
	 */
	public function __construct() {
		$this->output = new SymfonyConsoleOutput();
		$this->output->getFormatter()->setStyle('b', new OutputFormatterStyle(NULL, NULL, array('bold')));
		$this->output->getFormatter()->setStyle('i', new OutputFormatterStyle('black', 'white'));
		$this->output->getFormatter()->setStyle('u', new OutputFormatterStyle(NULL, NULL, array('underscore')));
		$this->output->getFormatter()->setStyle('em', new OutputFormatterStyle(NULL, NULL, array('reverse')));
		$this->output->getFormatter()->setStyle('strike', new OutputFormatterStyle(NULL, NULL, array('conceal')));
	}

	/**
	 * Returns the desired maximum line length for console output.
	 *
	 * @return integer
	 */
	public function getMaximumLineLength() {
		return 79;
	}

	/**
	 * Outputs specified text to the console window
	 * You can specify arguments that will be passed to the text via sprintf
	 * @see http://www.php.net/sprintf
	 *
	 * @param string $text Text to output
	 * @param array $arguments Optional arguments to use for sprintf
	 * @return void
	 */
	public function output($text, array $arguments = array()) {
		if ($arguments !== array()) {
			$text = vsprintf($text, $arguments);
		}
		$this->output->write($text);
	}

	/**
	 * Outputs specified text to the console window and appends a line break
	 *
	 * @param string $text Text to output
	 * @param array $arguments Optional arguments to use for sprintf
	 * @return void
	 * @see output()
	 * @see outputLines()
	 */
	public function outputLine($text = '', array $arguments = array()) {
		$this->output($text . PHP_EOL, $arguments);
	}

	/**
	 * Formats the given text to fit into the maximum line length and outputs it to the
	 * console window
	 *
	 * @param string $text Text to output
	 * @param array $arguments Optional arguments to use for sprintf
	 * @param integer $leftPadding The number of spaces to use for indentation
	 * @return void
	 * @see outputLine()
	 */
	public function outputFormatted($text = '', array $arguments = array(), $leftPadding = 0) {
		$lines = explode(PHP_EOL, $text);
		foreach ($lines as $line) {
			$formattedText = str_repeat(' ', $leftPadding) . wordwrap($line, $this->getMaximumLineLength() - $leftPadding, PHP_EOL . str_repeat(' ', $leftPadding), TRUE);
			$this->outputLine($formattedText, $arguments);
		}
	}

	/**
	 * Renders a table like output of the given $rows
	 *
	 * @param array $rows
	 * @param array $headers
	 */
	public function outputTable($rows, $headers = NULL) {
		$tableHelper = $this->getTableHelper();
		if ($headers !== NULL) {
			$tableHelper->setHeaders($headers);
		}
		$tableHelper->setRows($rows);
		$tableHelper->render($this->output);
	}

	/**
	 * Asks the user to select a value
	 *
	 * @param string|array $question The question to ask. If an array each array item is turned into one line of a multi-line question
	 * @param array $choices List of choices to pick from
	 * @param boolean $default The default answer if the user enters nothing
	 * @param boolean $multiSelect If TRUE the result will be an array with the selected options. Multiple options can be given separated by commas
	 * @param boolean|integer $attempts Max number of times to ask before giving up (false by default, which means infinite)
	 * @return integer|string|array The selected value or values (the key of the choices array)
	 * @throws \InvalidArgumentException
	 */
	public function select($question, $choices, $default = NULL, $multiSelect = FALSE, $attempts = FALSE) {
		return $this->getDialogHelper()->select($this->output, $question, $choices, $default, $attempts, 'Value "%s" is invalid', $multiSelect);
	}

	/**
	 * Asks a question to the user
	 *
	 * @param string|array $question The question to ask. If an array each array item is turned into one line of a multi-line question
	 * @param string $default The default answer if none is given by the user
	 * @param array $autocomplete List of values to autocomplete. This only works if "stty" is installed
	 * @return string The user answer
	 * @throws \RuntimeException If there is no data to read in the input stream
	 */
	public function ask($question, $default = NULL, array $autocomplete = NULL) {
		return $this->getDialogHelper()->ask($this->output, $question, $default, $autocomplete);
	}

	/**
	 * Asks a confirmation to the user.
	 *
	 * The question will be asked until the user answers by nothing, yes, or no.
	 *
	 * @param string|array $question The question to ask. If an array each array item is turned into one line of a multi-line question
	 * @param boolean $default The default answer if the user enters nothing
	 * @return boolean true if the user has confirmed, false otherwise
	 */
	public function askConfirmation($question, $default = TRUE) {
		return $this->getDialogHelper()->askConfirmation($this->output, $question, $default);
	}

	/**
	 * Asks a question to the user, the response is hidden
	 *
	 * @param string|array $question The question. If an array each array item is turned into one line of a multi-line question
	 * @param Boolean $fallback In case the response can not be hidden, whether to fallback on non-hidden question or not
	 * @return string The answer
	 * @throws \RuntimeException In case the fallback is deactivated and the response can not be hidden
	 */
	public function askHiddenResponse($question, $fallback = TRUE) {
		return $this->getDialogHelper()->askHiddenResponse($this->output, $question, $fallback);
	}

	/**
	 * Asks for a value and validates the response
	 *
	 * The validator receives the data to validate. It must return the
	 * validated data when the data is valid and throw an exception
	 * otherwise.
	 *
	 * @param string|array $question The question to ask. If an array each array item is turned into one line of a multi-line question
	 * @param callable $validator A PHP callback that gets a value and is expected to return the (transformed) value or throw an exception if it wasn't valid
	 * @param integer|boolean $attempts Max number of times to ask before giving up (false by default, which means infinite)
	 * @param string $default The default answer if none is given by the user
	 * @param array $autocomplete List of values to autocomplete. This only works if "stty" is installed
	 * @return mixed
	 * @throws \Exception When any of the validators return an error
	 */
	public function askAndValidate($question, $validator, $attempts = FALSE, $default = NULL, array $autocomplete = NULL) {
		return $this->getDialogHelper()->askAndValidate($this->output, $question, $validator, $attempts, $default, $autocomplete);
	}

	/**
	 * Asks for a value, hide and validates the response
	 *
	 * The validator receives the data to validate. It must return the
	 * validated data when the data is valid and throw an exception
	 * otherwise.
	 *
	 * @param string|array $question The question to ask. If an array each array item is turned into one line of a multi-line question
	 * @param callable $validator A PHP callback that gets a value and is expected to return the (transformed) value or throw an exception if it wasn't valid
	 * @param integer|boolean $attempts Max number of times to ask before giving up (false by default, which means infinite)
	 * @param boolean $fallback In case the response can not be hidden, whether to fallback on non-hidden question or not
	 * @return string The response
	 * @throws \Exception When any of the validators return an error
	 * @throws \RuntimeException In case the fallback is deactivated and the response can not be hidden
	 */
	public function askHiddenResponseAndValidate($question, $validator, $attempts = FALSE, $fallback = TRUE) {
		return $this->getDialogHelper()->askHiddenResponseAndValidate($this->output, $question, $validator, $attempts, $fallback);
	}

	/**
	 * Starts the progress output
	 *
	 * @param integer $max Maximum steps. If NULL an indeterminate progress bar is rendered
	 * @return void
	 */
	public function progressStart($max = NULL) {
		$this->getProgressHelper()->start($this->output, $max);
	}

	/**
	 * Advances the progress output X steps
	 *
	 * @param integer $step Number of steps to advance
	 * @param Boolean $redraw Whether to redraw or not
	 * @return void
	 * @throws \LogicException
	 */
	public function progressAdvance($step = 1, $redraw = false) {
		$this->getProgressHelper()->advance($step, $redraw);
	}

	/**
	 * Sets the current progress
	 *
	 * @param integer $current The current progress
	 * @param Boolean $redraw Whether to redraw or not
	 * @return void
	 * @throws \LogicException
	 */
	public function progressSet($current, $redraw = false) {
		$this->getProgressHelper()->setCurrent($current, $redraw);
	}

	/**
	 * Finishes the progress output
	 *
	 * @return void
	 */
	public function progressFinish() {
		$this->getProgressHelper()->finish();
	}

	/**
	 * Returns or initializes the symfony/console DialogHelper
	 *
	 * @return DialogHelper
	 */
	protected function getDialogHelper() {
		if ($this->dialogHelper === NULL) {
			$this->dialogHelper = new DialogHelper();
			$helperSet = new HelperSet(array(new FormatterHelper()));
			$this->dialogHelper->setHelperSet($helperSet);
		}
		return $this->dialogHelper;
	}

	/**
	 * Returns or initializes the symfony/console ProgressHelper
	 *
	 * @return ProgressHelper
	 */
	protected function getProgressHelper() {
		if ($this->progressHelper === NULL) {
			$this->progressHelper = new ProgressHelper();
		}
		return $this->progressHelper;
	}

	/**
	 * Returns or initializes the symfony/console TableHelper
	 *
	 * @return TableHelper
	 */
	protected function getTableHelper() {
		if ($this->tableHelper === NULL) {
			$this->tableHelper = new TableHelper();
		}
		return $this->tableHelper;
	}

}namespace TYPO3\Flow\Cli;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * A wrapper for Symfony ConsoleOutput and related helpers
 */
class ConsoleOutput extends ConsoleOutput_Original implements \TYPO3\Flow\Object\Proxy\ProxyInterface {


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
	$reflectedClass = new \ReflectionClass('TYPO3\Flow\Cli\ConsoleOutput');
	$allReflectedProperties = $reflectedClass->getProperties();
	foreach ($allReflectedProperties as $reflectionProperty) {
		$propertyName = $reflectionProperty->name;
		if (in_array($propertyName, array('Flow_Aop_Proxy_targetMethodsAndGroupedAdvices', 'Flow_Aop_Proxy_groupedAdviceChains', 'Flow_Aop_Proxy_methodIsInAdviceMode'))) continue;
		if (isset($this->Flow_Injected_Properties) && is_array($this->Flow_Injected_Properties) && in_array($propertyName, $this->Flow_Injected_Properties)) continue;
		if ($reflectionProperty->isStatic() || $reflectionService->isPropertyAnnotatedWith('TYPO3\Flow\Cli\ConsoleOutput', $propertyName, 'TYPO3\Flow\Annotations\Transient')) continue;
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
				$varTagValues = $reflectionService->getPropertyTagValues('TYPO3\Flow\Cli\ConsoleOutput', $propertyName, 'var');
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