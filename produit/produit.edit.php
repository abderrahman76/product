<?PHP
if(isset($_POST['submit'])){
    include_once '../connect/connect.php';
   

$id =$_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$prix =$_POST['prix'];
$quantite=$_POST['quantite'];
$categorie=$_POST['categorie'];

if ( !empty($name) &&  !empty($description) && !empty($prix) && !empty($quantite) && !empty($categorie) ) {
 $query = "UPDATE produit SET name='$name',description='$description',prix='$prix', quantite ='$quantite',category_id ='$categorie' WHERE id=$id";
 $query_run = mysqli_query($mysqli,$query);

   if($query_run){
       header("location:produit.table.php?msg=update successfully");
       exit();
   }else{
       header("location:produit.table.php?msg=update failed");
       exit();

   }


}else{
    header('Location: edite.php?error=1');
}
}