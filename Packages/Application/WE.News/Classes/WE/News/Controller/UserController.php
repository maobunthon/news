<?php
namespace WE\News\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.Demo".               *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use WE\News\Domain\Model\Category;
use WE\News\Domain\Model\User;

class UserController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \WE\News\Domain\Repository\UserRepository
	 */
	protected $userRepository;

	/**
	 * @Flow\Inject
	 * @var \TYPO3\Flow\Security\AccountRepository
	 */
	protected $accountRepository;

	/**
	 * @Flow\Inject
	 * @var \TYPO3\Party\Domain\Repository\PartyRepository
	 */
	protected $partyRepository;

	/**
	 * @Flow\Inject
	 * @var \TYPO3\Flow\Security\AccountFactory
	 */
	protected $accountFactory;

	/**
	 * @var \TYPO3\Flow\Security\Policy\PolicyService
	 * @Flow\Inject
	 */
	protected $policyService;

	/**
	 * Shows a account object
	 *
	 * @param \TYPO3\Flow\Security\Account $account
	 * @return void
	 */
	public function showAction(\TYPO3\Flow\Security\Account $account) {
		$this->view->assign('showSettingBar', TRUE);
		$this->view->assign('account', $account);
	}

	/**
	 * @return void
	 */
	public function newAction() {
		$this->view->assign('roles', $this->policyService->getRoles());
	}

	// TODO
	// @Flow\Validate(argumentName="identifier", type="\WE\Authentication\Validation\Validator\AccountExistsValidator")
	// @Flow\Validate(argumentName="password", type="\WE\Authentication\Validation\Validator\PasswordValidator")

	/**
	 * Adds the given new account object to the account repository
	 *
	 * @param string $identifier
	 * @Flow\Validate(argumentName="identifier", type="NotEmpty")
	 * @Flow\Validate(argumentName="identifier", type="StringLength", options={ "minimum"=1, "maximum"=255 })
	 * @param array $password
	 * @Flow\Validate(argumentName="password", type="NotEmpty")
	 * @param string $email
	 * @Flow\Validate(argumentName="email", type="NotEmpty")
	 * @Flow\Validate(argumentName="email", type="\TYPO3\Flow\Validation\Validator\EmailAddressValidator")
	 * @param string $firstName
	 * @Flow\Validate(argumentName="firstName", type="NotEmpty")
	 * @Flow\Validate(argumentName="firstName", type="StringLength", options={ "minimum"=1, "maximum"=255 })
	 * @param string $lastName
	 * @Flow\Validate(argumentName="lastName", type="NotEmpty")
	 * @Flow\Validate(argumentName="lastName", type="StringLength", options={ "minimum"=1, "maximum"=255 })
	 * @param string $roles
	 * @return void
	 */
	public function createAction($identifier, array $password, $email, $firstName, $lastName, $roles) {

		$name = new \TYPO3\Party\Domain\Model\PersonName('', $firstName, '', $lastName, '', $identifier);
		$user = new User();
		$user->setName($name);
		$user->setEmail($email);
		$electrinocAddress = new \TYPO3\Party\Domain\Model\ElectronicAddress();
		$electrinocAddress->setIdentifier($email);
		$electrinocAddress->setType('Email');
		$user->setPrimaryElectronicAddress($electrinocAddress);
		$this->partyRepository->add($user);

		$account = $this->accountFactory->createAccountWithPassword($identifier, array_shift($password), array($roles), 'DefaultProvider');
		$account->setParty($user);
		$this->accountRepository->add($account);

		$this->addFlashMessage('Created a new account.');
		$this->redirect('show', NULL, NULL, array('account' => $account));
	}

}
