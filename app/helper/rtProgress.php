<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rtProgress
 *
 * @author saurabh
 */
class rtProgress
{

	/**
	 *
	 */
	function __construct() {

	}

	/**
	 * Progress bar
	 *
	 * @param      $progress
	 * @param bool $echo
	 *
	 * @return string
	 */
	function progress_ui( $progress, $echo = true ) {
		$progress_ui = '
			<div id="rtprogressbar">
				<div style="width:' . $progress . '%"></div>
			</div>
			';
		if ( $echo ) echo $progress_ui; else
			return $progress_ui;
	}

	/**
	 * Progress counting
	 *
	 * @param $progress
	 * @param $total
	 *
	 * @return float|int
	 */
	function progress( $progress, $total ) {
		if ( $total < 1 ) return 100;

		return ( $progress / $total ) * 100;
	}

}
