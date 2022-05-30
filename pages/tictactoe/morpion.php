<?php
include_once('./../../template/head.php');
include_once('./../../template/header.php');
include_once(__DIR__ . '/../../src/fonctions/view.php');
?>
<h1>Tic Tac Toe</h1>

<section id="jeu">
  <div data-index="0" class="case"></div>
  <div data-index="1" class="case"></div>
  <div data-index="2" class="case"></div>
  <div data-index="3" class="case"></div>
  <div data-index="4" class="case"></div>
  <div data-index="5" class="case"></div>
  <div data-index="6" class="case"></div>
  <div data-index="7" class="case"></div>
  <div data-index="8" class="case"></div>
</section>

<h2></h2>
<button id="recommencer" class="btn-dark">Recommencer</button>





<?php
include_once('./../../template/footer.php');
?>