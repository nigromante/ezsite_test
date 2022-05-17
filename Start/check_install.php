<?php 
include_once DIR_CONFIG . DS . "databases.php" ; 

function check_session( $bdd_config) {

      $link = mysqli_connect( $bdd_config['server'] , $bdd_config['user'], $bdd_config['password'] , $bdd_config['database']);
      if($link){
          return true;
      }
      return false;
}


function check() {
  $ret = true ; 

  $msgs = [] ;

  if( ! function_exists( "mysqli_query") ) {
    $msg = [] ; 
    $msg[] = "php mysqli extension required ";
    $msg[] = "sudo apt install php-mysql ";
    $msgs[] = $msg ;
    $ret = false ; 
  }

  if( $ret ) {
    $databases = databases::defines() ; 
    $database_session = $databases["session"] ; 
    if( ! check_session( $database_session ) ) {
      $msg = [] ; 
      $msg[] = "Problemas con la conexión a Base de datos de session";
      $msg[] = json_encode( $database_session , true );
      $msgs[] = $msg ;
      $ret = false ; 

    }
  }
  
  if( $ret === false ) {
    var_dump( $msgs ) ;
  }


  return $ret ; 
}

?>
