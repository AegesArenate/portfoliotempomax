
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "phpimports/styleImports.php"; ?>
        <?php require "config/config.php"; ?>
        <title>Maxence</title>
    </head>

    <body>
    <?php include "phpimports/navbar.php"; ?>    
    
    <div class="container center-align">
        <h1 class="play">Présentation</h1>
        <?php require "html/presentation.php";?>
    </div> 
    <div class="container center-align">
        <h2 class="center-align play">
            Vous souhaitez mon CV ?
        </h2>
        <img src="doc/CV_Maxence_SENETAIRE.jpg" width="80%">
        <div class="container center-align">
            <a class="waves-effect waves-light btn center"><i class="material-icons left" download="doc/CV_Maxence_SENETAIRE.pdf" href="doc/CV_Maxence_SENETAIRE.pdf">file_download</i>Télécharger mon CV</a>
        </div>
    </div>
    <div class="center-align play" >
        <h2>
            Voici mes projets:
        </h2>
    </div>
    <?php 
    $sql = "SELECT * FROM projet";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $projects = $pre->fetchAll(PDO::FETCH_ASSOC); 
    ?>
    <!--carrousel des projets-->
    <div class="container">
        <div class="carousel carousel-slider">
            <?php foreach ($projects as $projet) { ?>
                <a class="carousel-item" href="../projet.php?id=<?php echo $projet['id'] ?>"><img src="<?php echo $projet['parallax'] ?>"></a>
            <?php }?>
        </div>
    </div>
    <?php include 'phpimports/footer.php'; ?>
    
    <?php include "phpimports/scriptImports.php"; ?>
 
    </body>
</html>