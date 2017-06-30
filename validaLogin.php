<?php
    require_once("funcaoValidaLogin.php");

    $login = $_POST['login'];
    $senha = $_POST['pass'];

    $verificaLogin = validaLogin($login, $senha);

    if ($verificaLogin){
        echo 'Login realizado com sucesso';
    }else{
        echo 'Usuário ou senha incorreto';
    }
    
?>