<!--Connexion database-->
<?php 
$connexion = mysqli_connect("localhost","root","");
if(!$connexion){
    echo("Connexion impossible. Veuillez ressayer");
    exit;
}
if(!mysqli_select_db($connexion,"commerce")){
    echo("Accés a la base commerce impossible");
    exit;
}
?>