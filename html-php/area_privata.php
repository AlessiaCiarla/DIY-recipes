<?php
    session_start();
    if(!isset( $_SESSION['loggato']) ||  $_SESSION['loggato'] !== true){
        header("location: area_privata.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area privata - DIY-recipes</title>

    <!--file reset css-->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- importo lo head per la navbar, con lo bootstrap -->
    <?php include 'head_navbar.php';?>
    <!--importo lo head del footer-->
    <?php include 'head_footer.php';?>
    <!--css area privata-->
    <link rel="stylesheet" href="../css/area_privata_style.css?ts=<?=time()?>&quot">
</head>
<body>
    <?php include 'navbar.php'; ?> <!--navbar-->
    
    <!--Inizio area privata con modifica password -->
    <div class="container">
        <h1><strong>Area privata di <?php echo " " . $_SESSION['username']?></strong></h1>
        <div class="form">
            <form class="modificaPassword-form" action="../php/cambia_password.php" method="POST"> 
                <input class="user-input" type="password" name="nuova" id="nuova" placeholder="Nuova password" required> 
                <input class="user-input" type="password" name="riscrivi" id="riscrivi" placeholder="Riscrivi password" required> 
                
                <!--Messaggio errore-->
                <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <!--Messaggio successo-->
                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <a href="area_privata.php"><input class="btn" id="conferma" type="submit" name="conferma" value="CONFERMA"></a>
            </form>
            
            <a href="../php/logout.php"><input class="btn" type="submit" name="" value="LOGOUT"></a> 
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>