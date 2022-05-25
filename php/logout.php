<?php
    session_start(); 
    $_SESSION = array();
    session_destroy(); // distrugge dati associati alla sessione
    header("location: ../index.php"); // redirect al login 
    exit();
?>