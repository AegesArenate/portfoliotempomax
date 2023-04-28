<?php require "../config/config.php"; ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <?php require "../phpimports/styleImports.php" ?>
</head>
<body>
    <?php include "../phpimports/navbar.php"; ?>   
    <div class="container row">
        <h1 class="col s12">INSCRIT TOI</h1>
            <div class="col s12">
                <form method="post" action="../action/signup.php">
                    <input type='username' name='username' placeholder="Pseudo">
                    <input type='email' name='email' placeholder="email">
                    <input type='password' name='password' placeholder="mot de passe">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        <h2>Si tu as déjà un compte clique ici :</h2>
        <a href="connexion.php" class="waves-effect waves-light btn">connexion</a>
    </div>
</body>

<?php include '../phpimports/footer.php'; ?>

<?php require "../phpimports/scriptImports.php" ?>

</html>







