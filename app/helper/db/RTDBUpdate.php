<?php

/**
 * Description of RTDBUpdate
 * Required : rt_plugin_info.php
 * @author udit
 * version 1.1
 */

if ( ( !class_exists( 'RTDBUpdate' ) ) && class_exists( 'RT_DB_Update' )) {
    class RTDBUpdate extends RT_DB_Update {

        public function __construct($current_version = false, $plugin_path = false, $schema_path = false, $mu_single_table = false) {
			parent::__construct( $plugin_path, $schema_path, $mu_single_table, $current_version );
			add_action( 'rt_db_update_before_create_table', array( $this, 'rt_db_update_fix_multisite_table_name' ), 10, 1 );
        }

		function rt_db_update_fix_multisite_table_name( $file_name ) {
			global $wpdb;
			if( is_multisite() ) {
				$table_name = str_replace( ".schema", "", strtolower( $file_name ) );
				$check_table = "SHOW TABLES LIKE '%rt_" . $table_name."'";
				$check_res = $wpdb->get_results( $check_table , ARRAY_N);
				if( $check_res && sizeof($check_res) > 0 && is_array($check_res) && isset($check_res[0][0]) ) {
					$tb_name = $check_res[0][0];
					$table_name = ( ( $this->mu_single_table ) ? $wpdb->base_prefix : $wpdb->prefix ) . "rt_" . $table_name;
					if( $tb_name != $table_name )  {
						$alter_sql = "ALTER TABLE ".$tb_name." RENAME TO ".$table_name;
						$wpdb->query($alter_sql);
					}
				}
			}
		}
    }
}