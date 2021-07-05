<?php

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1); 


    $arr = explode ('/' , $_SERVER['REQUEST_URI']);

    if ($arr[2]) {
        var_dump ($_SERVER);   


    }


