<?php

class homeController extends Controller {

    public function index() {

        $this->set( "ipcliente" , $this->getRequest()->getIpCliente() ) ; 
        $this->set( "nombre" , "julian vidal alarcon" ) ; 
        $this->set( "email" , "julianvidal@live.cl" ) ;
        
        $_SESSION['user.name'] = "julian vidal"; 
        $_SESSION['user.email'] = "julianvidal@live.cl"; 

        $this->logger("index", "dfdfdfdf") ; 
    }

    public function listado() {

        $this->set( "nombre"  , $_SESSION['user.name'] ) ; 
        $this->set( "email"   , $_SESSION['user.email'] ) ; 

        $this->logger("listado" , "pasoaos" ) ; 
    }


}

?>