<?php
    // importo connessione al db
    require_once('config.php'); 
    // valori degli elementi da index.php 
    $email = $connessione->real_escape_string($_POST['email']); 
    $username = $connessione->real_escape_string($_POST['username']);
    $password = $connessione->real_escape_string($_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // cripta password con hash
    $sql = "INSERT INTO utenti (email, username, password) VALUES ('$email', '$username', '$hashed_password')";

    if($connessione->query($sql) === true){
        header("Location: ../index.php?success=Registrazione avvenuta con successo"); 
	    exit();
    }else{
        header("Location: ../index.php?error=Registrazione fallita"); 
	    exit();
    } 
?>