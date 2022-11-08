<?php 
session_start();
include "configuration.php";


if(!isset($_SESSION['id'])|| empty($_SESSION['id'])){
    header("location: log_admin.php");
            die();

} 
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    header('location: log_admin.php');
}

include BASE_URL."/assets/php/handling_admin.php";

// gestion de l'affichage/pages 

if(isset($_GET['page']) && !empty($_GET['page'])){
    $current_page_nb = (int) strip_tags($_GET['page']);

}else{
    $current_page_nb = 1;
}

$return = get_all_comments($current_page_nb);

    $pages = $return['pages_nb'];
    $first_comment = $return['first'];
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="assets/img/favicon.png" type="/image/png">
    <Link href="style.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Lancelle Clara - Portfolio </title>
</head>
<body>
    <header class="nav_ban">
        <div class="navbar">
            <nav class="navbar__items">
                <ul class="logo_logout">
                    <li class="navbar__items__logo admin__logo">
                        <figure>
                            <a href="index.php"><img class="logo" src="<?php echo BASE_URL.'/assets/img/logo.png' ?>" alt="logo"></a>
                        </figure>
                    </li>
                    <li class="navbar__items__link admin__logout">
                        <a href="?logout">
                            <button class="logout btn" type="submit" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                                    <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                                    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                                </svg>
                            </button>
                        </a>
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
                    <h4 class="banner__body__welcome"> Mon tableau de bord </h4>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="bloc comments bloc--smallMargin">
                <div class="last-com__content">
                    <header class="last-com__content__header">
                        <h3 class="header__title"> Mes messages </h3>
                    </header>
                    <?php if($return['comments_nb'] > 0){
                            foreach($return['comments'] as $comment){
                                ?>
                          
                    <div class="last-com__content__body body--small">
                        <div class="card com__card card--border">
                            <div class="card__header">
                            <div class="card__header__com">
                                    <p class="body__desc text--center">
                                    <?php echo ' "  ' .$comment['content']. '  " '; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="section-divider divider--100"></div>
                            <div class="card__body">
                                <div class="card__body__info">
                                    <div class="person svg-inline inline-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                                        </svg>
                                        <p class="body__desc body__desc--smallMargin text--center">
                                            <?php echo $comment['lastname'].'   '.$comment['firstname']; ?>
                                        </p>
                                    </div>
                                    <div class="mail svg-inline  inline-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                        </svg>
                                        <p class="body__desc body__desc--smallMargin text--center">
                                            <?php echo $comment['email']; ?>
                                        </p>
                                    </div>
                                    <div class="date svg-inline  inline-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                        </svg>
                                        <p class="body__desc body__desc--smallMargin text--center">
                                            <?php $date = strtotime( $comment['date_time'] ); 
                                            echo date( 'd/m/Y H:i:s' , $date ); ?>
                                            
                                        </p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <?php  
                             }
                        }
                        ?>
                </div>
            </section>
                <ul class="pagination">
                <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                <li class="page-item <?= ($current_page_nb <= 1) ? "disabled" : "" ?>">
                    <a class="page-link" href="?page=<?= $current_page_nb - 1 ?>" aria-label="Previous" >
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M10.205 12.456A.5.5 0 0 0 10.5 12V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4a.5.5 0 0 0 .537.082z"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <?php for($page = 1; $page <= $pages; $page++): ?>
                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li class="page-item <?= ($current_page_nb === $page) ? "disabled" : "" ?>">
                    <a href="?page=<?= $page ?>" class="page-link--middle"><?= $page ?></a>
                </li>
                <?php endfor ?>
                    <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                <li class="page-item <?= ($current_page_nb == $pages) ? "disabled" : "" ?>">
                    <a class="page-link" href="?page=<?= $current_page_nb + 1 ?>" aria-label="Next">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-caret-right-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M5.795 12.456A.5.5 0 0 1 5.5 12V4a.5.5 0 0 1 .832-.374l4.5 4a.5.5 0 0 1 0 .748l-4.5 4a.5.5 0 0 1-.537.082z"/>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
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
