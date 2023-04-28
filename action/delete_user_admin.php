<?php
require "../config/config.php";
if ($_SESSION['user']['is_admin']==0) {
    header("Location:index.php");
    exit();
}

$sql= "DELETE FROM user WHERE id = :id";
$pre = $pdo->prepare($sql);
$pre->bindParam("id",$_POST['id']);
$pre->execute();

header("Location: ../admin.php");
?>