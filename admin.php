<?php require "config/config.php"; ?>
<?php 
if ($_SESSION['user']['is_admin']==0) {
    header("Location:index.php");
    exit();
}

?>


<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "phpimports/styleImports.php"; ?>
        
        <title>Panel Admin</title>
    </head>

    <body>
        <?php include "phpimports/navbar.php"; ?>    
        <div class="container">
            <h1>Tableau Administrateur</h1>
        </div>
        <?php
        $sql = "SELECT * FROM user"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   
        foreach($data as $user){ ?>
            <div class="container">
                <h2><?php echo "#".$user['id']." - ".$user['username']." - ".$user['email'] ?></h2>
                <h3>Admin :<?php echo $user['is_admin']==1?"Oui":"Non" ?></h3>
                    <form action="action/switch_admin.php" method="post">
                        <input type="hidden" name="is_admin" value="<?php echo $user['is_admin']==1?0:1 ?>">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button type="submit" name="button" class="waves-effect waves-light btn-flat">Changer rôle
                            <i class="material-icons left text-dark">autorenew</i>
                        </button>
                    </form>
                    <form action="action/delete_user_admin.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button type="submit" name="button" class="waves-effect waves-light btn-flat">Supprimer
                            <i class="material-icons left text-dark">delete</i>
                        </button>
                    </form>
            </div>
        <?php } ?>
    </body>
</html>