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
include('Connexion.php');
$result1=
mysqli_query($connexion,"SELECT id_produit,nom,prix from produit where id_produit='".$_GET['id']."'");
while($ligne=mysqli_fetch_object($result1))
    {
        $ID=$ligne->id_produit;
        echo '<form method="POST" id="formAdd">
                Product:<br><input type="text" name="A" value="'.$ligne->nom.'"><br><br>
                        Price:<br><input type="text" name="B" value="'.$ligne->prix.'"><br><br>
                            <input type="submit" name="submit" value=" Validate ">
                            </form>';
    }

    if(isset($_POST['submit']))
    {
        $id=$ID;
        $nom=$_POST['A'];
        $prix=$_POST['B'];
        if($result = mysqli_query($connexion,"UPDATE  produit SET nom='$nom', prix='$prix' where id_produit=$id"))
            {
                echo'<script> alert(\' Product was modified successfuly .\');</script>';
                header('Refresh: 0; url=List.php');
            }
    }
    ?>

    </body>
</html>
