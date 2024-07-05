<?php
include_once '../connect/connect.php';
$sql = "SELECT * FROM produit;";
$result = mysqli_query($mysqli, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0){
while($row = mysqli_fetch_assoc($result)){
    $sql = "SELECT * FROM categories WHERE id =$row[category_id];";
    $results = mysqli_query($mysqli, $sql);
    $rows = mysqli_fetch_assoc($results);
        echo "<tr>
    <td data-label='Task name' class='task'> $row[name] </td>
    <td colspan='2' data-label='Poster name' class='task'> $row[description] </td>
    <td data-label='Dead line' class='deadline'> $row[prix] </td>
    <td data-label='Task holder' class='task'> $row[quantite] </td>";
    if(!empty($rows['name'])){
    echo " <td data-label='Task holder' class='task'> $rows[name] </td>";
    }else{
        echo"<td data-label='Task holder' class='task'>aucune categorie </td>";
    }
    echo "<td><a href='delete.php?id=$row[id]'><button class='delete'>Supprimer</button></a>
    
     <a href='edite.php?id=$row[id]' ><button class='edit'>Modifier</button></a></td>
</tr>";
    }}



