  </div>

  <div class="container mt-5 mb-3">  
	<nav id="menu" class="menu">

		<h2 class="mb-3">Autres profils</h2>

	    <?php foreach (page('profiles')->children()->listed() as $item): ?>

			<?php if ($page->url() != $item->url()) : ?>

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

			<?php endif ?>
	    	
	    <?php endforeach ?>
	</nav>
  </div>


  <footer class="container-fluid text-center">
    <?php if ($about = page('about')): ?>
    <?php endif ?>
  </footer>

</body>
</html>
