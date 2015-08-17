<?php
namespace WE\News\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.News".               *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use WE\News\Domain\Model\Category;
use WE\News\Domain\Model\News;

class HomeController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @Flow\Inject
	 * @var \WE\News\Domain\Repository\NewsRepository
	 */
	protected $newsRepository;

	/**
	 * @Flow\Inject
	 * @var \WE\News\Domain\Repository\CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$category = $this->categoryRepository->findAll();
		$news = $this->newsRepository->findAll();
		$this->view->assign('news',$news);
		$this->view->assign('listCategory',$category);
	}

	/**
	 * @param Category $category
	 */
	public function filterAction(Category $category) {
		$listCategory = $this->categoryRepository->findAll();
		$this->view->assign('listCategory',$listCategory);

		$news = $this->newsRepository->findByCategory($category);
		$this->view->assign('news',$news);
	}

	/**
	 * @param News $news
	 */
	public function detailAction(News $news){
		$listCategory = $this->categoryRepository->findAll();
		$this->view->assign('listCategory',$listCategory);

		$this->view->assign('news',$news);
	}
}
