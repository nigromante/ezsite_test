<?php 

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

  
  
  
  if( $ret === false ) {
    var_dump( $msgs ) ;
  }


  return $ret ; 
}

?>
