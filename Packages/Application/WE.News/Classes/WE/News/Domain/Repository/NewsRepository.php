<?php
namespace WE\News\Domain\Repository;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.News".               *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Persistence\Repository;
use WE\News\Domain\Model\Category;

/**
 * @Flow\Scope("singleton")
 */
class NewsRepository extends Repository {

	// add customized methods here

	public function findByCategory(Category $category) {
		$query = $this->createQuery();
		$constraint = $query->equals('categories.Persistence_Object_Identifier', $category->getIdentity());
		return $query->matching($constraint)->execute();
	}

}
