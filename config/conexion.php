<?php
  if (!file_exists( "../../config/config.php" )){
    header( "Location: ../../logout.php" );
    exit();
  }
  require_once( "../../config/config.php" );
  require_once( "../../".$_CONF["includes"] . "database.php" );
  require_once( "../../".$_CONF["includes"] . "functions.php" );
  require_once( "../../".$_CONF["includes"] . "common.php" );
  
  session_name( "dx/dy" );
  session_start();
  
  $database = new database( $_DB_host, $_DB_user, $_DB_pass, $_DB_name, $_DB_table_prefix );
  
  function conviertefecha($variable){
      $anio=  substr($variable,0,4);
      $mes=  substr($variable,5,2);
      $dia=  substr($variable,8,2);
      return $anio.'-'.$mes.'-'.$dia;
  }
?>