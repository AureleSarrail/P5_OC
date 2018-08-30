<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $viewTitle ?></title>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


    <body>
        <div id="wrapper">
            <div class="container-fluid" id="main">
                <div id="header_global" class="row">
                    <header class="col-lg-12">
                        <div class="row">
                            <h1 class="col-lg-3" div id="logo">Blog AS-DEV</h1>
                            <ul id="nav_head" class=" list-unstyled list-inline col-lg-push-3 col-lg-6">
                                <li class="list-inline-item">
                                    <button  type="button" class="btn btn-link">
                                        <a href="index.php">Acceuil</a>
                                    </button>
                                </li>
                                <li class="list-inline-item">
                                    <button  type="button" class="btn btn-link">
                                        <a href="index.php?action=listPost">Les Posts</a>
                                    </button>
                                </li>
                                <li class="list-inline-item">
                                    <button  type="button" class="btn btn-link">
                                        <a href="#contact">Contactez nous</a>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </header>
                </div>
                <!-- Début du contenu à rendre MVC ensuite -->

            <div id="content_block">
                <?= $viewContent ?>
            </div>


            <!-- Fin du contenu -->

            </div>
        </div>
        <?php if (!isset($_SESSION['username'])) {
            ?>
            <footer id="footer" class="footer col-lg-12">
                <div class="row">
                    <div class="footer-copyright text-left py-3 col-lg-12">
                        <ul class=" list-unstyled list-inline footer_list">
                            <li class="col-lg-offset-1 col-lg-1">
                                <a href="index.php">Acceuil</a>
                            </li>
                            <li class="col-lg-1">
                                <a href="index.php?action=listPost">Les Posts</a>
                            </li>
                            <li class="col-lg-2">
                                <a href="#contact">Contactez nous</a>
                            </li>
                            <li class="col-lg-offset-6 col-lg-1">
                                <a href="index.php?action=Connect">Se connecter</a>
                            </li>   
                        </ul>
                    </div>
                </div>
            </footer>
        <?php
        } elseif (isset($_SESSION['username'])) {
            ?>
            <footer id="footer" class="footer col-lg-12">
                <div class="row">
                    <div class="footer-copyright text-left py-3 col-lg-12">
                        <ul class=" list-unstyled list-inline footer_list">
                            <?php if ($_SESSION['rights'] == 2) {
                                ?>
                                <li class="col-lg-offset-1 col-lg-1"><a href="index.php">Acceuil</a></li>
                                <li class="col-lg-1"><a href="index.php?action=listPost">Les Posts</a></li>
                                <li class="col-lg-2"><a href="#contact">Contactez nous</a></li>
                            <?php } elseif ($_SESSION['rights'] == 1) {
                                ?>
                                <li class="col-lg-offset-1 col-lg-2">
                                    <a href="index.php?action=createPost">Creation posts</a>
                                </li>
                                <li class="col-lg-2">
                                    <a href="AdminCom.php">Gestion Com</a>
                                </li>
                                <li class="col-lg-2">
                                    <a href="#AdminUser.php">Gestion Utilisateurs</a>
                                </li>
                            <?php }
                            if (isset($_SESSION['username'])) {
                                ?> <p class="col-lg-offset-3 col-lg-2 username">Bonjour <?= $_SESSION['username'] ?> !
                                    (<a href="index.php?action=deconnect">Deconnexion</a>)</p>
                            <?php
                            } else {
                                ?>
                                <li class="col-lg-offset-6 col-lg-1">
                                    <a href="index.php?action=Connect">Se connecter</a>
                                </li> 
                                <?php
                            } ?>
                        </ul>
                    </div>
                </div>
            </footer>
        <?php 
        } ?>
    </body>
</html>