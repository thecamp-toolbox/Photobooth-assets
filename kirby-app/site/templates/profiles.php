<?php snippet('header') ?>


  <div class="container-fluid mt-3 mb-3">
    <?php foreach ($page->children()->listed() as $item): ?>
      <?php snippet('profile-card', array('item'=>$item)) ?>
    <?php endforeach ?>
  </div>



<?php snippet('footer') ?>
