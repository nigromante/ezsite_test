<?php

use nigromante\EzSite\ezTemplate;

	$time_inicio = round(microtime(true) * 1000); 


    include __DIR__ . "/../../vendor/autoload.php" ; 
    include  "ezsite_wrapper.php" ;


    define( 'LOG' , true ) ;

   
    try {

        (new EzSite()) 
                ->setConfig( $configMain )
                ->setSession( new Session() )
                ->setRequest( new Request() )
                ->setResponse( (new Response())->setTemplateManager( new ezTemplate() ) )
                ->info( LOG )
                ->run() 
                ->response()
                ;

    }catch( Exception $e ) {

        Logger::critical(  'Error report : ' .  $e->getMessage() ) ;
    }

?>
