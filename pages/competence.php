<?php
include_once('./template/head.php');
include_once('./template/header.php');
include_once(__DIR__ . '/../src/fonctions/view.php');
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 p-5">
      <h2>FRONT-END</h2>
      <div class="html5 my-3">
        <h3><img src="./../style/assets/html.png" style="width: 48px;height:48px;" /> HTML 5</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #E65100 !important" aria-valuenow="25" aria-valuemin="0" aria-valuemax="90"></div>
        </div>
      </div>
      <div class="css3 my-3">
        <h3><img src="./../style/assets/css.png" style="width: 48px;height:48px;" /> CSS 3</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #0177BD !important" aria-valuenow="25" aria-valuemin="0" aria-valuemax="90"></div>
        </div>
      </div>
      <div class="javascript my-3">
        <h3><img src="./../style/assets/javascript.png" style="width: 48px;height:48px;" /> JavaScript</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #FED602 !important" aria-valuenow="25" aria-valuemin="0" aria-valuemax="65"></div>
        </div>
      </div>
      <div class="bootstrap my-3">
        <h3><img src="./../style/assets/bootstrap.png" style="width: 48px;height:48px;" /> BootStrap</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #673AB6 !important" aria-valuenow="25" aria-valuemin="0" aria-valuemax="70"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6 p-5">
      <h2>BACK-END</h2>
      <div class="php my-3">
        <h3><img src="./../style/assets/php.png" style="width: 48px;height:48px;" /> PHP</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #6280B6 !important" aria-valuenow="25" aria-valuemin="0" aria-valuemax="65"></div>
        </div>
      </div>
      <div class="mysql my-3">
        <h3><img src="./../style/assets/mysql.png" style="width: 48px;height:48px;" /> MySQL</h3>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #016089 !important" aria-valuenow="25" aria-valuemin="0" aria-valuemax="65"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 p-5">
      <h2>CMS</h2>
      <div class="wordpress my-3">
      <h3><img src="/../style/assets/wordpress.png" style="width: 48px;height:48px;"/> Wordpress</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #007499 !important"
          aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <div class="prestashop my-3">
      <h3><img src="./../style/assets/prestashop.png" style="width: auto; height:48px;"> Prestashop</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 60%; background-color: #AFDEEC !important"
          aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    </div>
    <div class="col-md-6 p-5">
      <h2>FRAMEWORKS</h2>
      <div class="symfony my-3">
      <h3><img
          src="./../style/assets/symfony.png" style="width: 48px;height:48px;"/>
        Symfony</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 1%; background-color: #000000 !important"
          aria-valuenow="25" aria-valuemin="0" aria-valuemax="1">
        </div>
      </div>
    </div>
    <div class="reactjs my-3">
      <h3><img src="./../style/assets/react.png" style="width: 48px;height:48px;"/> ReactJS</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 65%; background-color: #61DAFB !important"
          aria-valuenow="25" aria-valuemin="0" aria-valuemax="60"></div>
      </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 p-5">
      <h2>METHODE</h2>
      <div class="agile my-3">
      <h3><img src="./../style/assets/agile.png" style="width: 48px;height:48px;"/> Agile</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #b8b1c4 !important"
          aria-valuenow="25" aria-valuemin="0" aria-valuemax="1"></div>
      </div>
    </div>
    <div class="scrum my-3">
      <h3><img src="./../style/assets/scrum.png" style="width: 48px;height:48px;"/> Scrum</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #b8b1c4 !important"
          aria-valuenow="25" aria-valuemin="0" aria-valuemax="1">
        </div>
      </div>
    </div>
    </div>
    <div class="col-md-6 p-5">
      <h2>OUTILS</h2>
      <div class="git my-3">
      <h3><img src="./../style/assets/git.png" style="width: 48px;height:48px;" alt="icone de git"> Git</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #F34E29 !important"
          aria-valuenow="25" aria-valuemin="0" aria-valuemax="1"></div>
      </div>
    </div>
    <div class="github my-3">
      <h3><img src="./../style/assets/github.png" style="width: 48px;height:48px;" alt="icone de github"> Github</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 80%; background-color: #3D75C2 !important"
          aria-valuenow="25" aria-valuemin="0" aria-valuemax="1"></div>
      </div>
    </div>
    
    
    <div class="vscode my-3">
      <h3><img src="./../style/assets/vscode.png" style="width: 48px;height:48px;" alt="icone vscode"> VSCode</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #1E9CEF !important"
          aria-valuenow="25" aria-valuemin="0" aria-valuemax="1"></div>
      </div>
    </div>
    </div>
  </div>
</div>

<?php
include_once('./template/footer.php');
?>