<?php
    // QUESTA PAGINA è IN COSTRUZIONE
    session_start();
    if(!isset( $_SESSION['loggato']) ||  $_SESSION['loggato'] !== true){
        header("location: account.html"); // oppure home
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area privata</title>
</head>
<body>
    <h1>Area privata</h1>
    <?php
        echo "Ciao " .  $_SESSION['username']
    ?>
    <a href="logout.php">Disconnetti</a> 
</body>
</html>