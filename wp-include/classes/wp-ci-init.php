<?php
  # WP Companies Information Init
  class CI_Init{

    public static function init(){
      self::addfiles();
      self::activation_hook();

      add_action('wp_enqueue_scripts', array('CIAssets','ci_enqueue_scripts'));
    }

    # Adding all the classes
    private static function addfiles(){
      self::include_file('wp-ci-assets');
      self::include_file('wp-ci-db-connect');
      self::include_file('wp-ci-builtin');
      self::include_file('wp-ci-template');
      self::include_file('wp-ci-page-template');
    }
    private static function include_file( $filename = null){
     require_once ( PLUGIN_PATH . 'wp-include/classes/' .$filename. '.php' );
    }

    # Activation Hook
    private static function activation_hook(){
     //register_activation_hook( WP_CI_BASE_FILE , array( 'CI_DB_Connect', 'install' ));
     register_activation_hook( WP_CI_BASE_FILE , array( __CLASS__, 'wp_activate' ) );
    }

    # Plugin Activation Process
    public function wp_activate(){

      CI_DB_Connect::install();

      // 'Add Your Company', 'add your company'
      // 'Impact Companies Directory','impact companies directory'
      # EX:- CI_Template::page('Book', 'book');
      CI_Template::page('Add  Company', 'add  company');
      CI_Template::page('Impact  Directory','impact directory');

    }
  }
?>
