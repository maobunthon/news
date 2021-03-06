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

class GetSubStringViewHelper extends AbstractViewHelper {

	/**
	 * @param $str
	 * @param $start
	 * @param $end
	 * @return mixed
	 */
	public function render($str,$start,$end) {
		$str = substr($str,$start,$end);
		if(strlen($str)<$end-$start){
			return $str;
		}else{
			return $str . "&hellip;";
		}

	}
}
