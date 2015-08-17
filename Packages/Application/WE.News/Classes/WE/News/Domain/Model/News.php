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
class News {

	/**
	 * @var \Doctrine\Common\Collections\Collection<\WE\News\Domain\Model\Category>
	 * @ORM\ManyToMany
	 */
	protected $categories;

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
	 * @var \WE\News\Domain\Model\User
	 * @ORM\ManyToOne(inversedBy="news")
	 */
	protected $user;

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $image;

	/**
	 * @var string
	 * @ORM\Column(length=9999)
	 */
	protected $content;

	/**
	 * @var integer
	 */
	protected $status = 0;

	/**
	 * @var \DateTime
	 */
	protected $date;

	/**
	 * @return User
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param User $user
	 */
	public function setUser($user)
	{
		$this->user = $user;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return mixed
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * @param mixed $content
	 */
	public function setContent($content)
	{
		$this->content = $content;
	}

	/**
	 * @return int
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param int $status
	 */
	public function setStatus($status)
	{
		$this->status = $status;
	}

	/**
	 * @return \DateTime
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * @param \DateTime $date
	 */
	public function setDate($date)
	{
		$this->date = $date;
	}

	/**
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getCategories()
	{
		return $this->categories;
	}

	/**
	 * @param \Doctrine\Common\Collections\Collection $categories
	 */
	public function setCategories($categories)
	{
		$this->categories = $categories;
	}

	/**
	 * @return string
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param string $image
	 */
	public function setImage($image)
	{
		$this->image = $image;
	}
}
