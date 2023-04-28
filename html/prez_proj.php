<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../phpimports/StyleImports.php"; ?>
    <?php require "../config/config.php"; ?>
    <title>Projets</title>
</head>

<body>

<?php include "../phpimports/navbar.php" ?>

<?php 
$sql = "SELECT * FROM projet";
$pre = $pdo->prepare($sql);

$pre->execute();
$projects = $pre->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
    <h1>Page de projets</h1>

    <?php 

    foreach ($projects as $projet) { ?>
    
    
    <div class="row">
    <div class="col-10">
        <div class="card medium">
        <div class="card-image">
            <img src="../<?php echo $projet['picture'] ?>">
            <span class="card-title"><?php echo $projet['title'] ?></span>
        </div>
        <div class="card-action">
            <a href="../projet.php?id=<?php echo $projet['id'] ?>">page projet</a>
        </div>
        </div>
    </div>
    </div>     


    <?php } ?>
</div>    




<?php include '../phpimports/footer.php'; ?>

<?php include "../phpimports/scriptImports.php"; ?>
</body>
</html>