<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Commerce</title>
        <link href="./css/Style1.css" rel="stylesheet"  type="text/css">
        <script src="https://kit.fontawesome.com/9c0bf29922.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <nav class="head">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="Add.php">Add Products</a></li>
              <li><a href="List.php"> Products List</a></li>
          </ul>
      </nav>

<?php 
include("Connexion.php");
$select="delete from produit where id_produit= '".$_GET['id']."'  "; //to get ID of the product we want to delete
if($query=mysqli_query($connexion,$select)) //if the connexion with the DB is going well we will excecute the select
{
    echo '<script>alert(\'Product deleted succesfully!!!\');</script>';
    header('Refresh: 0; url=List.php');
}
else{
    echo'<script>alert(\'ERROR!Try again\')</script>';
    header('Refresh: 0; url=List.php');
}
?>
</body>
</html>
