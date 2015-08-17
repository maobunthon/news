<?php
namespace WE\News\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.News".               *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Category {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var \TYPO3\Flow\Persistence\PersistenceManagerInterface
	 * @Flow\Inject
	 */
	protected $persistenceManager;

	/**
	 * @return string
	 */
	public function getIdentity() {
		return $this->persistenceManager->getIdentifierByObject($this);
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return \TYPO3\Flow\Persistence\PersistenceManagerInterface
	 */
	public function getPersistenceManager()
	{
		return $this->persistenceManager;
	}

	/**
	 * @param \TYPO3\Flow\Persistence\PersistenceManagerInterface $persistenceManager
	 */
	public function setPersistenceManager($persistenceManager)
	{
		$this->persistenceManager = $persistenceManager;
	}

	/**
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getNews()
	{
		return $this->news;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection $news
	 */
	public function setNews($news)
	{
		$this->news = $news;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
