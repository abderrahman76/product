<?php
if(isset($_POST["submit"])){
    $login=$_POST["login"];
    $password =$_POST["password"];
require_once("config.php");
if(!empty($login) && !empty($password)){
if($login == USERLOGIN){
    if($password == USERPASS){
        header("location:../produit/produit.table.php?error=0");
        session_start();
        $_SESSION['username']= $login;
    } else{ $error = 'password incorrect';
    header("location:login.php?error=1");}
   
}else{ $error = 'login incorrect';
    header("location:login.php?error=2");}
}else{
    $error = 'empty inputs';
    header("location:login.php?error=3");
}

}
if(isset($_GET["diconnect"])){
    session_start();


$_SESSION = array();


session_destroy();


header("Location:login.php");
exit;}