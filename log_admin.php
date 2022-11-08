<?php 

session_start();
include "configuration.php"; //pour liens 
include "php/handling_log_admin.php"; // pour traitement php

if (!empty($_POST)) {
    $return = fct_connexion($_POST);
    

    //if(id) == connected => redirection
    if(isset($return['id'])&& !empty($return['id'])){
    $_SESSION['id'] = $return['id'];
    header("location: admin.php");
            die();

    }
} 
?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <Link href="style.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Lancelle Clara - Portfolio - admin </title>
</head>

<body>
    <header class="nav_ban">
        <div class="navbar">
            <nav class="navbar__items">
                <ul class="logo_only">
                    <li class="navbar__items__logo">
                        <figure>
                            <a href="index.php"><img class="logo" src="assets/img/logo.png" alt="logo"></a>
                        </figure>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="bloc__banner banner--small">
            <div class="banner__content">
                <header class="banner__header">
                    <h1 class="banner__header__title">Lancelle Clara</h1>
                    <h2 class="banner__header__desc">Etudiante en développement Web</h2>
                </header>
                <div class="banner__body">
                    <h4 class="banner__body__welcome"> Connexion </h4>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php if(empty($_SESSION['id'])) { ?>
        <section class="bloc">
            <div class="log__form">
                <form action="#" name="log_form" method="post">
                    <div class="log__form__id">
                        <label for="id" class="form-label"> Identifiant : </label>
                        <?php if (!empty($_POST['id']) && isset($return['errors'])) { $id = $_POST['id']; } else { $id=''; } ?>
                        <input type="text" class="form-control" id="id" name="id" value="<?=$id?>">

                        <?php if (isset($return['errors']) && !empty($return['errors'])) { 
                            foreach($return['errors'] as $error) { ?>
                            <p class="return_error text-center">
                                <?php echo $error; ?>
                            </p>
                            <?php } ?>
                        <?php } ?>
                    </div>

                    <div class="log__form__pass">
                        <label for="password" class="form-label"> Mot de passe : </label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="log send btn">Me connecter</button>
                </form>
            </div>
        </section>
        <?php }?>
    </main>
    <footer>
        <div class="copy-right">
            <p class="copy-right__text">
                Lancelle Clara &copy; 2022
            </p>
        </div>
    </footer>
</body>
</html>