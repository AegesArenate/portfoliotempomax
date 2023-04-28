<nav class="purple darken-2 navbar-fixed saira">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo hide-on-small-only">Maxence</a>
                <a href="#" class="brand-logo hide-on-med-and-up center-align">Maxence</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="../index.php">Présentation</a></li>
                    <li><a href="../html/prez_proj.php">Projets</a></li>
                    <li><a href="../html/form.php">Contacte</a></li>
                    <li><a href="../games.php">Jeux</a></li>
                    <li><a href="../html/inscription.php">Inscription</a></li>
                    <li><a href="../action/login.php">Connexion</a></li>
                    <?php if (isset($_SESSION['user']) && ($_SESSION['user']['is_admin']==1)){ ?>
                        <li><a href="../admin.php">Tableau Administrateur</a></li>
                        <li><a href="../admin_proj.php">Tableau Projets</a></li>
                        <li><a href="../admin_form.php">Tableau Contact</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-links">
            <li><a href="../index.php">Présentation</a></li>
            <li><a href="../html/prez_proj.php">Projets</a></li>
            <li><a href="../html/form.php">Form</a></li>
            <li><a href="../games.php">Games</a></li>
            <li><a href="../html/inscription.php">Inscription</a></li>
            <li><a href="../html/login.php">Login</a></li>
            <?php if (isset($_SESSION['user']) && ($_SESSION['user']['is_admin']==1)){ ?>
                <li><a href="../admin.php">Panel Admin</a></li>
                <li><a href="../admin_proj.php">Panel Projet</a></li>
                <li><a href="../admin_form.php">Panel Form</a></li>
            <?php } ?>
               
        </ul>