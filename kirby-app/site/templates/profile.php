<?php snippet('header') ?>

<div class="container landing">
  <h1><?= $page->title() ?></h1>

  <ul class="nav nav-pills nav-justified">
    <li class="nav-item">
      <a class="nav-link active mr-2" href="#profil">MON PROFIL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active ml-2" href="#agir">   AGIR   </a>
    </li>
  </ul>

  <div class="pt-3">
    <h4><?= $page->intro() ?></h4>
  </div>

  <!-- Mettre l'icone ici -->
</div>

<div id="profil" class="container yellow pt-3 pb-3">
  <h2>Mon profil :<br></h2>
  <span class="profil-title"><?= $page->title() ?></span><br>

  <a href="#" class="btn btn-primary mb-5">Partager mon profil</a>
  <?= $page->text()->kt() ?>

  <img src="<?= $site->url() ?>/assets/images/bg1.png" class="img-fluid" id="bg1">
</div>

<img src="<?= $site->url() ?>/assets/images/bg2.png" class="img-fluid">

<div id="agir" class="container blue pb-1">
  <h4>Agir</h4>
  <p>Voici quelques exemples d'actions correspondant à votre profil</p>

  <ul class="nav nav-pills nav-justified mb-3">
    <li class="nav-item">
      <a class="nav-link active mr-2" href="#profil">À LA MAISON</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active ml-2" href="#agir">DEHORS</a>
    </li>
  </ul>

  <ul class="nav nav-pills nav-justified mb-3">
    <li class="nav-item">
      <a class="nav-link active mr-2" href="#profil">AU TRAVAIL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active ml-2" href="#agir">ÉVÉNEMENT</a>
    </li>
  </ul>

  <div class="mt-4">
    <?php foreach ($page->actions()->toStructure() as $action) : ?>
      <div class="card mb-4">
        <div class="card-body" style="background-image:url('<?= $site->url() ?>/assets/images/placeholder.png')">
          <h5 class="card-title">
            <?= $action->action() ?>
          </h5>
          avec <?= $action->org() ?> - 
          <a href="<?= $action->orglink() ?>" target="_blank">GO</a>
        </div>
        <a href="" class="calendar">
          <img src="<?= $site->url() ?>/assets/images/calendar.png" class="img-fluid">
        </a>
      </div>
    <?php endforeach ?>
  </div>
</div>

<img src="<?= $site->url() ?>/assets/images/bg3.png" class="img-fluid">

<?php snippet('footer') ?>
