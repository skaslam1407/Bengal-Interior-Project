<?php
class KLCF_log{ 

	function KLCF_maybe_create_table( $table_name, $create_sql ) {
		global $wpdb;

		if ( in_array( $table_name, $wpdb->get_col( $wpdb->prepare( 'SHOW TABLES LIKE %s', $table_name ), 0 ), true ) ) {
			return true;
		}

		$wpdb->query( $create_sql ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared

		return in_array( $table_name, $wpdb->get_col( $wpdb->prepare( 'SHOW TABLES LIKE %s', $table_name ), 0 ), true );
	}

	function KLCF_DB_Create(){
		global $wpdb;	

		$tbl_name   = KLCF_TABLE;	
		$collate    = $wpdb->has_cap( 'collation' ) ? $wpdb->get_charset_collate() : '';	
		$table      = "
						CREATE TABLE $tbl_name (
							  `id` int(11) NOT NULL AUTO_INCREMENT,
							  `post_id` int(11) NOT NULL,
							  `request` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
							  `response` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
							  `response_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
							  `time` timestamp NOT NULL DEFAULT current_timestamp(),
							  `response_code` int(11) NOT NULL,
							  PRIMARY KEY (`id`)
						) $collate;
					  ";
		$this->KLCF_maybe_create_table($tbl_name,$table);
	}

	function KLCF_add_log($array){
		
		global $wpdb;
		$this->KLCF_DB_Create();
		$data = [
					"post_id" => $array['post_id'],
					"request" => $array['request'],
					"response" => $array['response'],
					"response_code" => $array['response_code'],
					"response_message" => $array['response_message'],
				];

		$data = "'".implode("','",array_values($data))."'";
		//echo "INSERT INTO `".KLCF_TABLE."` (`post_id`, `request`, `response`,`response_code`,`response_message`) VALUES (".$data.")";
		$wpdb->query("INSERT INTO `".KLCF_TABLE."` (`post_id`, `request`, `response`,`response_code`,`response_message`) VALUES (".$data.")");
	}

	function KLCF_get_logs($log_id=''){
		global $wpdb;
		$where = "WHERE 1";
		if(!empty($log_id)){
			$where = "WHERE `id` = ".$log_id;
		}
		//echo "SELECT * FROM `".KLCF_TABLE."` ".$where;
		return $wpdb->get_results("SELECT * FROM `".KLCF_TABLE."` ".$where." ORDER BY `id` desc", ARRAY_A );
	}

	function KLCF_clearLogs(){
		global $wpdb;
		return $wpdb->query("DELETE FROM `".KLCF_TABLE."` WHERE 1", ARRAY_A );
	}
}