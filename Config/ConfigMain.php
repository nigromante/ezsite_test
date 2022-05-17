<?php 
    include "routes.php" ; 
    include "databases.php" ; 

    class ConfigMain extends Config {
     
        public function __construct()
        {
            $this->data  = [ 
                "title" => "EzSite Framework Example",
                "version" => "1.0  Mayo 10 del 2022" , 
                "author" => "Julian Vidal" ,
                "copyright" => "jvidal" , 

                "routes" => routes::defines() ,

                "databases" => databases::defines()
                
                ] ; 
               
        }    


    }
?>