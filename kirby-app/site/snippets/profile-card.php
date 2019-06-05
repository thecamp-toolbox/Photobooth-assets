<a href="<?= $item->url() ?>" class="">
	<div class="media profile-card p-3 mb-3">
	  <?php if ($item->cover() != '') : ?>
	  	<?php $cover = $item->cover()->toFile() ?>
	  	<img class="align-self-start mr-3 the-avatar" src="<?= $cover->url() ?>" alt="<?= $item->title() ?> image">
	  <?php endif ?>
	  <div class="media-body">
	    <h5 class="mt-0"><?= $item->title() ?></h5>
	    <p>"<?= $item->intro() ?>"</p>
	  </div>
	</div>
</a>