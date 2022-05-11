<?php
     require_once('config.php'); // importo connessione al db

     $username = $connessione->real_escape_string($_POST['username']);
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
                    header("location: area_privata.php"); // il redirect su un'area privata dell'account oppure su home

                }else{
                    header("Location: account.php?error=Password errata"); 
                    exit();
                }
            }else{
                header("Location: account.php?error=Lo username inserito non esiste"); 
	            exit();
            }
        }else{
            header("Location: account.php?error=Errore durante il login"); 
	        exit();
        }

        $connessione->close();
    }
?>