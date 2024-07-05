<?php
include_once '../connect/connect.php';
$id=$_GET['id'];
$query = "DELETE FROM produit WHERE id =$id";
$query_run = mysqli_query($mysqli,$query);
if($query_run){
  header("location:produit.table.php?msg=deleted_successfully");
  exit();
}else{
  header("location:produit.table.php?msg=delete_failed");
  exit();}

