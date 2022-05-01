<?php
     require_once('config.php'); // importo connessione al db

     $username = $connessione->real_escape_string($_POST['username']); // fare il controllo dell'username esistente con JS
     $password = $connessione->real_escape_string($_POST['password']);

     if($_SERVER["REQUEST_METHOD"] === "POST"){ //solo se arriviamo in questa pagina tramite POST

        $sql_select = "SELECT * FROM utenti WHERE username = '$username'";
        if($result = $connessione->query($sql_select)){
            if($result->num_rows == 1){
                $row = $result->fetch_array(MYSQLI_ASSOC);
                if(password_verify($password, $row['password'])){
                    session_start();

                    $_SESSION['loggato'] = true;
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    header("location: area_privata.php"); // il redirect su un'area provata dell'account oppure su home
                }else{
                    echo "La password non è corretta"; // Bisogna mandare un messaggio di errore in un altro modo
                }
            }else{
                echo "Lo username inserito non esiste";
            }
        }else{
            echo "Errore durante il login";
        }
        $connessione->close();
    }
?>