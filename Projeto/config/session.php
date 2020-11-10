<?php
    require_once 'db.php';
    session_start();

    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) )
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: index.php');

        $email_usuario = $_SESSION['email'];

        $nomeUser = $objBanco->query( "SELECT nome FROM usuario WHERE email == $nome_usuario");
    }

   