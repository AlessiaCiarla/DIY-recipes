<?php 
session_start();

if (isset($_SESSION['username'])) {

    require_once('config.php'); // importo connessione al db

if (isset($_POST['attuale']) && isset($_POST['nuova'])
    && isset($_POST['riscrivi'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
   
	$attuale =  validate($_POST['attuale']);
	$nuova =  validate($_POST['nuova']);
	$riscrivi = validate($_POST['riscrivi']);
    
    if(empty($attuale)){
      header("Location: area_privata.php?error=Scrivere la password attuale");
	  exit();
    }else if(empty($nuova)){
      header("Location: area_privata.php?error=Scrivere la nuova password");
	  exit();
    }else if($nuova !== $riscrivi){
      header("Location: area_privata.php?error=Le pasword non combaciano"); // c'è gia il js
	  exit();
    }else{
    	// hashing delle password
    	$attuale = password_hash($attuale, PASSWORD_DEFAULT);// cripta password con hash
    	$nuova = password_hash($nuova, PASSWORD_DEFAULT);
        $username = $_SESSION['username'];
        //
        $sql = "SELECT password
                FROM utenti WHERE 
                username='$username' AND password='$attuale'";
        $result = mysqli_query($connessione, $sql);
        
        $sql_2 = "UPDATE utenti
                    SET password='$nuova'
                    WHERE username='$username'";

        mysqli_query($connessione, $sql_2);

        header('Location: area_privata.php?success=Cambio password avvenuto con successo'); 

        exit(); 
    }
}else{
	header("Location: area_privata.php");
	exit();
}

}else{
     header("Location: Index.html");
     exit();
}
?>