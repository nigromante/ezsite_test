<?php
function get_client_ip() {
    $ipaddress = '';
     if (getenv('HTTP_CLIENT_IP'))
         $ipaddress = getenv('HTTP_CLIENT_IP');
     else if(getenv('HTTP_X_FORWARDED_FOR'))
         $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
     else if(getenv('HTTP_X_FORWARDED'))
         $ipaddress = getenv('HTTP_X_FORWARDED');
     else if(getenv('HTTP_FORWARDED_FOR'))
         $ipaddress = getenv('HTTP_FORWARDED_FOR');
     else if(getenv('HTTP_FORWARDED'))
         $ipaddress = getenv('HTTP_FORWARDED');
     else if(getenv('REMOTE_ADDR'))
         $ipaddress = getenv('REMOTE_ADDR');
     else
         $ipaddress = 'UNKNOWN';

     return $ipaddress;
 }



class SessionManager      extends \nigromante\EzSite\SessionManager {}
class Session      extends \nigromante\EzSite\Session {}
class Logger      extends \nigromante\EzSite\Logger {}
class EzSite      extends \nigromante\EzSite\Main {}
class Config      extends \nigromante\EzSite\Config {}
class Request     extends \nigromante\EzSite\Request {}
class Response    extends \nigromante\EzSite\Response {}
class Controller  extends \nigromante\EzSite\Controller {}


include DIR_CONFIG . DS . "ConfigMain.php" ; 
$configMain = new ConfigMain() ;
$IpCliente = get_client_ip()  ; 

date_default_timezone_set('America/Santiago');


$handler_session = new SessionManager( $configMain->getDatabase( 'session' ) , $IpCliente );
session_set_save_handler(
    [ $handler_session, 'open' ],
    [ $handler_session, 'close' ],
    [ $handler_session, 'read' ],
    [ $handler_session, 'write' ],
    [ $handler_session, 'destroy' ] ,
    [ $handler_session, 'gc' ]
);

session_name( "example" ) ;    
session_start();
session_gc() ; 

$sessionInfo = $handler_session->info( session_id() ) ; 

?> 