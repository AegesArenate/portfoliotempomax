<?php
require "config/config.php";


if ($_SESSION['user']['is_admin']==0) {
    header("Location:index.php");
    exit();
}

include "phpimports/styleImports.php";
include "phpimports/navbar.php";

$sql = "SELECT * FROM projet";
$pre = $pdo->prepare($sql);
$pre->execute();
$projects = $pre->fetchAll(PDO::FETCH_ASSOC); ?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Projet</title>
    </head>

    <body>
        <div class="container">
            <?php foreach ($projects as $projet) { ?>

                <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo $projet['picture'] ?>">
                </div>
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4"><?php echo $projet['title'] ?></span>
                    <div class="row">
                        <form action="action/delete_proj.php" method="post" class="col s4">
                            <input type="hidden" name="id" value="<?php echo $projet['id'] ?>">
                            <button class="btn waves-effect waves-light" type="submit" name="button">
                                <i class="material-icons center">delete_forever</i>
                            </button>
                        </form>
                        <div class="container  col s4">
                            <button class="btn waves-effect waves-light" type="submit" name="button">
                                <a href="html/update.php?id=<?php echo $projet['id'] ?>">
                                    <i class="material-icons center white-text">update</i>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
            
        <div class="container">
            <h2>Ajouter un projet</h2>
            
            <form action="action/add_proj.php" method="post" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Titre" value="">
                <textarea name="description1" placeholder="Description 1"></textarea>
                <p>Image parallax</p>
                <input type="file" name="parallax">
                <textarea name="description2" placeholder="Description 2"></textarea>
                <p>Image d'illustration</p>
                <input type="file" name="picture">
                <button type="submit" name="button">Ajouter
                    <i class="material-icons right">add</i>
                </button>
            </form>
        </div>
    </body>
</html>
<?php include "phpimports/scriptImports.php"; ?>