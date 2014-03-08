<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RTMediaCommentModel
 *
 * @author Udit Desai <udit.desai@rtcamp.com>
 */
class RTMediaCommentModel
{

	/**
	 * Construct
	 */
	public function __construct() {
		//initialization
	}

	/**
	 * Insert comment
	 *
	 * @param $attr
	 *
	 * @return mixed
	 */
	function insert( $attr ) {
		return wp_insert_comment( $attr );
	}

	/**
	 * Update comemnt
	 *
	 * @param $attr
	 *
	 * @return mixed
	 */
	function update( $attr ) {

		return wp_update_comment( $attr, ARRAY_A );
	}

	/**
	 * Get comments
	 *
	 * @param $where
	 *
	 * @return mixed
	 */
	function get( $where ) {

		return get_comments( $where );
	}

	/**
	 * Get comment by id
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	function get_by_id( $id ) {

		return get_comment( $id );
	}

	/**
	 * Delete comment
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	function delete( $id ) {

		return wp_delete_comment( $id, true );
	}
}
