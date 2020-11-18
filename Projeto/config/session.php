<?php
    require_once 'db.php';

    ini_set('session.gc_maxlifetime', 1800); // 1 hora
    ini_set('session.cookie_lifetime', 1800);


    session_start();
   
   

    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) )
    {
        $_SESSION['CREATED'] = time();
        unset($_SESSION['nome_usuario']); 
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: index.php');
    }

    if (!isset($_SESSION['CREATED'])) {
        $_SESSION['CREATED'] = time();
    } else if (time() - $_SESSION['CREATED'] > 5) {
        // session started more than 30 minutes ago
        session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
        $_SESSION['CREATED'] = time();  // update creation time
    }


   