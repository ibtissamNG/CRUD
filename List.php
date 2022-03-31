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
      
        include ('Connexion.php');
        echo '<div id="formAdd">';
        echo '<table border="0" cellspacing="0" class="tab">';
        echo '<caption><h1>Products</h1></caption>';
            echo '<tr class="class1">';
            echo '<th>Product</th>';
            echo' <th> Price</th>';
            echo '<th><a href="Add.php" class="ajt"><i class="fa fa-plus"></i></a></th>';
            echo '</tr>';
        $resultat1 = mysqli_query($connexion ,"SELECT id_produit, nom,prix FROM produit");
        while($ligne = mysqli_fetch_object($resultat1)) {
        echo '<tr align="center"><td class="class2">'. $ligne->nom.'</td> 
        <td class="class2">'. $ligne->prix.'</td><td class="class3">
        <button onclick="deleteme('.$ligne->id_produit.')"  name="Delete" class="cc1"><i class="fa fa-trash-o"></i></button>
        <button onclick="updateme('.$ligne->id_produit.')"  name="update" class="cc2"><i class="fa fa-pencil"></i></button></td>
        <script language="javascript">
            function deleteme(delid)
            {
            if(confirm("You want to delete this product ?"))
            {
                window.location.href="Supprimer.php?id="+delid+" ";
                return true;
            }
            }   
        function updateme(upid)
        {
            if(confirm("You want to modify this product ?"))
            {
                window.location.href="Modifier.php?id="+upid+" ";
                return true;
            }
        }   
        </script></tr>';}
            echo'</table>';
            echo'</div>';
    ?>

    </body>
</html>

