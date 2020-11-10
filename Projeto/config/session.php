<?php
    require_once 'db.php';

    if ( session_status() !== PHP_SESSION_ACTIVE) {

    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) )
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: home.php');
    }

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
        header('location: index.php');
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


}