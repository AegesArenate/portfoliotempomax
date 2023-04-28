<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "../phpimports/styleImports.php"; ?>
        <?php require "../config/config.php"; ?>
        <title>Form</title>
    </head>
    <body>
        <?php include "../phpimports/navbar.php"; ?>
        <div class="container">
            <h1 class="saira">Formulaire de contacte</h1>
            <form method="post" action="../action/sendform.php">
                <input type="text" name="email" placeholder="Votre email">
                <input type="text" name="username" placeholder="Votre nom">
                <input type="text" name="subject" placeholder="Sujet">
                <input type="text" name="message" placeholder="Votre message">
                <button type="submit" name="submits" class="btn-flat waves-effect waves-light">Envoyer
                <i class="material-icons right"></i>
                </button>send
            </form>
        </div>
        <br>
        <br>
    </body>
    <?php include '../phpimports/footer.php'; ?>
</html>
