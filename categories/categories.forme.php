<?php 
 session_start();

if (!isset($_SESSION['username'])) {

  header('Location: ../categories/login.php?error=4');
  exit;
}



?> 
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/produit.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit</title>
</head>
<body>
<div class="container">
        <div class="title">Ajouter un categorie</div>
        <div class="content">
<form action="categories.add.php" method="post">
            <div class="user-details">
              <div class="input-box">
                <span class="details">nome</span>
                <input type="text" placeholder="Entre le nom" name="name" required>
              </div>
    
              <div class="input-box">
                <span class="details">description</span>
                <textarea  name="description" required></textarea>
              </div>
             
             </div>
             <?php if(isset($_GET["error"])){
      if($_GET["error"] == 1){
        echo "remplire tous le champs";
      }}?>
           
             <div class="button">
              <input type="submit" value="sauvegarder" name="submit">
              <div class="butt">
              <a href="categories.table.php"><input type="button" value="cancel"></a>
            </div>
          </form>
        </div>
</body>

</html>