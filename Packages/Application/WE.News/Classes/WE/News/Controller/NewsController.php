<?php
namespace WE\News\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.News".               *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use WE\News\Domain\Model\News;
use TYPO3\Flow\Security\Authentication\Controller\AbstractAuthenticationController;

class NewsController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \WE\News\Domain\Repository\UserRepository
	 */
	protected $userRepository;

	/**
	 * @Flow\Inject
	 * @var \WE\News\Domain\Repository\CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * @var \TYPO3\Flow\Security\Context
	 */
	protected $securityContext;

	/**
	 * Injects the security context
	 *
	 * @param \TYPO3\Flow\Security\Context $securityContext The security context
	 * @return void
	 */
	public function injectSecurityContext(\TYPO3\Flow\Security\Context $securityContext) {
		$this->securityContext = $securityContext;
	}

	/**
	 * @Flow\Inject
	 * @var \WE\News\Domain\Repository\NewsRepository
	 */
	protected $newsRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('newsList', $this->newsRepository->findAll());
	}

	/**
	 * @param \WE\News\Domain\Model\News $news
	 * @return void
	 */
	public function showAction(News $news) {
		$this->view->assign('news', $news);
	}

	/**
	 * @return void
	 */
	public function newAction() {
		$category = $this->categoryRepository->findAll();
		$this->view->assign('listCategories',$category);
	}

	/**
	 * @param \WE\News\Domain\Model\News $newNews
	 * @return void
	 */
	public function createAction(News $newNews) {
		$user = $this->securityContext->getParty();
		$newNews->setUser($user);

		if($newNews->getStatus()==NULL){
			$newNews->setStatus(0);
		}
//		\TYPO3\Flow\var_dump($newNews);
//		exit();
		$this->newsRepository->add($newNews);
		$this->addFlashMessage('Created a new news.');
		$this->redirect('index');
	}

	/**
	 * @param \WE\News\Domain\Model\News $news
	 * @return void
	 */
	public function editAction(News $news) {
		$category = $this->categoryRepository->findAll();
		$this->view->assign('listCategories',$category);
		$this->view->assign('news', $news);
	}

	/**
	 * @param \WE\News\Domain\Model\News $news
	 * @return void
	 */
	public function updateAction(News $news) {
		if($news->getStatus()==NULL){
			$news->setStatus(0);
		}
		$this->newsRepository->update($news);
		$this->addFlashMessage('Updated the news.');
		$this->redirect('index');
	}

	/**
	 * @param \WE\News\Domain\Model\News $news
	 * @return void
	 */
	public function deleteAction(News $news) {
		$this->newsRepository->remove($news);
		$this->addFlashMessage('Deleted a news.');
		$this->redirect('index');
	}

}
