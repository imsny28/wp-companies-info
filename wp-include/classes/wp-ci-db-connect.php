<?php
  # Company connection
  class CI_DB_Connect{
    private static $table = 'companies';

    private static function tablename(){
      $_wpdb = CI_Builtin::wp_db();
      return $_wpdb->prefix .static::$table;
    }
    # Create Table
    private function create( $table_name ){
      $query = "CREATE TABLE $table_name (
      `ID`                    int(255)  PRIMARY KEY NOT NULL,
      `firstname`             varchar(254) NOT NULL,
      `lastname`              varchar(254) NOT NULL,
      `title`                 varchar(254) NOT NULL,
      `company_name`          varchar(254) NOT NULL,
      `industry`              varchar(254) NOT NULL,
      `address`               varchar(254) NOT NULL,
      `city`                  varchar(254) NOT NULL,
      `state`                 varchar(254) NOT NULL,
      `zip_code`              varchar(254) NOT NULL,
      `phone_number`          varchar(254) NOT NULL,
      `email`                 varchar(254) NOT NULL,
      `companywebsite`        varchar(254) NOT NULL,
      `bussiness_description` text NOT NULL,
      KEY `ID` (`ID`)
      );";

      return $query;
    }

    public static function install(){
      $sql= self::create( self::tablename() );
      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      dbDelta($sql);
    }
  }
?>
