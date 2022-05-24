<?php

    require_once('config.php'); // importo connessione al db

    $ing1 = $connessione->real_escape_string($_POST['ing1']); 
    $ing2 = $connessione->real_escape_string($_POST['ing2']); 
    $ing3 = $connessione->real_escape_string($_POST['ing3']); 
    $numero_persone = $connessione->real_escape_string($_POST['numero_persone']); 
    $categoria = $connessione->real_escape_string($_POST['categoria']);
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $sql_select = "SELECT nome_ricetta FROM ricette WHERE ing1 = '$ing1' and ing2 = '$ing2' and ing3 = '$ing3' and numero_persone = '$numero_persone' and categoria = '$categoria'";
        if($result = $connessione->query($sql_select)){
            if($result->num_rows == 1){
                $row = $result->fetch_array(MYSQLI_ASSOC); // $row = $result->fetch_assoc()
                session_start();
                if( "pancakes" == $row["nome_ricetta"]){
                    header("location: ../html/pancakes.html");
                }else if( "amatriciana" == $row["nome_ricetta"]){
                    header("location: ../html/amatriciana.html");
                }else if( "crostata" == $row["nome_ricetta"]){
                    header("location: ../html/crostata.html");
                }else if( "couscous" == $row["nome_ricetta"]){
                    header("location: ../html/couscous.html");
                }else if( "guacamole" == $row["nome_ricetta"]){
                    header("location: ../html/guacamole.html");
                }else if( "hummus" == $row["nome_ricetta"]){
                    header("location: ../html/hummus.html");
                }else if( "panzanella" == $row["nome_ricetta"]){
                    header("location: ../html/panzanella.html");
                }else if( "crostino" == $row["nome_ricetta"]){
                    header("location: ../html/crostino.html");
                }else{
                    header("Location: ../html/tua_ricetta.html"); 
                    exit();
                }       
        }
        $connessione->close();
    }
}
?>
