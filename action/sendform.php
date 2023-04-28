<?php 
require "../config/config.php"; 
    if(isset($_POST['submits']))
    {
        if(!empty($_POST['email']) AND !empty($_POST['username']) AND !empty($_POST['subject']) AND !empty($_POST['message']))
        {
            $sql = "INSERT INTO form(email, username, subject, message) VALUES (:email, :username, :subject, :message)";
            $pre = $pdo->prepare($sql);
            $pre->bindParam("email", htmlspecialchars($_POST['email']));
            $pre->bindParam("username", htmlspecialchars($_POST['username']));
            $pre->bindParam("subject", htmlspecialchars($_POST['subject']));
            $pre->bindParam("message", htmlspecialchars($_POST['message']));
            $pre->execute();

            header('Location:../index.php');
        } else {
            echo "Veuillez compléter le document si vous voulez nous contacter !";
        }
        if (isset($_POST['email'])) {

            $to = $_POST['email'];
            $subject = 'Merci de nous avoir contacté';
            $message = 'Nous avons bien reçu votre message, nous allons vous envoyer un mail dans peu de temps.';
            $headers = implode("\r\n", array('MIME-Version: 1.0','Content-type: text/html; charset=utf8'));

            mail($to, $subject, $message, $headers);
        }
    }
?>