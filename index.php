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

    if ( ! defined('WITHOUT_DB')) {
        require_once(DROOT.'/inc/db.php');
    }

    if (
        ! defined('API_MODE')
        && ! defined('WITHOUT_AUTH')
    ) {
        require_once(DROOT.'/inc/access.php');
    }


    if (isset($_GET['register'])){
        if (!isset($_GET['email']) || $_GET['email'] == '') {
            echo 'Введите E-mail';
        } else {
            


        }

    }
 

?>

<p>Регистрация</p> 

<form>
    <label for="email">E-mail</label>
    <input name="email" />
    <input type="hidden" name="register" />

    <input type="submit" value="Регистрация" />
</form>
<br><br>
<p>Войти</p> 

<form>
    <label for="email">E-mail</label>
    <input name="email" />
    <label for="email">Password</label>
    <input name="password" />
</form>