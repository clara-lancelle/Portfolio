<?php
include "configuration.php";

include "php/handling_index.php";

if (!empty($_POST)) {
    $return = fct_contact($_POST);
    unset($_POST);
}



?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="Portfolio et CV de lancelle clara, développeuse web en formation à La Manu (Compiègne).">
    <link rel="icon" href="<?php echo BASE_URL . '/assets/img/favicon.png' ?>" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <Link href="style.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Lancelle Clara - Portfolio </title>
</head>

<body>
    <header class="nav_ban">
        <div class="navbar">
            <figure class="navbar__items__logo">
                <a id="home_link" href="#" title="lien vers la page d'accueil">
                    <img class="logo" src="<?php echo BASE_URL . '/assets/img/logo.png' ?>"
                        alt="logo du portfolio de Lancelle Clara">
                </a>
            </figure>

            <div id="menu-button">
                <div id="line-1"></div>
                <div id="line-2"></div>
                <div id="line-3"></div>
            </div>

            <nav class="navbar__items" role="navigation" id="menu">
                <ul>
                    <li class="navbar__items__link">
                        <a href="#moi" title="lien vers section : à propos de moi"> A propos de moi </a>
                    </li>
                    <li class="navbar__items__link">
                        <a href="#compétences" title="lien vers section : compétences"> Compétences </a>
                    </li>
                    <li class="navbar__items__link">
                        <a href="#réalisations" title="lien vers section : réalisations"> Réalisations </a>
                    </li>
                    <li class="navbar__items__link">
                        <a href="#contact" title="lien vers section : contact"> Contact </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="bloc__banner">
            <div class="banner__content">
                <header class="banner__header">
                    <h1 class="banner__header__title">Lancelle Clara</h1>
                    <h2 class="banner__header__desc">Etudiante en développement Web</h2>
                </header>
                <div class="banner__body">
                    <h3 class="banner__body__welcome"> Bienvenue sur mon Portfolio </h3>
                    <p class="banner__body__desc"> Vous trouverez ici mes compétences, mes réalisations ainsi que mon
                        CV. </p>
                </div>
                <a href="#" class="scroll-down" address="true"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <div id="moi"></div>
    <main>
        <button class="scroll_top" onclick="topFunction()" id="myBtn" title="Go to top">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                <path
                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
            </svg>
        </button>

        <section class="bloc aboutMe">
            <div class="aboutMe__content">
                <header class="aboutMe__content__header">
                    <h3 class="header__title">A propos de moi</h3>
                    <h4 class="header__subtitle">Qui suis-je ?</h4>
                </header>
                <div class="section-divider"></div>
                <div class="aboutMe__content__body">
                    <p class="body__desc">
                        Je m'appelle Clara, j'ai 24 ans et je suis en reconversion professionelle. <br>
                        Je suis en formation de 'Développeur web et web mobile' à La Manu (école du numérique),
                        Compiègne. <br><br>
                        Cette formation intensive permet d'obtenir un titre Professionnel d’Etat « Développeur Web et
                        Web Mobile » (RNCP 31114, Bac+2). <br> <br>
                        De septembre 2021 à septembre 2022, je me suis formée, en autodidacte, aux bases du metier de
                        developpeur via des sites internet comme OpenClassroom et Pierre Giraud. <br><br>
                        Je suis très interéssée et passionnée par les langages et logiciels que j'apprend, j'aime tester
                        mes connaissances et réaliser des projets dans lesquels je peux me confronter à de nouvelles
                        fonctionnalitées mais aussi, à de nouvelles problématiques. <br>
                    </p>
                    <figure class="body__img myPic">
                        <img src="<?php echo BASE_URL . '/assets/img/photo_cv.png' ?>"
                            alt="Photo d'identité / de profil de lancelle Clara">
                    </figure>
                </div>
                <div class="aboutMe__content__btn btn">
                    <a href="<?php echo BASE_URL . '/assets/img/cv_lancelle_clara_2.pdf' ?>" class="cv__btn"
                        target="_blank" title="CV de clara lancelle"> Mon CV <svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                        </svg></a>
                </div>
            </div>
            <div id="compétences"></div>
        </section>

        <section class="bloc">
            <div class="skills__content">
                <header class="skills__content__header">
                    <h3 class="header__title">Mes compétences</h3>
                    <h4 class="header__subtitle"> Les logiciels et langages auxquels je me suis formée : </h4>
                    <div class="section-divider"></div>
                </header>
                <div class="skills__content__body">
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="assets/img/HTML5_logo.png" alt="logo HTML5">
                            </figure>
                            <h5>HTML5</h5>
                            <div class="grade">
                                <div class="progress p85">
                                    <p> 85% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="assets/img/CSS3_logo.png" alt="logo CSS3">
                            </figure>
                            <h5>CSS3</h5>
                            <div class="grade">
                                <div class="progress p85">
                                    <p> 85% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="assets/img/JavaScript_logo.png" alt="logo JS">
                            </figure>
                            <h5>JavaScript</h5>
                            <div class="grade">
                                <div class="progress p60">
                                    <p> 60% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="https://alfredotoledo.neocities.org/pictures/Php_01-01.png"
                                    alt="logo PHP">
                            </figure>
                            <h5>PHP</h5>
                            <div class="grade">
                                <div class="progress p70">
                                    <p> 70% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="assets/img/mySql_logo.png" alt="logo MySQL">
                            </figure>
                            <h5>MySQL</h5>
                            <div class="grade">
                                <div class="progress p60">
                                    <p> 60% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="assets/img/php_my_admin_logo.png" alt="logo PHPMyAdmin">
                            </figure>
                            <h5>PHPMyAdmin</h5>
                            <div class="grade">
                                <div class="progress p70">
                                    <p> 70% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="assets/img/sass_logo.png" alt="logo SCSS">
                            </figure>
                            <h5>SASS</h5>
                            <div class="grade">
                                <div class="progress p80">
                                    <p> 80% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="assets/img/Git_logo.png" alt="logo Git">
                            </figure>
                            <h5>GIT</h5>
                            <div class="grade">
                                <div class="progress p60">
                                    <p> 60% </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="card-skills__content">
                            <figure class="card-skills__content__img">
                                <img class="logo" src="assets/img/Bootstrap_logo.png" alt="logo Bootstrap">
                            </figure>
                            <h5>Bootstrap</h5>
                            <div class="grade">
                                <div class="progress p85">
                                    <p> 85% </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php $i = 0; ?>
                <div class="skills__degree">
                    <h4 class="header__subtitle"> Les certificats de réussite obtenus via Openclassroom : </h4>
                    <div class="section-divider"></div>
                    <div class="skills__degree__content">
                        <div class="card-degree">
                            <div class="card-degree__content">
                                <h5> HTML 5 et CSS 3 </h5>
                                <figure class="card-degree__content__img">
                                    <img class="degree" src="<?php echo BASE_URL . '/assets/img/op_html_css.png' ?>"
                                        alt="diplome HTML CSS lancelle clara OpenClassroom">
                                    <div id="modal__img<?= $i ?>" class="modal">
                                        <img class="degree--modal"
                                            src="<?php echo BASE_URL . '/assets/img/op_html_css.png' ?>"
                                            alt="diplome HTML CSS lancelle clara OpenClassroom">
                                        <a href="#" rel="modal:close"></a>
                                    </div>
                                    <p>
                                        <a href="#modal__img<?php echo $i ?>" rel="modal:open">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-zoom-in" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                <path
                                                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />

                                            </svg>
                                        </a>
                                        <?php $i++; ?>
                                    </p>
                                </figure>
                            </div>
                        </div>
                        <div class="card-degree card">
                            <div class="card-degree__content">
                                <h5> PHP et MySQL </h5>
                                <figure class="card-degree__content__img">
                                    <img class="degree" src="<?php echo BASE_URL . '/assets/img/op_php_mysql.png' ?>"
                                        alt="diplome PHP/MYSQL lancelle clara OpenClassroom">
                                    <div id="modal__img<?php echo $i; ?>" class="modal">
                                        <img class="degree--modal"
                                            src="<?php echo BASE_URL . '/assets/img/op_php_mysql.png' ?>"
                                            alt="diplome PHP/MYSQL lancelle clara OpenClassroom">
                                        <a href="#" rel="modal:close"></a>
                                    </div>
                                    <p>
                                        <a href="#modal__img<?php echo $i; ?>" rel="modal:open">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-zoom-in" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                <path
                                                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />

                                            </svg>
                                        </a>
                                        <?php $i++; ?>
                                    </p>
                                </figure>
                            </div>
                        </div>
                        <div class="card-degree card">
                            <div class="card-degree__content">
                                <h5> SASS </h5>
                                <figure class="card-degree__content__img">
                                    <img class="degree" src="<?php echo BASE_URL . '/assets/img/op_sass.png' ?>"
                                        alt="diplome SASS lancelle clara OpenClassroom">
                                    <div id="modal__img<?php echo $i; ?>" class="modal">
                                        <img class="degree--modal"
                                            src="<?php echo BASE_URL . '/assets/img/op_sass.png' ?>"
                                            alt="diplome SASS lancelle clara OpenClassroom">
                                        <a href="#" rel="modal:close"></a>
                                    </div>
                                    <p>
                                        <a href="#modal__img<?php echo $i; ?>" rel="modal:open">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-zoom-in" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                <path
                                                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                                            </svg>
                                        </a>
                                        <?php $i++; ?>
                                    </p>
                                </figure>
                            </div>
                        </div>
                        <div class="card-degree card">
                            <div class="card-degree__content card__content">
                                <h5> Bootstrap </h5>
                                <figure class="card-degree__content__img">
                                    <img class="degree" src="<?php echo BASE_URL . '/assets/img/op_bootstrap.png' ?>"
                                        alt="diplome BOOTSTRAP lancelle clara OpenClassroom">
                                    <div id="modal__img<?php echo $i; ?>" class="modal">
                                        <img class="degree--modal"
                                            src="<?php echo BASE_URL . '/assets/img/op_bootstrap.png' ?>"
                                            alt="diplome BOOTSTRAP lancelle clara OpenClassroom">
                                        <a href="#" rel="modal:close"></a>
                                    </div>
                                    <p>
                                        <a href="#modal__img<?php echo $i; ?>" rel="modal:open">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-zoom-in" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                <path
                                                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                                            </svg>
                                        </a>
                                        <?php $i++; ?>
                                    </p>
                                </figure>
                            </div>
                        </div>
                        <div class="card-degree card">
                            <div class="card-degree__content card__content">
                                <h5> Modélisation de Bases de Données </h5>
                                <figure class="card-degree__content__img">
                                    <img class="degree" src="<?php echo BASE_URL . '/assets/img/op_bdd.png' ?>"
                                        alt="diplome conception de Base de données lancelle clara OpenClassroom">
                                    <div id="modal__img<?php echo $i; ?>" class="modal">
                                        <img class="degree--modal"
                                            src="<?php echo BASE_URL . '/assets/img/op_bdd.png' ?>"
                                            alt="diplome conception de Base de données lancelle clara OpenClassroom">
                                        <a href="#" rel="modal:close"></a>
                                    </div>
                                    <p>
                                        <a href="#modal__img<?php echo $i; ?>" rel="modal:open">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-zoom-in" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                <path
                                                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />

                                            </svg>
                                        </a>
                                        <?php $i++; ?>
                                    </p>
                                </figure>
                            </div>
                        </div>
                        <div class="card-degree card">
                            <div class="card-degree__content card__content">
                                <h5> Comprendre le Web </h5>
                                <figure class="card-degree__content__img">
                                    <img class="degree"
                                        src="<?php echo BASE_URL . '/assets/img/op_comprendre_le_web.png' ?>"
                                        alt="diplome comprendre le web lancelle clara OpenClassroom">
                                    <div id="modal__img<?php echo $i; ?>" class="modal">
                                        <img class="degree--modal"
                                            src="<?php echo BASE_URL . '/assets/img/op_comprendre_le_web.png' ?>"
                                            alt="diplome comprendre le web lancelle clara OpenClassroom">
                                        <a href="#" rel="modal:close"></a>
                                    </div>
                                    <p>
                                        <a href="#modal__img<?php echo $i; ?>" rel="modal:open">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-zoom-in" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                <path
                                                    d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />

                                            </svg>
                                        </a>
                                    </p>
                                </figure>
                                <div id="réalisations"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bloc">
            <div class="achiev__content">
                <header class="achiev__content__header">
                    <h3 class="header__title">Mes réalisations</h3>
                    <h4 class="header__subtitle"> Mon travail :</h4>
                    <div class="section-divider"></div>
                </header>
                <div class="achiev__content__body">
                    <article>
                        <div class="card">
                            <div class="card__title">
                                <h5>Carnet de recettes partagées</h5>
                            </div>
                            <figure class="card__img">
                                <img src="<?php echo BASE_URL . '/assets/img/co.png' ?>"
                                    alt="site web créé par lancelle clara : Mon carnet de recettes / My recipes booklet">
                                <img src="<?php echo BASE_URL . '/assets/img/screen.png' ?>"
                                    alt="site web créé par lancelle clara : mon carnet de recettes / my recipes booklet">
                                <img src="<?php echo BASE_URL . '/assets/img/my.png' ?>"
                                    alt="site web créé par lancelle clara : mon carnet de recettes / my recipes booklet">
                            </figure>
                            <div class="card__desc">
                                <p class="body__desc">
                                    J'ai réalisé ce site web dynamique et responsive durant mon année d'apprentissage du
                                    code en autodidacte, en suivant les consignes d'une épreuve de BTS. <br>
                                    Cette épreuve ne demandait pas de créer un site web, mais de manipuler les entrées
                                    d'une base de donnée
                                    et d'être en capacité de les afficher, de les modifier et de les supprimer. <br>
                                    J'ai décidé d'en faire un site web à part entière afin de tester mes compétences et
                                    de me confronter à de nouvelles problématiques. <br>
                                    Avec les langages et outils suivants : HTML, CSS, PHP, MySQL, Bootstrap, PHPMyAdmin.
                                    <br><br>
                                    Fonctionalités : <br><br>
                                    - Inscription, connexion, deconnexion. <br>
                                    - Enregistrement de nouvelles recettes. <br>
                                    - Modification de ses recettes. <br>
                                    - Affichage de l'ensemble des recettes de la communautée. <br>
                                    - Affichage de l'ensemble de ses recettes. <br>
                                </p>
                            </div>
                            <div class="card__link">
                                <div class="github">
                                    <p> Retrouvez ce projet sur mon dêpot GitHub : </p>
                                    <a href="https://github.com/clara-lancelle/TD_Recipes" target="_blank"
                                        title="lien vers le github de mon site de recettes de cuisines : mon carnet de recettes / my recipes booklet par clara Lancelle">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="web">
                                    <p> Ou en ligne à l'adresse :
                                        <a href="https://recipes.lancelle-clara.fr/welcome_page.php"
                                            class="website_link" target="_blank"
                                            title="lien vers mon site de recettes de cuisines : mon carnet de recettes / my recipes booklet par clara Lanclle">
                                            https://recipes.lancelle-clara.fr/welcome_page.php </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="card">
                            <div class="card__title">
                                <h5>ShiFuMi - Pierre Feuille Papier Ciseaux Lezard Spock </h5>
                            </div>
                            <figure class="card__img">
                                <img src="<?php echo BASE_URL . '/assets/img/shifumi.png' ?>"
                                    alt="site web créé par lancelle clara : shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript">
                                <img src="<?php echo BASE_URL . '/assets/img/shifumi_phone.png' ?>"
                                    alt="site web créé par lancelle clara : shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript">
                                <img src="<?php echo BASE_URL . '/assets/img/shifumi_played.png' ?>"
                                    alt="site web créé par lancelle clara : shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript">
                            </figure>
                            <div class="card__desc">
                                <p class="body__desc">
                                    Ce ShiFuMi est un exercice proposé durant ma formation de 'développeur web et web
                                    mobile' <br>
                                    Il est codé en Javascript / CSS / HTML. <br>

                                    Utilisation : <br> <br>

                                    Vous faites un partie de ShiFuMi contre l'ordinateur. <br>
                                    Pour gagner la partie il faut trois victoires.

                                    Fonctionalités : <br><br>
                                    - Jouer ! <br>
                                    - Rejouer !<br>
                                </p>
                            </div>
                            <div class="card__link">
                                <div class="github">
                                    <p> Retrouvez ce projet sur mon dêpot GitHub : </p>
                                    <a href="https://github.com/clara-lancelle/ShiFuMi" target="_blank"
                                        title="lien vers le github de mon site shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript / par clara Lancelle">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="web">
                                    <p> Ou en ligne à l'adresse :
                                        <a href="https://clara-lancelle.github.io/ShiFuMi/" class="website_link"
                                            target="_blank"
                                            title="lien vers mon site shifumi - Pierre Feuille Papier Ciseaux Lezard Spock / javascript / par clara Lancelle">
                                            https://clara-lancelle.github.io/ShiFuMi/</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
                </article>

                <div id="contact"></div>
        </section>

        <section class="bloc">
            <div class="contact__content">
                <header class="contact__content__header">
                    <h3 class="header__title">Contact</h3>
                    <h4 class="header__subtitle">Comment me contacter :</h4>
                    <div class="section-divider"></div>
                </header>
                <div class="contact__content__body body--small">
                    <div class="link svg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                        <a class="contact__link" href="mailto : lancelle.clara@hotmail.com"
                            title="lien vers ma boite mail">Email : lancelle.clara@hotmail.com </a>
                    </div>
                    <div class="link svg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-linkedin"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                        <a class="contact__link" href="https://www.linkedin.com/in/clara-lancelle-159634238/"
                            target="_blank" title="lien vers le compte linkedin de lancelle clara">
                            Linkedin : Lancelle Clara </a>
                    </div>
                </div>
                <div class="contact__content__form">
                    <div class="form__title svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-square-text" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <h5>Vous pouvez aussi me transmettre un message via ce formulaire :</h5>
                    </div>
                    <?php
                    if (isset($return['message'])) {
                        echo
                            '<p class="return_message return">' . $return['message'] . '</p>
                           <div class="return_divider"></div> ';
                    }
                    if (!empty($return['errors'])) {

                        foreach ($return['errors'] as $error) {
                            echo '<p class="return_error return">' . $error . '</p>';
                        }
                    }
                    ?>
                    <form class="form__contact" action="#form" method="POST" id="form">
                        <input name="lastname" id="name" type="text" class="form__contact__field"
                            placeholder="Votre nom...">
                        <input name="firstname" id="firstname" type="text" class="form__contact__field"
                            placeholder="Votre prénom...">
                        <input name="email" id="email" type="email" class="form__contact__field"
                            placeholder="Votre email...">
                        <textarea name="comments" id="comments" class="form__contact__field"
                            placeholder="Votre message..."></textarea>

                        <button class="send btn" type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="copy-right">
            <p class="copy-right__text">
                Lancelle Clara &copy; 2022
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="<?php echo BASE_URL . '/assets/js/index.js' ?>"></script>
</body>

</html>