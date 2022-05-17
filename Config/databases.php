<?php

class databases {

    public static function defines() {
        return [ 
            "session" => [ 
                "name" => "example_session" , 
                "type" => "mysql" , 
                "server" => "localhost:3306" ,
                "database" => "session_example" ,
                "user" => "user_session"  , 
                "password" => "1234"  , 
                "espera" => "60"  // minutos dura la session
             ] ,

            "example" => [ 
                "name" => "example_data" , 
                "server" => "localhost" ,
                "type" => "mysql" , 
                "user" => "root"  , 
                "password" => "1234"

            ]
        ] ; 
    }

}

?>