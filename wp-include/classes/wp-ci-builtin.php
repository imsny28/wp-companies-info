
<?php
class CI_Builtin
{
  public static function wp()
  {
    global $wp;
    return $wp;
  }
  public static function wp_db()
  {
    global $wpdb;
    return $wpdb;
  }

}
