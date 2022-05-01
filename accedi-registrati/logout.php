<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("location: account.html"); // che sia home 
    exit;
?>