<?php
  # Company Template
  class CI_Template{

    public static function page( $the_page_title, $the_page_name){

      $the_page = self::get_page_with_title( $the_page_title, $the_page_name );
      if( ! $the_page ) {
        // Insert the post into the database
        $the_page_id = wp_insert_post( self::_page( $the_page_title ) );
      }
      else {
        # the plugin may have been previously active and the page may just be trashed...
        $the_page_id = $the_page->ID;
        # make sure the page is not trashed...
        $the_page->post_status = 'publish';
        $the_page_id = wp_update_post( $the_page );
      }

      delete_option( 'wp_ci_page_id' );
      add_option( 'wp_ci_page_id', $the_page_id );

    }

    public static function get_page_with_title( $the_page_title, $the_page_name ){
      # the menu entry...
      delete_option("wp_ci_page_title");
      add_option("wp_ci_page_title", $the_page_title, '', 'yes');
      #  the slug...
      delete_option("wp_ci_page_name");
      add_option("wp_ci_page_name", $the_page_name, '', 'yes');
      # the id...
      delete_option("wp_ci_page_id");
      add_option("wp_ci_page_id", '0', '', 'yes');

      return get_page_by_title( $the_page_title );
    }

    # Page object
    public static function _page( $the_page_title ){
      # Create Page object
      $_p = array();
      $_p['post_title'] = $the_page_title;
      $_p['post_status'] = 'publish';
      $_p['post_type'] = 'page';
      $_p['post_author']  = 1;

      return $_p;
    }

  }
