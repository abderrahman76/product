<?PHP
if(isset($_POST['submit'])){
    include_once '../connect/connect.php';
   

$id =$_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
if ( !empty($name) &&  !empty($description)) {

 $query = "UPDATE categories SET name='$name',description='$description' WHERE id=$id";
 $query_run = mysqli_query($mysqli,$query);

   if($query_run){
       header("location:categories.table.php?msg=update successfully");
       exit();
   }else{
       header("location:categories.table.php?msg=update failed");
       exit();

   }


}else{
    header('Location: categories.editForme.php?error=1');
}
}