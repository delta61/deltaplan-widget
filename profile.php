<?php

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1); 





    define('MICROTIME_START',microtime(true));

    session_start();

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');

    $_SESSION['USER'] = null;

    //define('DROOT',dirname(__DIR__));
    define('DROOT', '/home/d/deltaltdru/deltaplan-widget/public_html/');
    define('INCLUDED', true);

    if ( ! defined('WITHOUT_DB')) {
        require_once(DROOT.'/inc/db.php');
    }

    if (
        ! defined('API_MODE')
        && ! defined('WITHOUT_AUTH')
    ) {
        require_once(DROOT.'/inc/access.php');
    }

    // ******************************

    echo $_userinfo['user_id'] . '<br>';
    echo $_userinfo['email'] . '<br>';
    echo $_userinfo['domain'] . '<br>';



?>

