<?php
include_once("./template/head.php");
include_once("./template/header.php");
include_once("./src/function/view.php");
?>
<h1 class="" style="margin-top: 80px;">
      <?php setContent(
    '',
    'Profil - Mikael TRILLES',
    'Compétences - Mikael TRILLES',
    'Formations - Mikael TRILLES',
    'Expériences - Mikael TRILLES',
    'PortFolio - Mikael TRILLES',
    'Formulaire de contact - Mikael TRILLES',
    'Jouons au Morpion - Projet Javascript',
    'Météo de votre ville - Projet Javascript',
) ?>
    </h1>


    <?php
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'competence') {
            include_once('pages/competence.php');
        } elseif ($_GET['page'] == 'formation') {
            include_once('pages/formation.php');
        } elseif ($_GET['page'] == 'experience') {
            include_once('pages/experience.php');
        } elseif ($_GET['page'] == 'portfolio') {
            include_once('pages/portfolio.php');
        } elseif ($_GET['page'] == 'contact') {
            include_once('pages/contact.php');
        } elseif ($_GET['page'] == 'profil') {
            include_once('./pages/profil.php');
        } elseif ($_GET['page'] == 'morpion') {
            include_once('./pages/tictactoe/morpion.php');
        } elseif ($_GET['page'] == 'meteo') {
            include_once('./pages/meteo/meteo.php');
        } else {
            include_once('pages/accueil.php');
        }
    }
    ?>












<?php
include_once('./template/footer.php');
?>
