<?php
   /*
   Plugin Name: WP Companies Information
   Plugin URI: https://www.facebook.com/
   description: This plugins helps you create company infomation and show all compaies the infomation .
   Version: 0.0.1
   Author: Mr. Fateh Singh
   Author URI: https://www.facebook.com/sunny.13.3.93
   */
  if( !defined('ABSPATH') ){
    exit;
  }
  # in the main plugin file /var/www/html/plugins/wp-content/plugins/wp-companies-info/wp-companies-info.php
  define( 'WP_CI_BASE_FILE', __FILE__ );
  # Path from root /var/www/html/plugins/wp-content/plugins/wp-companies-info/
  define( 'PLUGIN_PATH', plugin_dir_path(__FILE__) );
  # Path from url http://www.xyz.com/wp-content/plugins/wp-companies-info
  define( 'PLUGIN_URL',plugins_url().'/wp-companies-info' );
  require_once ( PLUGIN_PATH . 'wp-include/classes/wp-ci-init.php' );
  CI_Init::init();
  require_once ( PLUGIN_PATH . 'page-template.php' );

  add_action( 'template_include', 'uploadr_redirect' );
    function uploadr_redirect( $template ) {

        $plugindir = dirname( __FILE__ );

            $template = $plugindir . '/templates/template-add-your-company.php';


        return $template;

    }

?>
