<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validation.php" method="post">
    <h3>Login :</h3>
    <input type="text" placeholder="entrer votre username" name ="login" required>
    <h3>Password :</h3> 
    <input type="password" placeholder="entrer votre passwod" name="password" required><br>

    <div><?php
    if(isset($_GET["error"])){
      if($_GET["error"] == 1){
        echo "password incorrect";
      }
      if($_GET["error"] == 2){
        echo "login incorrect";
      }
      if($_GET["error"] == 3){
        echo "Veuillez saisir un login et un mot de passe";
      }
      if($_GET["error"] == 4){
        echo "you have to log in first!!";
      }
       
    }
    
    ?></div>
    <input type="submit" value="Sign in" name='submit' style="background-color :blue">
    </form>
</body>
</html>