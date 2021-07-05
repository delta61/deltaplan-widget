<?php

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1); 


    $arr = explode ('/' , $_SERVER['REQUEST_URI']);

    if ($arr[2]) {

        if (isset($_SERVER['HTTP_REFERER'])) {

            $domain = 'pnevmo-mash.alfaltd.ru'; // taking from db


            

            $host = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);

            // var_dump ($host, $domain);

            if ($host === $domain){
                //
                echo 'yeap';


            } else {
                echo "console.log ('Error while loading main.js');";
            }

        } else {
            //sfd
        }
         

    }


