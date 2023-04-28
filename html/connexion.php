<?php require "../config/config.php"; ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <?php require "../phpimports/styleImports.php" ?>
</head>
<body>
<?php include "../phpimports/navbar.php"; ?>   
<div class="container row">
    <h1 class="col s12">CONNECTE TOI</h1>

    <?php 
    
    if(isset($_SESSION['error'])) {
        echo ($_SESSION['error']);
        unset($_SESSION['error']);
    }
     
    ?>

        <div class="col s12">
            <form method="post" action="../action/login.php">
                <input type='email' name='email' placeholder="email">
                <input type='password' name='password' placeholder="mot de passe">
                <button class="btn waves-effect waves-light" type="submit" name="action">Connexion
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    <h2>Si tu n'as pas encore de compte clique ici :</h2>
    <a href="inscription.php" class="waves-effect waves-light btn">inscription</a>
</div>
</body>

<?php include '../phpimports/footer.php'; ?>

<?php require "../phpimports/scriptImports.php" ?>

</html>