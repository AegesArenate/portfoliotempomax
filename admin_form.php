<?php
require "config/config.php";


if ($_SESSION['user']['is_admin']==0) {
    header("Location:index.php");
    exit();
}

include "phpimports/styleImports.php";
include "phpimports/navbar.php";

$sql = "SELECT * FROM form";
$pre = $pdo->prepare($sql);
$pre->execute();
$forms = $pre->fetchAll(PDO::FETCH_ASSOC); ?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Form</title>
    </head>
    <body>
        <table class="container">
        <thead>
            <th>Email</th>
            <th>Pseudo</th>
            <th>Sujet</th>
            <th>Message</th>
        </thead>
        <div class="container">
            <?php foreach ($forms as $form) { ?>

                <tbody>
                    <div class="card-content">
                        <td>
                            <span class="card-title grey-text text-darken-2"><?php echo $form['email'] ?></span>
                        </td>
                        <td>
                            <span class="card-title grey-text text-darken-2"><?php echo $form['username'] ?></span>
                        </td>
                        <td>
                            <span class="card-title grey-text text-darken-2"><?php echo $form['subject'] ?></span>
                        </td>
                        <td>
                            <span class="card-title grey-text text-darken-2"><?php echo $form['message'] ?></span>
                        </td>
                    </div>
                </tbody>
            <?php } ?>
        </div>
        </table>
    </body>
</html>
<?php include "phpimports/scriptImports.php"; ?>