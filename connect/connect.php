<?php
$dbhost = "localhost";
$dbuser ="root";
$dbpass = "";
$dbname = "produit";

  $mysqli= new  mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
  }

