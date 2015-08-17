<?php
namespace WE\News\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.News".               *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;
use TYPO3\Party\Domain\Model\Person;

/**
 * @Flow\Entity
 */
class User extends Person {

	/**
	 * @var \Doctrine\Common\Collections\Collection<\WE\News\Domain\Model\News>
	 * @ORM\OneToMany(mappedBy="user")
	 */
	protected $news;

	/**
	 * @var string
	 */
	protected $email;

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
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
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}


}
