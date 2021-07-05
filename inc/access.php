<?php
    defined('INCLUDED') or die('not included');


    if ( isset($_SERVER['PHP_AUTH_USER'])
         && $_SERVER['PHP_AUTH_USER']
         && strpos($_SERVER['PHP_AUTH_USER'],' ') === false
        ) {
            $auth_user = $db->escape(strtolower($_SERVER['PHP_AUTH_USER']));
            $auth_pw = $db->escape($_SERVER['PHP_AUTH_PW']);

            $res = $db->query("SELECT * FROM deltaplan_users
                WHERE email='{$auth_user}'
                    AND (pass='{$auth_pw}' OR pass='')
                LIMIT 1");
            if ( ! $res) exit('db error');
        }
        if ( ! $res || ! $db->num_rows($res)) {
                header('WWW-Authenticate: Basic realm="Admin Page"');
                header('HTTP/1.0 401 Unauthorized');
                exit();
            
        }

        unset($auth_pw);
        $_userinfo = $db->fetch_assoc($res);