<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RTMediaInteractionModel
 *
 * @author ritz
 */
class RTMediaInteractionModel extends RTDBModel
{

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct( 'rtm_media_interaction', false, 10, true );
	}

	/**
	 * Check user
	 *
	 * @param string $user_id
	 * @param string $media_id
	 * @param string $action
	 *
	 * @return bool
	 */
	function check( $user_id = '', $media_id = '', $action = '' )
	{
		if ( $user_id == '' || $media_id == '' || $action == '' ) return false;
		$columns = array( 'user_id' => $user_id, 'media_id' => $media_id, 'action' => $action );
		$results = $this->get( $columns );
		if ( $results ) return true; else
			return false;
	}

	/**
	 * Get media for user
	 *
	 * @param string $user_id
	 * @param string $media_id
	 * @param string $action
	 *
	 * @return bool|type
	 */
	function get_row( $user_id = '', $media_id = '', $action = '' )
	{
		if ( $user_id == '' || $media_id == '' || $action == '' ) return false;
		$columns = array( 'user_id' => $user_id, 'media_id' => $media_id, 'action' => $action );
		$results = $this->get( $columns );

		return $results;
	}
}
