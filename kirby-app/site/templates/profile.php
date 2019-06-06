<?php snippet('header') ?>


<div class="container-fluid landing">
  <div class="intro">
     <h3>Bonjour</h3>
     <h1><?= $page->title() ?> !</h1>
  </div>

  <ul class="main-nav nav nav-pills nav-justified">
    <li class="nav-item">
      <a class="btn-nav nav-link active ml-4" href="#profil">MON PROFIL</a>
    </li>
    <li class="nav-item">
      <a class="btn-nav nav-link active mr-4" href="#agir">   AGIR   </a>
    </li>
  </ul>

  <div class="pt-3">
    <h4 id="slogan">"<?= $page->intro() ?>"</h4>
  </div>

  <?php if ($page->cover() != '') : ?>
    <?php $cover = $page->cover()->toFile() ?>
    <img id="profile-icon" src="<?= $cover->url() ?>"/>
  <?php endif ?>
  <img src="<?= $site->url() ?>/assets/images/bg1.png" class="img-fluid" id="bg1">

</div>
<div id="profil" class="container-fluid yellow pt-3 pb-3">

  <h2>Mon profil <br>  <span class="profil-title"><?= $page->title() ?></span></h2>

  <p>Enjeu : <?= $page->subject() ?></p>

  <a href="https://www.facebook.com/dialog/share?app_id=2080282928931116&display=popup&href=<?= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&redirect_uri=<?= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" class="btn-share btn-primary mb-4 mt-4">Partager mon profil &nbsp;&nbsp; <span style="font-size: 25px;position: absolute;top: -2px;">↬</span> </a>
  <?= $page->text()->kt() ?>

</div>

<img src="<?= $site->url() ?>/assets/images/bg2.png" class="img-fluid">

<div id="agir" class="container-fluid blue pb-1">
  <h4>Agir</h4>
  <p class="mt-3">Voici quelques exemples d'actions correspondant à votre profil. Vous pourrez ainsi vous engager en les positionnant dans votre calendrier !</p>
  <p class="mt-5">
     Où souhaitez vous agir ?
  </p>

  <div class="button-group filters-button-group">

  <ul class="nav nav-pills nav-justified mb-3">
    <li class="nav-item">
      <a class="button is-checked nav-link active mr-2 p-3" data-filter="maison">À LA MAISON</a>
    </li>
    <li class="nav-item">
      <a class="button nav-link ml-2 p-3" data-filter="dehors">DEHORS</a>
    </li>
  </ul>

  <ul class="nav nav-pills nav-justified mb-3 ">
    <li class="nav-item">
      <a class="nav-link mr-2 p-3" data-filter="travail">AU TRAVAIL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link ml-2 p-3" data-filter="evenements">ÉVÉNEMENTS</a>
    </li>
  </ul>

  <a class="btn btn-block mb-3 p-3" data-filter="festival">SUR LE FESTIVAL</a>
</div>


  <div class="mt-5 grid" data-isotope='{ "itemSelector": ".element-item", "layoutMode": "fitRows" }'>
    <?php foreach ($page->actions()->toStructure() as $action) : ?>
      <div class="card element-item  mb-5 <?= $action->type() ?> bg-dark">
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
