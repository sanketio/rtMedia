<?php

/**
 * Description of RTDBModel
 * Base class for any Database Model like Media, Album etc.
 *
 * @author udit
 */

if ( ( ! class_exists( 'RTDBModel' ) ) && class_exists( 'RT_DB_Model' ) ){
	class RTDBModel extends RT_DB_Model {

		function __construct( $table_name, $withprefix = false, $per_page = 10, $mu_single_table = false ) {
			parent::__construct( $table_name, $withprefix, $per_page, $mu_single_table );
		}
	}
}
