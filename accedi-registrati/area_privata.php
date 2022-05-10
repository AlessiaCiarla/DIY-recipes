<?php
    // QUESTA PAGINA è IN COSTRUZIONE
    session_start();
    if(!isset( $_SESSION['loggato']) ||  $_SESSION['loggato'] !== true){
        header("location: area_privata.php"); // oppure home
        exit;
    }
    // da inserire una nuova pagina con sessione attiva e nome username

    // Inserire la parte di cambio password 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area privata</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <!--file reset css-->
    <link rel="stylesheet" href="../Home/reset.css">
    <!--css-->
    <link rel="stylesheet" href="area_privata.css">
    <!--Importo font api google (da scegliere)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
   
</head>
<body>
    <!------------------------------------------------------------------------navbar----------------------------------------------------------------------->
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
              <a class="navbar-brand" href="../Home/Index.html">
                  <img src="../images/Logo1.png" alt="logo" style="width:13rem;">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse navbar-toggle" id="navbarNavAltMarkup">
                  <div class="navbar-nav" id="info">
                      <a class="nav-item nav-link" href="#">Italiano</a>
                      <a class="nav-item nav-link" href="#">About</a>
                      <a class="nav-item nav-link" href="../accedi-registrati/account.html"><?php echo " " . $_SESSION['username']?> </a>
                  </div>
              </div>
          </nav>
      
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
              <div class="collapse navbar-collapse navbar-toggle" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-item nav-link active" href="#">Primi</a>
                      <a class="nav-item nav-link" href="#">Secondi</a>
                      <a class="nav-item nav-link" href="#">Contorni</a>
                      <a class="nav-item nav-link" href="#">Dolci</a>
                  </div>
              </div>
          </nav>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <!--Fine navbar-->
    
    <!--Inizio area privata con modifica password -->
    <div class="container">
        <h1>Area privata di <?php echo " " . $_SESSION['username']?></h1>
        <div class="form">
            <form class="modificaPassword-form" action="cambia_password.php" method="POST"> 

                <input class="user-input" type="text" name="attuale" id="attuale" placeholder="Password attuale" required> 
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
            
            <a href="logout.php"><input class="btn" type="submit" name="" value="LOGOUT"></a> 
        </div>
          
    </div>
</body>
</html>