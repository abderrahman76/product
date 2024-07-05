<?php
include_once '../connect/connect.php';
$id=$_GET['id'];
$query = "DELETE FROM categories WHERE id =$id";
$query_run = mysqli_query($mysqli,$query);
if($query_run){
  header("location:categories.table.php?msg=deleted_successfully");
  exit();
}else{
  header("location:categories.table.php?msg=delete_failed");
  exit();}
