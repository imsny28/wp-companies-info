<?php
class CIAssets
{
  public static function ci_enqueue_scripts()
  {
    if(is_page( 'add-company' ) || is_page( 'impact-directory' )){
      /* Adding css */
      self::add_css_files();
      /* Adding js */
      self::add_js_files();
    }
  }

  # Add css files function
  private  static function add_css_files()
  {
    wp_enqueue_style( 'ci',PLUGIN_URL . '/assets/css/custom.css');
  }
  # Add js files function
  private static function add_js_files()
  {
    wp_enqueue_script('ci', PLUGIN_URL . '/assets/js/custom.js',array('jquery','jquery-ui-datepicker'),true);
  }
}
