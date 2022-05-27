<?php
    // importo connessione al db
     require_once('config.php'); 

     $username = $connessione->real_escape_string($_POST['username']);
     $password = $connessione->real_escape_string($_POST['password']);

     if($_SERVER["REQUEST_METHOD"] === "POST"){ //solo se arriviamo in questa pagina tramite POST

        $sql_select = "SELECT * FROM utenti WHERE username = '$username'";
        if($result = $connessione->query($sql_select)){
            if($result->num_rows == 1){
                $row = $result->fetch_array(MYSQLI_ASSOC);
                if(password_verify($password, $row['password'])){
                    session_start();

                    $_SESSION['loggato'] = true; // utente loggato, utile per area_privata.php
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    header("location: ../html/home.html"); 

                }else{
                    header("Location: ../index.php?error=Password errata"); 
                    exit();
                }
            }else{
                header("Location: ../index.php?error=Lo username inserito non esiste"); 
	            exit();
            }
        }else{
            header("Location: ../index.php?error=Errore durante il login"); 
	        exit();
        }

        $connessione->close();
    }
?>