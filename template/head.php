<?php
include_once("./src/function/view.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- DESCRIPTION SITE -->
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="./favicon_io/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta name='description' content="Site CV de Mikael TRILLES">
  <title><?php setContent(
            '',
            'Profil | Mikael TRILLES',
            'Compétences | Mikael TRILLES',
            'Formations | Mikael TRILLES',
            'Expériences | Mikael TRILLES',
            'PortFolio | Mikael TRILLES',
            'Formulaire de contact | Mikael TRILLES',
            'Jouons au Morpion | Projet Javascript',
            'Météo de votre ville | Projet Javascript',
          ) ?></title>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- STYLE CSS -->
  <link rel="stylesheet" href="./../style/charte.css">
  <link rel="stylesheet" href="./../style/style.css">
  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="57x57" href="./favicon_io/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./favicon_io/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./favicon_io/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./favicon_io/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./favicon_io/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./favicon_io/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./favicon_io/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./favicon_io/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./favicon_io/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./favicon_io/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io/manifest.json">
  <link rel="manifest" href="./favicon_io/site.webmanifest">
  <!-- CSS -->
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link rel="stylesheet" href="./../style/style.css">
  <?php if (isset($_GET['page']) && $_GET['page'] == "competence") : ?>
    <link rel="stylesheet" href="./../style/competence.css">
  <?php endif; ?>
  <?php if (isset($_GET['page']) && $_GET['page'] == "morpion") : ?>
    <link rel="stylesheet" href="./../pages/tictactoe/morpion.css">
  <?php endif; ?>
  <?php if (isset($_GET['page']) && $_GET['page'] == "meteo") : ?>
    <link rel="stylesheet" href="./../pages/meteo/meteo.css">
  <?php endif; ?>
</head>