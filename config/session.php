<?php
    session_start();

    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) )
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: ../index.php');
    }