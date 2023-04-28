<?php
require "../config/config.php";
if ($_SESSION['user']['is_admin']==0) {
    header("Location:index.php");
    exit();
}

$paraB = false;
$picB = false;

if (isset($_FILES['parallax']) && !empty($_FILES['parallax']['name'])){
    move_uploaded_file($_FILES['parallax']['tmp_name'], "../img/".$_FILES['parallax']['name']);
    $para = "img/".$_FILES['parallax']['name'];
    $paraB = true;
}

if (isset($_FILES['picture']) && !empty($_FILES['picture']['name'])){
    move_uploaded_file($_FILES['picture']['tmp_name'], "../img/".$_FILES['picture']['name']);
    $pic = "img/".$_FILES['picture']['name'];
    $picB = true;
}


$sql = "UPDATE projet SET title = :titles, description1 = :descriptions1, description2 = :descriptions2 WHERE id = :id";
$pre = $pdo->prepare($sql);
$pre->bindParam("titles", $_POST['title']);
$pre->bindParam("descriptions1", $_POST['description1']);
$pre->bindParam("descriptions2", $_POST['description2']);
$pre->bindParam("id", $_POST['id']);
$pre->execute(); 


if ($paraB){
    $sql = "UPDATE projet SET parallax = :parallaxs WHERE id = :id";
    $pre = $pdo->prepare($sql);
    $pre->bindParam("parallaxs", $para);
    $pre->bindParam("id", $_POST['id']);
    $pre->execute(); 
}

if ($picB){
    $sql = "UPDATE projet SET picture = :pictures WHERE id = :id";
    $pre = $pdo->prepare($sql);
    $pre->bindParam("pictures", $pic);
    $pre->bindParam("id", $_POST['id']);
    $pre->execute(); 
}

header("Location:../admin_proj.php");

?>