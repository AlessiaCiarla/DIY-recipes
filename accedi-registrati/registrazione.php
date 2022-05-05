<?php

    require_once('config.php'); // importo connessione al db

    $email = $connessione->real_escape_string($_POST['email']); // ottimizzare con preparred
    $username = $connessione->real_escape_string($_POST['username']); // fare il controllo dell'username esistente con JS
    $password = $connessione->real_escape_string($_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // cripta password con hash

    $sql = "INSERT INTO utenti (email, username, password) VALUES ('$email', '$username', '$hashed_password')";

    if($connessione->query($sql) === true){
        header("location: account.html"); // oppure redirect su home
    }else{
        echo "Errore durante registrazione utente $sql. " . $connessione->error;
    } 
?>