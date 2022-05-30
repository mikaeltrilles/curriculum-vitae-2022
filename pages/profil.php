<?php
include_once('./template/head.php');
include_once('./template/header.php');
include_once(__DIR__ . '/../src/fonctions/view.php');
?>

<section class="profil mx-5">
  <h2 id="profil">A propos de moi</h2>
  <div class="container d-flex">
    <div class="row">
      <div class="col-lg-3" id="photo-identity">
        <img class="photo-identity" src="./img/profilnb.webp" alt="Photo de profil de Mikael Trilles">
      </div>
      <div class="col-lg-9">
        <p>En reconversion professionnelle, je prépare depuis le 15 Février 2022 un <em>Titre RNCP de Niveau 5 (BAC+2) "Développeur Web et Web Mobile"</em> au sein de <strong>DIGINAMIC</strong> à Montpellier. A l'issue de cette formation je serais en mesure de :</p>
        <ul>
          <ol>
            <li class="intro-items">Maquetter une application.</li>
            <li class="intro-items">Réaliser une interface utilisateur web statique et adaptable.</li>
            <li class="intro-items">Développer une interface utilisateur web dynamique en intégrant les recommandations de sécurité.</li>
            <li class="intro-items">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce.</li>
            <li class="intro-items">Créer une base de données.</li>
            <li class="intro-items">Développer les composants d'accès aux données.</li>
            <li class="intro-items">Développer la partie back-end d'une application web ou web mobile en intégrant les recommandations de sécurité.</li>
            <li class="intro-items">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce.</li>
          </ol>
        </ul>
        <p>De nature motivé, ayant l'esprit d'équipe je recherche activement une entreprise afin de réaliser un stage de validation de formation afin d'obtenir le titre.</p>
        <p>Votre entreprise dispose d'un stage correspondant à ma formation, contactez moi, je serais enchanté de vous rencontrer. 😃</p>
      </div>
    </div>
  </div>
  <div>
    <p class="text-center"><a href=mailto:mikaeltrilles@gmail.com>Envoyez un e-mail</a></p>
  </div>






  <p id="signature"><img src="./img/sign-site.png" alt="Signature Mikael Trilles"></p>
</section>

<?php
include_once('./template/footer.php');
?>