<?php 
require "../config/config.php";
if ($_SESSION['user']['is_admin']==0) {
    header("Location:index.php");
    exit();
}

$sql ="UPDATE user SET is_admin=:is_admin WHERE id=:id";
$pre = $pdo->prepare($sql);
$pre->bindParam("id", $_POST['id']);
$pre->bindParam("is_admin", $_POST['is_admin']);
$pre->execute();

header("Location: ../admin.php");
?>