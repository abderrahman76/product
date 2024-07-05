<?php 
 session_start();


if (!isset($_SESSION['username'])) {

  header('Location: ../login/login.php?error=4');
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
          <h1 class="title"><a style="color:#da96fa;">categories</a> <a style="color:#291579;">list</a></h1>
         
          <a href="categories.forme.php">
            <button type="button" class="Lbutton"><span class="spon"></span>Ajouter une categorie <span class="fa fa-plus-circle"></span></button>
          </a>
          <a href="../produit/produit.table.php">
            <button type="button" style="float: left;" class="Lbutton"><span class="spon"></span>list des produits <span class="fa fa-plus-circle"></span></button>
          </a>
          <table class="table" >
            <thead>
                <tr>
                    <th>nom</th>
                    <th colspan="2">description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once '../connect/connect.php';
                $sql = "SELECT * FROM categories;";
                $result = mysqli_query($mysqli, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
    <td data-label='Task name' class='task'> $row[name] </td>
    <td colspan='2' data-label='Poster name' class='task'> $row[description] </td>
    <td><a href='categories.delete.php?id=$row[id]'><button class='delete'>delete</button></a>
    
     <a href='categories.editForme.php?id=$row[id]' ><button class='edit'>edit</button></a></td>
</tr>";
    }}

                ?>
            </tbody>

          </table>
    </div>
    </body>