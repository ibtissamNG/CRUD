<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Product </title>
        <link rel="stylesheet" href="css/Style1.css">
        <script src="https://kit.fontawesome.com/9c0bf29922.js" crossorigin="anonymous"></script>
    </head>
    <body>

    <!DOCTYPE html>
      <nav class="head">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="Add.php">Add Products</a></li>
              <li><a href="List.php"> Products List</a></li>
          </ul>
      </nav>
        <form method="post">
            <label for="nom">Product name</label>
            <input type="text" name="nom" id="nom" placeholder="Name"><br><br>
            <label for="prix" id="label2">Price</label>
            <input type="text" name="prix" id="prix" placeholder="Price"><br><br>
            <input type="submit" name="submit" value="Add Product">
        </form>

        <?php
        /*connexion a la base de donnee*/
        include("Connexion.php");
        if(isset($_POST['submit']))
        {
            $nom=$_POST['nom'];
            $prix=$_POST['prix'];
            if($nom&&$prix)
            {
                if(is_numeric($prix))
                {
                 $req="INSERT INTO produit (Nom , prix) values ('$nom','$prix')";
                    //on envoie la requete
                    if($resultat = $connexion->query($req))
                    {
                        echo '<script>alert(\'Product added \');</script>';
                            header('Refresh: 0; url= Add.php');
                    }
                    else{
                        echo '<script>alert(\'Error .\');</script>';
                            header('Refresh: 0; url= Add.php');
                    }
                }
                else
                {
                    echo '<script>alert(\'You need to enter a numeric .\');</script>';
                    header('Refresh:0; url = Add.php');
                }
            }
        }
        /* deconnexion de la base de donnee*/
        mysqli_close($connexion);
        ?>
</body>
</html>
