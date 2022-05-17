<?php

class routes {

    public static function defines() {
        return [ 
            "/" => ["controller" => "Home" , 'action' => "index" ]   
            ,"/:controller" => ["controller" => ":controller" , 'method' => "index" ] 
            ,"/:controller/:action" => ["controller" => ":controller" , 'method' => ":action" ] 
        ] ; 
    }

}

?>