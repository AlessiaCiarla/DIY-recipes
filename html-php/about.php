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
    <title>Chi siamo - DIY-recipes</title>

    <!--file reset css-->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- importo lo head per la navbar, con lo bootstrap -->
    <?php include 'head_navbar.php';?>
    <!--importo lo head del footer-->
    <?php include 'head_footer.php';?>
    <!--css about-->
    <link rel="stylesheet" href="../css/about_style.css?ts=<?=time()?>&quot">
    <!--importo icone social-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!--navbar-->
    <?php include 'navbar.php'; ?> 
    <!-- card pamela-->
    <div class="container">
        <div class="row justify-content-around"> <!--justify-content-between || justify-content-md-center   col-sm-6-->    
            <div class="col-sm-6" id="colonna1">
                    <!--<div class="container" id="container1">-->
                    <div class="card" id="card1">
                        <div class="foto-profilo">
                            <div class="circle"></div>
                            <img src="../images/pamela4.png" alt="foto profilo pamela" id="foto_pam">
                        </div>
                        <div class="info">
                            <h1 class="title">Pamela Marinelli</h1>
                            <h3>Studentessa di Informatica alla Sapienza di Roma, appassionata di trekking, libri e serie tv</h3>
                            <div class="sizes">
                                <!--contatti social-->
                                <a href="https://www.instagram.com/_pamela_marinelli_/" class="fab fa-instagram" target="_blank" id="instagram"></a>
                                <a href="https://www.linkedin.com/in/pamelamarinelli/" class="fab fa-linkedin" target="_blank" id="linkedin"></a>
                                <a href="https://github.com/PamelaMarinelli" class="fab fa-github" target="_blank" id="github"></a>
                            </div>
                        </div>
                    </div>
               
            </div> <!--colonna-->
            <div class="col-sm-6" id="colonna2"> <!--offset-md-4-->
                        <!--card Alessia-->
                        <!--<div class="container" id="container2">-->
                        <div class="card" id="card2">
                            <div class="foto-profilo">
                                <div class="circle"></div>
                                <img src="../images/alessia.png" alt="foto profilo alessia" id="foto_ale"> <!--aggiungere foto-->
                            </div>
                            <div class="info">
                                <h1 class="title">Alessia Ciarla</h1>
                                <h3>Studentessa di Informatica alla Sapienza di Roma, appassionata di sport, libri e serie tv</h3>
                                <div class="sizes">
                                    <!--contatti social-->
                                    <a href="https://www.instagram.com/alessiaciarla/" class="fab fa-instagram" target="_blank" id="instagram"></a>
                                    <a href="https://www.linkedin.com/in/alessia-ciarla-b615951b6/" class="fab fa-linkedin" target="_blank" id="linkedin"></a>
                                    <a href="https://github.com/AlessiaCiarla" class="fab fa-github" target="_blank" id="github"></a>
                                </div>
                            </div>
                        </div>    
            </div> <!--colonna-->
        </div>
    </div> <!--container generale-->
    
    <script src="../js/about.js"></script>

    <?php include 'footer.php';?>
    
</body>
</html>