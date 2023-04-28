<?php 
#signup.php
require "../config/config.php"; 

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL
$sql = "INSERT INTO user(username,email,password) VALUES(:username,:email,:password)";
//On prépare la requête
$pre = $pdo->prepare($sql);

$passwordInput = $_POST['password'];
$passwordHash = password_hash($passwordInput, PASSWORD_BCRYPT);

//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("username", htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF_8'));
$pre->bindParam("email", htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF_8'));
$pre->bindParam("password", htmlspecialchars($passwordHash, ENT_QUOTES, 'UTF_8'));
//On execute la requête
$pre->execute();

header('Location:../html/sucess.php');//on le redirige sur la page d'accueil du site !
?>