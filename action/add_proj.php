<?php
require "../config/config.php";

move_uploaded_file($_FILES['parallax']['tmp_name'], "../img/".$_FILES['parallax']['name']);
move_uploaded_file($_FILES['picture']['tmp_name'], "../img/".$_FILES['picture']['name']);


$para = "img/".$_FILES['parallax']['name'];
$pic = "img/".$_FILES['picture']['name'];


$sql = "INSERT INTO projet(title,description1,parallax,description2,picture) VALUES(:title,:description1,:parallax,:description2,:picture)";
$pre = $pdo->prepare($sql);
$pre->bindParam("title", $_POST['title']);
$pre->bindParam("description1", $_POST['description1']);
$pre->bindParam("parallax", $para);
$pre->bindParam("description2", $_POST['description2']);
$pre->bindParam("picture", $pic);
$pre -> execute();

header("Location:../admin_proj.php");

?>