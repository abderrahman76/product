<?php
include_once '../connect/connect.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$description = $_POST['description'];
$prix =$_POST['prix'];
$quantite=$_POST['quantite'];
$categorie=$_POST['categorie'];




if ( !empty($name) &&  !empty($description) && !empty($prix) && !empty($quantite) && !empty($categorie) ) {
   
    $sql = "INSERT INTO produit (name, description, prix, quantite,category_id) VALUES (?, ?, ?, ?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssiii", $name, $description, $prix, $quantite,$categorie);
    $stmt->execute();
        header('Location: Produit.table.php?Produit=succes');
        die();
}
else{
    header('Location: Produit.php?error=1');
}










}else{echo 'error';}

