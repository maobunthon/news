<?php
namespace WE\News\ViewHelpers;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Fluid".           *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\Fluid\Core\ViewHelper;
use WE\News\Domain\Model\News;
use WE\News\Domain\Model\Category;


class GetCategoryInNewsViewHelper extends AbstractViewHelper {

	/**
	 * @param News $news
	 * @param Category $category
	 * @return bool
	 */
	public function render(News $news, Category $category) {
		if ($news->getCategories()->contains($category)) {
			return TRUE;
		}
		return FALSE;
	}
}
