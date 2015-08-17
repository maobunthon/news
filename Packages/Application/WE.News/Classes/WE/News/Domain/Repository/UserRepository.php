<?php
namespace WE\News\Domain\Repository;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.Demo".               *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Persistence\Repository;
use TYPO3\Flow\Security\AccountRepository;

/**
 * @Flow\Scope("singleton")
 */
class UserRepository extends AccountRepository {

	// add customized methods here

}
