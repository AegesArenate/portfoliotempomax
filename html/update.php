<?php
require "../config/config.php";
include "../phpimports/styleImports.php";

if ($_SESSION['user']['is_admin']==0) {
    header("Location:index.php");
    exit();
}


$sql = "SELECT * FROM projet WHERE id=:id";
    $pre = $pdo->prepare($sql);
    $pre->bindParam("id", $_GET['id']);
    $pre->execute();
    $projet = $pre->fetch(PDO::FETCH_ASSOC);

?>
<div class="container">
    <form action="../action/update_proj.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $projet['id'] ?>">
        <p>Titre :</p>
        <input type="text" name="title" value="<?php echo $projet['title'] ?>">
        <p>Description 1 :</p>
        <textarea name="description1"><?php echo $projet['description1'] ?></textarea>
        <p>Image parallax <?php echo $projet['parallax'] ?></p>
        <input type="file" name="parallax">
        <p>Description 2 :</p>
        <textarea name="description2"><?php echo $projet['description2'] ?></textarea>
        <p>Image d'illustration <?php echo $projet['picture'] ?></p>
        <input type="file" name="picture">
        <button type="submit" name="button">Update
            <i class="material-icons right">update</i>
        </button>
    </form>
</div>




