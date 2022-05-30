<?php
include_once('./template/head.php');
include_once('./template/header.php');
include_once(__DIR__ . '/../src/fonctions/view.php');
?>

<div class="container">
  <div class="row">
    <div class="col-md-4 d-inline-flex justify-content-center p-2">
      <div class="card text-bg-light" style="width: 18rem;">
        <img src="./../img/tictactoe.png" class="card-img-top" alt="Jeu du Morpion">
        <div class="card-body">
          <h5 class="card-title">Tic Tac Toe</h5>
          <p class="card-text">Mini jeu du morpion en Javascript.</p>
          <a href="index.php?page=morpion" class="btn btn-secondary">Jouez !</a>
          <a href="https://github.com/mikaeltrilles/tictactoe" target="_blank" class="btn btn-warning">Github</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-inline-flex justify-content-center p-2">
      <div class="card text-bg-light" style="width: 18rem;">
        <img src="./../img/meteo.png" class="card-img-top" alt="Widget Météo">
        <div class="card-body">
          <h5 class="card-title">Widget Météo</h5>
          <p class="card-text">Petit widget météo en Javascript avec possibilité de choise votre ville.</p>
          <a href="index.php?page=meteo" class="btn btn-secondary">Allez !</a>
          <a href="https://github.com/mikaeltrilles/meteojs" target="_blank" class="btn btn-warning">Github</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-inline-flex justify-content-center p-2"></div>
  
  </div>
</div>








<?php
include_once('./template/footer.php');
?>