<?php
include_once('./../../template/head.php');
include_once('./../../template/header.php');
include_once(__DIR__ . '/../../src/fonctions/view.php');
?>

<div class="container fluid-container meteobox">
  <div class="row meteoville">
    <div class="meteo-form col-md-12">
      <form action="">
        <div class="form-group justify-content-center">
          <label for="inputCity" class="form-label text-light">Entrez une Ville ou un Etat</label>
          <input type="text" class="form-control" id="inputCity" placeholder="Entrez une Ville" />
          <button type="submit" class="btn btn-warning btn-block my-1">
            Rechercher
          </button>
        </div>
      </form>
    </div>
  </div>
  <div class="meteo-result fluid-container box-container justify-content-center my-3">
    <div id="country" class="box"></div>
    <div id="city" class="box">
      <p id="pays"></p>
    </div>
    <div id="wind" class="box"></div>
    <div id="pressure" class="box"></div>
    <div id="temp" class="box"></div>
    <div id="precipitation" class="box"></div>
    <div id="comment" class="box"></div>
    <div id="icone" class="box"></div>
  </div>
</div>


<?php
include_once('./../../template/footer.php');
?>