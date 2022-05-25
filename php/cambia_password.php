<?php 
session_start();

if (isset($_SESSION['username'])) {

    require_once('config.php'); // importo connessione al db

if (isset($_POST['nuova']) && isset($_POST['riscrivi'])) {

	function validate($data){ // validazione dati
     $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
   
	$nuova =  validate($_POST['nuova']);
	$riscrivi = validate($_POST['riscrivi']);
    
    if(empty($nuova)){
      header("Location: ../html-php/area_privata.php?error=Scrivere la nuova password");
	  exit();
    }else if($nuova !== $riscrivi){
      header("Location: ../html-php/area_privata.php?error=Le pasword non combaciano"); 
	  exit();
    }else{
    	  // hashing delle password
    	  $nuova = password_hash($nuova, PASSWORD_DEFAULT);
        $username = $_SESSION['username'];

        $sql_2 = "UPDATE utenti
                    SET password='$nuova'
                    WHERE username='$username'";
        mysqli_query($connessione, $sql_2);
        header('Location: ../html-php/area_privata.php?success=Cambio password avvenuto con successo'); 
        exit(); 
        }
    
}else{
	header("Location: ../html-php/area_privata.php");
	exit();
}

}else{
     header("Location: ../index.php");
     exit();
}
?>