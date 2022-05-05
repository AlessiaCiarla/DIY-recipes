function checkPassword(){
    let password = document.getElementById("nuova").value;
    let cnfrmPassword = document.getElementById("riscrivi").value;
    console.log(" Password:", password,'\n',"Confirm Password:",cnfrmPassword);
    let message = document.getElementById("message");

    if(password.length != 0){
        if(password == cnfrmPassword){
            message.textContent = "Le Password combaciano"; // si può anche ommettere
            message.style.backgroundColor = "#1dcd59";
        }
        else{
            message.textContent = "Le password non corrispondono";
            message.style.backgroundColor = "#ff4d4d";
        }
    }
    else{
        alert("La Password non può essere vuota!");
        message.textContent = "";
    }
}