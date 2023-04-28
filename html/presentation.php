<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Presentation</title>
    </head>
    <body>
        <?php
        $sql = "SELECT * FROM presentation";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $presentations = $pre->fetchAll(PDO::FETCH_ASSOC); 
        ?>
        <div class="s12 row">
            <?php foreach ($presentations as $presentation) { ?>
                <div class="col s6 bor">
                    <h2 class="play flow-text"><?php echo $presentation['username'] ?></h2>
                    <img class="activator responsive-img" src="<?php echo $presentation['picture'] ?>">
                    <p class="josefin"><?php echo $presentation['description'] ?></p>
                    <?php if (isset($_SESSION['user']) && ($_SESSION['user']['is_admin']==1)){ ?>
                        <form action="../action/delete_presentation.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $presentation['id'] ?>">
                            <button class="btn waves-effect waves-red" type="submit" name="delt">
                                <i class="material-icons center">delete_forever</i>
                            </button>
                        </form>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <?php if (isset($_SESSION['user']) && ($_SESSION['user']['is_admin']==1)){ ?>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">add_box</i>Créer</div>
                <div class="collapsible-body">
                    <form method="post" action="../action/add_presentation.php" enctype="multipart/form-data">
                        <input type="text" name="username" placeholder="Nom de l'utilisateur">
                        <p class="txtmor">Image de l'utilisateur</p>
                        <input type="file" name="picture">
                        <p></p>
                        <textarea name="description" placeholder="Description de l'utilisateur"></textarea>
                        <p></p>
                        <button type="submit" name="submit">Envoyer</button>
                    </form>
                </div>
            </li>
        </ul>
        <?php } ?>
    </body>
</html>