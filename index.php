<?php

if (isset($_GET['register'])){
    if (!isset($_GET['email']) || $_GET['email'] == '') {

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