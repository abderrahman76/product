<?php
include_once '../connect/connect.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$description = $_POST['description'];




if ( !empty($name) &&  !empty($description)) {
   
    $sql = "INSERT INTO categories (name, description) VALUES (?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $name, $description);
    $stmt->execute();
        header('Location: categories.table.php?Produit=succes');
        die();
}
else{
    header('Location: categories.forme.php?error=1');
}

}else{echo 'error';}