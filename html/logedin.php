<?php require "../config/config.php"; ?>
<html>
<h1>Connecté en temps que : <?php echo $_SESSION['user']['username']; ?></h1>  
</html>


<form action="../action/deconnexion.php" method="post">
<button>deconnexion</button>
</form>

