<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>DIY-recipes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!--file reset css-->
    <link rel="stylesheet" href="../Home/reset.css">
    <!--css form-->
    <link rel="stylesheet" href="style.css?ts=<?=time()?>&quot"> <!-- per problema cache browser, così verrà sempre caricato il file css-->
    <!--Importo font api google (da scegliere)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
     <!--omino account-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
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
                      <a class="nav-item nav-link" href="../accedi-registrati/account.php">Accedi</a>
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
    
  <!----------------------------------------------------------------Inizio area form----------------------------------------->
  <div class="container">
    <div class="form">
        <!-- Inizio form login-->
        <form class="login-form" action="login.php" method="POST"> 
          <i class="fas fa-user-circle"></i> <!--omino account-->
          
          <input class="user-input" type="text" name="username" id="username" placeholder="Username" required> 
          <input class="user-input" type="password" name="password" placeholder="Password" required>

          <!--Messaggio errore in caso di login fallito oppure registrazione fallita-->
          <?php if (isset($_GET['error'])) { ?>
                <p class="error" id="f"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <!--Messaggio successo in caso di registrazione avvenuta-->
          <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <input class="btn" type="submit" name="" value="LOGIN">
          
          <div class="options-02">
            <p>Non sei registrato? <a href="#">Crea un Account</a></p>
          </div>
        </form>
        <!--Fine form login-->
        <!--Inzio form registrazione-->
        <form class="signup-form" action="registrazione.php" method="POST">
          <i class="fas fa-user-plus"></i>

          <input class="user-input" type="text" name="username" id="username" placeholder="Username" required>
          <input class="user-input" type="email" name="email" id="email" placeholder="Indirizzo email" required>
          <input class="user-input" type="password" name="password" id="password" placeholder="Password" required>
          <input class="btn" type="submit" name="" value="Registrati">

          <div class="options-02">
            <p>Hai già un account? <a href="#">Accedi</a></p>
          </div>

        </form>
        <!--Fine form registrazione-->
      </div>
      <!--Fine area form-->

      <script type="text/javascript">
      $('.options-02 a').click(function(){
        $('form').animate({
          height: "toggle", opacity: "toggle"
        }, "slow");
      });
      </script>
    </div>
  </body>
</html>
      