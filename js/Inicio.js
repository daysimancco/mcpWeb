function login() {

    var user,pass;

user = document.getElementById("Usuario").value;
pass = document.getElementById("Contraseña").value;
if(user== "admin" && pass == "admin1234"){
    window.location="index.html";
}


}