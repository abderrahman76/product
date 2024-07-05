<?php
include_once '../connect/connect.php';
$id=$_GET['id'];
$sql = "SELECT * FROM categories WHERE id=$id;";
$result = mysqli_query($mysqli, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0){
$row = mysqli_fetch_assoc($result);
}?>

<?php 
 session_start();

if (!isset($_SESSION['username'])) {

    header('Location: ../categories/login.php?error=4');
  exit;
}

?> 
<link rel="stylesheet" href="../css/produit.css">

<body>
        <div class="container">
        <div class="title">Ajouter un produit</div>
        <div class="content">
<form action="categories.edit.php" method="post">
            <div class="user-details">
              <div class="input-box">
                <span class="details">nome</span>
                <?php echo "<input type='text' value=$row[name] name='name' required>";?>
                            </div>
    
              <div class="input-box">
                <span class="details">description</span>
                <?php echo "<textarea  name='description' required>$row[description]</textarea>";?>
              </div>
             
             </div>
             <?php if(isset($_GET["error"])){
      if($_GET["error"] == 1){
        echo "remplire tous le champs";
      }}?>
           
             <div class="button">
              <input type="submit" value="sauvegarder" name="submit">
              <div class="butt">
              <a href="categories.table.php"><input type="button" value="Annuler"></a>
              <?php echo "<input type='text' value=$id name='id' hidden>"?>
            </div>
          </form>
        </div>
</body>

</html>