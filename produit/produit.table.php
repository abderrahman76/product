<?php 
 session_start();


if (!isset($_SESSION['username'])) {

  header('Location:../login/login.php?error=4');
  exit;
}



?> 
<head>
<link rel="stylesheet" href="../css/projects.css">
</head>
<header class="header">

<h3 style="color:#190f48;"><?php echo "hello ".$_SESSION['username']."!"; ?> </h3>
<a class="btn-logout" href="../login/validation.php?diconnect=1">disconnect</a>
</header>
<body>
    



    <div class="table-container">
          <h1 class="title"><a style="color:#da96fa;">product</a> <a style="color:#291579;">list</a></h1>
          <a href="produit.php">
            <button type="button" class="Lbutton"><span class="spon"></span>Ajouter un produit <span class="fa fa-plus-circle"></span></button>
          </a>
          <a href="../categories/categories.table.php">
            <button type="button" style="float: left;" class="Lbutton"><span class="spon"></span>list des categories <span class="fa fa-plus-circle"></span></button>
          </a>
          <table class="table" >
            <thead>
                <tr>
                    <th>nom</th>
                    <th colspan="2">description</th>
                    <th >prix</th>
                    <th >quantite</th>
                    <th >categorie</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'list.inc.php';
                ?>
            </tbody>

          </table>
    </div>
    </body>