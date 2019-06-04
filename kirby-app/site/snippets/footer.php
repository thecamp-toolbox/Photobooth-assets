  </div>

  <div class="container">  
	<nav id="menu" class="menu">
	    <?php foreach (page('profiles')->children()->listed() as $item): ?>
	    	<?= $item->title()->link() ?>
	    <?php endforeach ?>
	</nav>
  </div>


  <footer class="container-fluid text-center">
    <?php if ($about = page('about')): ?>
    <?php endif ?>
  </footer>

</body>
</html>
