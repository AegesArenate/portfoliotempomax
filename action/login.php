
<?php require "../config/config.php"; ?>


<?php

$sql = "SELECT * FROM user WHERE email = :email";
$pre = $pdo->prepare($sql);
$pre->bindParam("email", $_POST['email']);
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

if(password_verify($_POST['password'], $user['password'])){
    $_SESSION['user'] = $user;
    $_SESSION['error'] = "Connexion effectuée";
    header('Location:../index.php');
}else{
    if(empty($user)){
        $_SESSION['error'] = "L'utilisateur n'existe pas";
   }else{
        $_SESSION['error'] = "Mot de passe ou email incorrecte";    
   }
    header('Location:../html/connexion.php');
}


?>
