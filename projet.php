<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "phpimports/styleImports.php"; ?>
    <?php require "config/config.php"; ?>
    <title>Projet</title>
</head>
    <body>
    
    <?php
    
    $sql = "SELECT * FROM projet WHERE id=:id";
    $pre = $pdo->prepare($sql);
    $pre->bindParam("id", $_GET['id']);
    $pre->execute();
    $projet = $pre->fetch(PDO::FETCH_ASSOC);

    ?>

    <?php include "phpimports/navbar.php"; ?>

    <img hidden id="rain" src="img/rain.gif" alt="gif de la pluie">
    <!--projet 3-->
    <div class="container center-align" id="projet1">
        <h1 class="play"> <?php echo $projet['title'] ?> </h1>
        <p class="tinos"> <?php echo $projet['description1'] ?> </p>
        
        <!--Parallax-->
        <div class="parallax-container">
            <div class="parallax"><img src="<?php echo $projet['parallax'] ?>" alt=""></div>
        </div>
        <p class="tinos"><?php echo $projet['description2'] ?> </p>           
        
        <img class="responsive-img imgw" src="<?php echo $projet['picture'] ?>" alt="">
    </div>
    
    <?php include 'phpimports/footer.php'; ?>

    <?php include "phpimports/scriptImports.php"; ?>

    </body>
</html>