<?php
require "../config/config.php";

move_uploaded_file($_FILES['picture']['tmp_name'], "../img/".$_FILES['picture']['name']);

$pic = "img/".$_FILES['picture']['name'];

if(!empty($_POST['username']) AND !empty($_FILES['picture']['name']) AND !empty($_POST['description']))
{
    $sql = "INSERT INTO presentation(username,picture,description) VALUES(:username,:picture,:description)";
    $pre = $pdo->prepare($sql);
    $pre->bindParam("username", $_POST['username']);
    $pre->bindParam("picture", $pic);
    $pre->bindParam("description", $_POST['description']);
    $pre -> execute();
    header("Location:../index.php");
} else {
    echo "Il manque des informations";
}

?>