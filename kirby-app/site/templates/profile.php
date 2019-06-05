<?php snippet('header') ?>


<div class="container-fluid landing">
  <div class="intro">
     <h3>Bonjour</h3>
     <h1><?= $page->title() ?> !</h1>
  </div>

  <ul class="main-nav nav nav-pills nav-justified">
    <li class="nav-item">
      <a class="btn-nav nav-link active mr-1" href="#profil">MON PROFIL</a>
    </li>
    <li class="nav-item">
      <a class="btn-nav nav-link active ml-1" href="#agir">   AGIR   </a>
    </li>
  </ul>

  <div class="pt-3">
    <h4 id="slogan">"<?= $page->intro() ?>"</h4>
  </div>

  <?php if ($page->cover() != '') : ?>
    <?php $cover = $page->cover()->toFile() ?>
  <?php endif ?>
</div>

<div id="profil" class="container-fluid yellow pt-3 pb-3">
  <h2>Mon profil <br>  <span class="profil-title"><?= $page->title() ?></span></h2>

  <p>Enjeu : <?= $page->subject() ?></p>

  <a href="https://www.facebook.com/dialog/share?app_id=2080282928931116&display=popup&href=<?= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&redirect_uri=<?= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" class="btn-share btn-primary mb-4 mt-4">Partager mon profil &nbsp;&nbsp; <span style="font-size: 25px;position: absolute;top: -2px;">↬</span> </a>
  <?= $page->text()->kt() ?>

  <img src="<?= $site->url() ?>/assets/images/bg1.png" class="img-fluid" id="bg1">
</div>

<img src="<?= $site->url() ?>/assets/images/bg2.png" class="img-fluid">

<div id="agir" class="container-fluid blue pb-1">
  <h4>Agir</h4>
  <p class="mt-3">Voici quelques exemples d'actions correspondant à votre profil. Vous pourrez ainsi vous engager en les positionnant dans votre calendrier !</p>
  <p class="mt-5">
     Où souhaitez vous agir ?
  </p>
  <ul class="nav nav-pills nav-justified">
    <li class="nav-item">
      <a class="nav-link active mr-2" href="">À LA MAISON</a>
    </li>
    <li class="nav-item">
      <a class="nav-link ml-2" href="">DEHORS</a>
    </li>
  </ul>

  <ul class="nav nav-pills nav-justified ">
    <li class="nav-item">
      <a class="nav-link mr-2" href="">AU TRAVAIL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link ml-2" href="">ÉVÉNEMENTS</a>
    </li>
  </ul>

  <a class="btn btn-block mb-3" href="">SUR LE FESTIVAL</a>


  <div class="mt-5">
    <?php foreach ($page->actions()->toStructure() as $action) : ?>
      <div class="card mb-5 <?= $action->type() ?> bg-dark">
        <div class="card-body">
          <h5 class="card-title">
            <?= $action->action() ?>
          </h5>
        </div>
        <div class="addeventatc calendar" data-intel="false" >
          <span class="start"><?= $action->thedate() ?></span>
          <span class="timezone">Europe/Paris</span>
          <span class="title">  <?= $action->action() ?>  </span>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>

<img src="<?= $site->url() ?>/assets/images/bg3.png" class="img-fluid">

<div class="container mt-5 mb-3">
  <nav id="menu" class="menu">

    <h2 class="mb-3">Autres profils</h2>

      <?php foreach (page('profiles')->children()->listed() as $item): ?>

      <?php if ($page->url() != $item->url()) : ?>

        <?php snippet('profile-card', array('item'=>$item)) ?>

      <?php endif ?>

      <?php endforeach ?>
  </nav>
</div>

<?php snippet('footer') ?>
