<?php
/**
* Plugin Name: Sitepact's Contact Form 7 Extension For Klaviyo
* Description: Integrate Contact Form 7 with Klaviyo. Automatically add form submissions to predetermined lists and fields in Klaviyo.
* Version: 1.0.5
* License: GPL v2 or later
* Requires at least: 4.7
* Tested up to: 6.0.3
* Author URI: https://sitepact.com
* Plugin URI: https://sitepact.com/contact-form-7-klaviyo-integration/
* Author: Sitepact
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

define('KLCF_PLUGIN_DIR', __DIR__ . '/' );

define('KLCF_ASSETS',plugin_dir_url( __FILE__ ) . 'includes/assets/');

global $wpdb;

define('KLCF_TABLE',$wpdb->prefix."_klcf_new_logs");

include('includes/KLCF_log.php');
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
include('includes/list_table.php');

//$tbl_name = $wpdb->prefix."_klcf_logs";
class KLCF_Main {

	function __construct(){

		$this->log = new KLCF_log();
		
		add_filter('wpcf7_editor_panels', array($this,'KLCF_editor_panels') );
		//add_filter('wpcf7_validate_klaviyo_gdpr', array($this,'KLCF_validation_filter'), 10, 2); //removed by ryon
		// hook into contact form 7 admin form save
		add_action('wpcf7_init', array($this,'cf7_gdpr_shortcodes') );
		add_action('wpcf7_save_contact_form', array($this,'KLCF_save_contact_form'),10,3);
		add_action("wpcf7_mail_sent", array($this,"KLCF_klaviyo_send_data"));
		add_action('admin_menu', array($this,'admin_menu')  );
		
		
	}

	// hook into contact form 7 form
	function KLCF_editor_panels ( $panels ) {

		$new_page = array(
			'KLCF' => array(
				'title' => __( 'Klaviyo Integration', 'Klaviyo-Contact-Form-7' ),
				'callback' => array($this,'KLCF_admin_after_additional_settings')
			)
		);
		
		// wp_enqueue_style('main-styles-1', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(), 1.1, false);

		wp_enqueue_style('main-styles', plugin_dir_url( __FILE__ ) . 'includes/assets/custom_bootstrap.css', array(), 1.1, false);

		wp_enqueue_script('main-styles', plugin_dir_url( __FILE__ ) . 'includes/assets/klcf-init.js', array(), 1.1, false);		
		
		$panels = array_merge($panels, $new_page);

		return $panels;

	}
	


	
	function cf7_gdpr_shortcodes(){
		wpcf7_add_form_tag( 'klaviyo_gdpr', array($this,'gdpr_handler'),true); 
	}

	function KLCF_validation_filter($result,$tag){
		if(empty($_POST['KLCF_gdpr'])){
			$tag = new WPCF7_FormTag($tag);
			//print_rr($tag);
			$result->invalidate($tag, "GDPR Is Mendetory.");

		}
		return $result;
	}
	function gdpr_handler(){
		$manager = WPCF7_ContactForm::get_current();
		$id = $manager->id();
		$custom_tag = get_post_meta($id, "_KLCF_custom_tag", true);

	    return "<input type='checkbox' id='KLCF_gdpr' name='KLCF_gdpr' value='1'>
		<label for='KLCF_gdpr'> ".$custom_tag."</label>";
	}

	function KLCF_admin_after_additional_settings( $cf7 ) {

		$post_id = sanitize_text_field($_GET['post']);

		//update_post_meta($post_id, "_KLCF_listing", '');
		$enable =	get_post_meta($post_id, "_KLCF_enable", true);
		$api_key = 	get_post_meta($post_id, "_KLCF_key", true);
		$key_listing = get_post_meta($post_id, "_KLCF_listing", true); 
		$list_id = get_post_meta($post_id, "_KLCF_list_id", true); 
		$f_data = get_post_meta($post_id, "_KLCF_data", true); 
		$f_ex_data = get_post_meta($post_id, "_KLCF_ex_data", true); 
		$enable_tag = get_post_meta($post_id, "_KLCF_enable_tag", true); 
		$custom_tag = get_post_meta($post_id, "_KLCF_custom_tag", true);
		$pro_link = 'https://sitepact.com/klaviyo-contact-form-7-pro/';
		//$map_fieldss = get_post_meta($post_id, "_KLCF_fields_data", true);

		//print_rr(get_post_meta($post_id, "_KLCF_f_enable", true));

		//print_r($f_data);

		$manager = WPCF7_FormTagsManager::get_instance();

		$form_tags = $manager->get_scanned_tags();

		$form_scan_tags = $this->tags_formate_array($form_tags);
		$auto_field_selected = $this->KLCF_searchField('email',$form_tags);


		if ($enable == "1") { $checked = "CHECKED"; } else { $checked = ""; }
		if ($enable_tag == "1") { $enable_tag_t = "CHECKED"; } else { $enable_tag_t = ""; }

		$map_fields = array(

		        [
		        	'name' => 'email',
		        	'key' => '$email',
		        	'required' => true
		        ]
		    );

		if(empty($f_data)){
		
			$map_fields[] =	    
				[
					'name' => 'first name',
					'key'  => '$first_name',
					'required' => false
				];
			$map_fields[] =
				[
					'name' => 'last name',
					'key'  => '$last_name',
					'required' => false
				];			
		}else{

			$map_field[] =	    
				[
					'name' => 'first name',
					'key'  => '$first_name',
					'required' => false
				];
			$map_field[] =
				[
					'name' => 'last name',
					'key'  => '$last_name',
					'required' => false
				];

			$keys = array_keys($f_data);					
			foreach($map_field as $row){
				if(in_array($row['key'],$keys)){
					$map_fields[] = $row;
				}
			}
		}

		// if()

		$map_extra_fields = array(
			[
				'name' => 'First Name',
				'key'  => '$first_name',
				'required' => false
			],
			[
				'name' => 'Last Name',
				'key'  => '$last_name',
				'required' => false
			],
			[
				'name' => 'Phone',
				'key'  => '$phone_number',
				'required' => false
			],
			[
				'name' => 'City',
				'key'  => '$city',
				'required' => false
			],
			[
				'name' => 'Region',
				'key'  => '$region',
				'required' => false
			],
			[
				'name' => 'Country',
				'key'  => '$country',
				'required' => false
			],
			[
				'name' => 'Zip',
				'key'  => '$zip',
				'required' => false
			],

	    );

	    include('templates/intregation-form.php');
	}


	

	function KLCF_save_contact_form( $cf7 ) {	
		
		$post_id = sanitize_text_field($_POST['KLCF_post']);
		//print_rr($_POST);
		if (!empty($_POST['KLCF_enable'])) {
			$enable = sanitize_text_field($_POST['KLCF_enable']);
			update_post_meta($post_id, "_KLCF_enable", $enable);
		} else {
			$enable = 0;
			update_post_meta($post_id, "_KLCF_enable", $enable);
			//update_post_meta($post_id, "_KLCF_data", []); 
		}

		// print_rr($_POST);
		// die();
		
		
		$name = sanitize_text_field($_POST['KLCF_key']);
		if(!empty($name)){
			$list = $this->KLCF_get_klaviyo_lists($name);
			update_post_meta($post_id, "_KLCF_key", $name);
			update_post_meta($post_id, "_KLCF_listing", $list);
		}
		
		if(!empty($_POST['KLCF_list_id'])){
			$list_id = sanitize_text_field($_POST['KLCF_list_id']);
			update_post_meta($post_id, "_KLCF_list_id", $list_id);	
		}	

		if(!empty($_POST['KLCF_data'])){
			$data = array_filter($this->sanitize_array('sanitize_text_field',$_POST['KLCF_data']));
			update_post_meta($post_id, "_KLCF_data", $data);
		}

		$KLCF_data1 = $this->sanitize_array('sanitize_text_field',$_POST['KLCF_ex_data']);
		if(!empty($KLCF_data1)){
			$KLCF_data = [];
			foreach ($KLCF_data1 as $row) {
				$KLCF_data[] = ["mfield" => sanitize_text_field($row['key']),"sfield" => sanitize_text_field($row['value'])];
			}				
			update_post_meta($post_id, "_KLCF_ex_data", $KLCF_data);
		}else{
			update_post_meta($post_id, "_KLCF_ex_data", []);
		}

		if (!empty($_POST['KLCF_enable_tag'])) {
			$enable_tag = sanitize_text_field($_POST['KLCF_enable_tag']);
			update_post_meta($post_id, "_KLCF_enable_tag", $enable_tag);
		} else {
			$enable_tag = 0;
			update_post_meta($post_id, "_KLCF_enable_tag", 0);
		}

		if(!empty($_POST['KLCF_custom_tag'])){
			$data2 = sanitize_text_field($_POST['KLCF_custom_tag']);
			update_post_meta($post_id, "_KLCF_custom_tag", $data2);	
		}

		$enable_gdpr = 0;
		if($enable_tag == 1 && $enable == 1){
			$enable_gdpr = 1;
		}

		$form = $this->add_GDPR_field_to_form($cf7->get_properties(),$enable_gdpr);	
		$cf7->set_properties(['form' => $form]);
		
		return $cf7;
	}



	/*
	 * Get Kalviyo subscriber lists
	 */
	function KLCF_get_klaviyo_lists($api_token){

	    if( ! $api_token ) {
	        return array();
	    }

	    $args = array(
	        'headers' => array(
	            'Content-Type' => 'application/json'
	        )
	    );

	    $url = "https://a.klaviyo.com/api/v2/lists?api_key=" . $api_token;

	    $data      = wp_remote_request( $url, $args );

	    if( is_wp_error( $data ) ) {
	        wp_snd_json_error();
	    }

	    $body  = json_decode( $data["body"] );
	    $lists = wp_list_pluck( $body, 'list_name', 'list_id' );

	    return $lists;
	}


	/*
	 * Handles sending data to Klaviyo API
	 */
	function KLCF_klaviyo_send_data() {	

		$post_id = sanitize_text_field($_POST['_wpcf7']);
		$enable  = get_post_meta($post_id, "_KLCF_enable", true);

		$api_key     = 	get_post_meta($post_id, "_KLCF_key", true);
		$key_listing =  get_post_meta($post_id, "_KLCF_listing", true);
		$list_id     =  get_post_meta($post_id, "_KLCF_list_id", true);
		$f_data      =  get_post_meta($post_id, "_KLCF_data", true);
		$f_ex_data   =  $this->prop_array(get_post_meta($post_id, "_KLCF_ex_data", true));
		$enable_tag  =  get_post_meta($post_id, "_KLCF_enable_tag", true);

		if(empty($_POST['KLCF_gdpr']) && $enable_tag == 1){
			return false;
		}

		if(!empty($f_ex_data)){
			$f_data = array_merge($f_data,$f_ex_data);	
		}

		$f_data = $this->fields_check($f_data);


	    $custom_data = [];
	    foreach($f_data as $key => $value){
	    	$custom_data[$key] = sanitize_text_field($_POST[$value]);
	    }
	    return $this->KLCF_klaviyo_curl($post_id,$custom_data);
	}

	/**
	 * @param [int]
	 * @param [array]
	 */
	function KLCF_klaviyo_curl($post_id,$custom_data){

		//$post_id = KLCF_get_logs($_GET['resubmit_id'])[0]['post_id'];

		$api_key = get_post_meta($post_id, "_KLCF_key", true);
		$list_id     =  get_post_meta($post_id, "_KLCF_list_id", true);

	    $custom_data[$consent] = true;

		$custom_data = $this->check_array($custom_data);

		$return = $this->klaviyo_trigger_identify($api_key,$custom_data);

		if(!$return){
			return false;
		}	
		
		$this->klaviyo_trigger_subscribe($api_key,$list_id,$custom_data,$post_id);
	}

	function klaviyo_trigger_subscribe($api_key,$list_id,$custom_data,$post_id){


		$emails = ['email' => $custom_data['$email']];
		$enable_tag  =  get_post_meta($post_id, "_KLCF_enable_tag", true);

		if(!empty($_POST['KLCF_gdpr']) && $enable_tag == 1){
			$emails['$consent'] = 'email';
		}

	    $data = array(
	        "profiles"  => [$emails]
	    );
	   	$url = "https://a.klaviyo.com/api/v2/list/{$list_id}/subscribe?api_key={$api_key}";

	    $args = array(

	        'headers' => array(
	            'Content-Type' => 'application/json'
	        ),
	        'body' => json_encode( $data )
	    );

	    $return = wp_remote_post( $url, $args );		
	    $logs = [
					"post_id" => $post_id,
					"request" => json_encode($custom_data),
					"response" => esc_sql(json_encode($return)),
					"response_code" => $return['response']['code'],
					'response_message' => $return['response']['message']
				];
		
		$this->log->KLCF_add_log($logs);
	}

	function klaviyo_trigger_identify($api_key,$data){

	    $url = "https://a.klaviyo.com/api/identify";

	    $send_data    = array(
	    	"token" => $api_key,
	        "properties"  =>  $data
	    );

	     $args = array(

	        'headers' => array(
	            'Content-Type' => 'application/json'
	        ),
	        'body' => json_encode( $send_data )
	    );

	    $return = wp_remote_post( $url, $args );

	    return $return['body'];
	}

	function check_array($val){
		$rr = [];
		foreach ($val as $key => $val){
			if(!empty($key)){
				$rr[$key] = $val;	
			}		
		}
		return $rr;
	}

	/**
	 * @param  [array]
	 * @return [array]
	 */
	function prop_array($array){
		$return = [];
		foreach($array as $row){
			$return[$row['mfield']] = $row['sfield'];
		}
		return $return;
	}

	function fields_check($v)
	{
		$check_fields = array(
			'$first_name','$last_name','$phone_number','$city','$region','$country','$zip','$email'
	    );
		$return = [];
		foreach ($v as $key => $value) {
			if(in_array($key, $check_fields)){
				$return[$key] = $value;	
			}		
		}
		return $return; 
	}

	function tags_formate_array($array)
	{
		$return = [];
		foreach ($array as $row) {
			$return[$row->name] = ucwords(str_replace(["-","_"]," ",$row->name));
		}
		return $return; 
	}

	function add_GDPR_field_to_form($form,$enable)
	{
		if(!empty($form)){
			$form = $form['form'];		
			if(!strpos($form,'[klaviyo_gdpr KLCF_gdpr]') !== false && $enable){
				$form = str_replace("[submit", "[klaviyo_gdpr KLCF_gdpr]\n[submit", $form);
			}else{
				
				if(!$enable){
					$form = str_replace("[klaviyo_gdpr KLCF_gdpr]", "", $form);
				}
			}
		}
		return $form;
	}

	function print_rr($v)
	{
		echo "<pre>";
		print_r($v);
		echo "</pre>";
	}

	// register_activation_hook( __FILE__, 'KLCF_activation' );
	function klcf_activation() {
	    $data = array(
	        [
	        	'name' => 'email',
	        	'key' => 'email',
	        	'required' => true
	        ],
	        [
				'name' => 'first name',
				'key'  => 'first_name',
				'required' => false
			],
			[
				'name' => 'last name',
				'key'  => 'last_name',
				'required' => false
			]
		);	
		update_post_meta($post_id, "_KLCF_fields_data", $data);	
	}


	

	function admin_menu() {
	        //global $submenu;

	    //$hook1 = add_menu_page( esc_html__( 'KLCF Logs', 'klaviyo-contact-form-7' ), esc_html__( 'KLCF Logs', 'klaviyo-contact-form-7' ), 'manage_options', 'klaviyo-contact-form-7-log','klcf_routing', '' );

	     $addnew = add_submenu_page( 'wpcf7', esc_html__( 'Klaviyo Log', 'klaviyo-contact-form-7' ), esc_html__( 'Klaviyo Log', 'klaviyo-contact-form-7'), 'manage_options', 'klaviyo-contact-form-7-log', array($this,'klcf_routing'));

	 //    $addnew = add_submenu_page( 'KLCF Logs',
		// 	__( 'Add New Contact Form', 'contact-form-7' ),
		// 	__( 'Add New', 'contact-form-7' )
		// 		. wpcf7_admin_menu_change_notice( 'wpcf7-new' ),
		// 	'wpcf7_edit_contact_forms',
		// 	'wpcf7-new',
		// 	'wpcf7_admin_add_new_page'
		// );

		add_action( 'load-' . $addnew, array($this,'KLCF_add_assets'), 10, 0 );

	    //add_action( 'admin_head-' . $hook1, array($this,'KLCF_add_assets'));
	}

	function KLCF_add_assets(){
		//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css
		//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js
		wp_enqueue_style('KLCF-plugin-styles', plugin_dir_url( __FILE__ ) . 'includes/assets/css/jquery.dataTables.min.css', array(), 1.1, false);

		wp_enqueue_script('KLCF-plugin-styles', plugin_dir_url( __FILE__ ) . 'includes/assets/js/jquery.dataTables.min.js', 1.1, false);
		wp_enqueue_style('main-styles', plugin_dir_url( __FILE__ ) . 'includes/assets/custom_bootstrap.css', array(), 1.1, false);
	}

	function klcf_routing(){
		$GET = $this->sanitize_array('sanitize_text_field', $_GET);
		// foreach($GET as $key => $value){
		// 	$GET."_".$key = sanitize_text_field($value);
		// }

		if(!empty($GET['id'])){

			$result = $this->log->KLCF_get_logs($GET['id'])[0];		
			include("templates/log_view.php");	

		}elseif(!empty($GET['clearLog'])){
			$this->log->KLCF_clearLogs();
			wp_redirect(admin_url( 'admin.php?page=klaviyo-contact-form-7-log' ));
		}elseif(!empty($GET['resubmit_id'])){

			$result = $this->log->KLCF_get_logs($GET['resubmit_id'])[0];
			$res = $this->KLCF_klaviyo_curl($result['post_id'],json_decode($result['request'],true));
			//print_rr($result);
			?>
			<div class="wrap klcf_container" style="width:100% !important;">
		        <div id="icon-users" class="icon32"></div>
		        <h2>Resubmit Data Response</h2>
		        <?php print_rr($res['response']);?>
		    </div>
		    <a href="<?php echo admin_url( 'admin.php?page=klaviyo-contact-form-7-log' ); ?>" class="page-title-action"><?php _e( 'Back', 'klaviyo-contact-form-7' ); ?></a>
		    <?php
		}else{
		
		    $exampleListTable = new KLCF_List_Table();
		    $exampleListTable->prepare_items();
		    $link = http_build_query($GET)."&clearLog=1";
		    ?>
		    <style type="text/css">
				table td,
				table th {
			    	padding: 8px !important;
				}
			</style>
		        <div class="wrap klcf_container">
		        	  	
		        		
		            <div id="icon-users" class="icon32"></div>
		            <h2>Klaviyo Contact Form 7 Log(s)</h2>
		            <a class="btn btn-primary pull-right" href='?<?php echo $link; ?>'>Clear Logs</a>
		            <?php $exampleListTable->display(); ?>
		        </div>
		    <?php

		}
	}

	function klcf_char_limit($txt,$limit=50){
		return substr($txt, 0,$limit)."....";
	}

	function KLCF_setup_env(){
		
		$this->log->KLCF_DB_Create();
		$KLCF_tag = '[klaviyo_gdpr KLCF_gdpr]';
		$posts = get_posts(array(
	        'post_type'     => 'wpcf7_contact_form',
	        'numberposts'   => -1
	    ));
	    foreach ($posts as $row){
	    	
	    	$post_id = $row->ID;
	    	$enable = get_post_meta($post_id, "_KLCF_enable", true);

	    	if($enable){    	
	    		$row->post_content = $this->add_GDPR_field_to_form(['form' => $row->post_content],1);    	
	    		wp_update_post($row);
	    		$form = get_post_meta($post_id, "_form", true);    	
	    		$form = $this->add_GDPR_field_to_form(['form' => $form],1);
	    		update_post_meta($post_id, "_form", $form);
	    	}
	    }
	}

	function KLCF_searchField($basetype,$array) {
	   foreach ($array as $row) {
	       if($row->basetype == $basetype){
	       		return $row->name;
	       }
	   }
	   return null;
	}

	function KLCF_remove_shortcode(){
		$KLCF_tag = '[klaviyo_gdpr KLCF_gdpr]';
		$posts = get_posts(array(
	        'post_type'     => 'wpcf7_contact_form',
	        'numberposts'   => -1
	    ));

	    foreach ($posts as $row){
	    	//$KLCF_tag;\
	    	$post_id = $row->ID;
	    	$row->post_content = str_replace($KLCF_tag,"",$row->post_content);
	    	// echo "+++++++++++++++++++++++++++++++++++";
	    	// print_rr($row->post_content);
	    	// echo "+++++++++++++++++++++++++++++++++++";
	    	wp_update_post($row);
	    	$form = get_post_meta($post_id, "_form", true);
	    	$form = str_replace($KLCF_tag,"",$form);
	    	update_post_meta($post_id, "_form", $form);
	    }    
	}

	function sanitize_array( $func, $arr )
	{
	    $newArr = array();

	    foreach( $arr as $key => $value )
	    {
	        $newArr[ $key ] = ( is_array( $value ) ? $this->sanitize_array( $func, $value ) : ( is_array($func) ? call_user_func_array($func, $value) : $func( $value ) ) );
	    }

	    return $newArr;
	}
}
$KLCF_Main = new KLCF_Main();
//KLCF_DB_Create();
register_activation_hook( __FILE__, array($KLCF_Main,'KLCF_setup_env') );
register_deactivation_hook( __FILE__, array($KLCF_Main,'KLCF_remove_shortcode') ); 