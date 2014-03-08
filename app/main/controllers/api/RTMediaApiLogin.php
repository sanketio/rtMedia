<?php

/**
 * @author Umesh Kumar<umeshsingla05@gmail.com>
 */
if ( ! class_exists( 'RTDBModel' ) ){
	return;
}

/**
 * Class RTMediaApiLogin
 */
class RTMediaApiLogin extends RTDBModel
{

	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct( 'rtm_api' );
	}
}