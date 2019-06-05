<?php snippet('header') ?>

<main>

  <div class="container-fluid">
	<header class="intro">
	    <h1><?= $site->title() ?></h1>
	</header>

    <?php foreach (page('profiles')->children()->listed() as $item): ?>
      <?php snippet('profile-card', array('item'=>$item)) ?>
    <?php endforeach ?>
  </div>

</main>

<?php snippet('footer') ?>
