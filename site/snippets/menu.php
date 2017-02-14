<?php 
// main menu items
$items = $pages->visible();

//Getting count of pages
$numberOfPages = ceil($pages->visible()->count()/2);
$counter = 0;

// only show the menu if items are available
if($items->count()):
?>
<nav class="slope">
  <ul class="no-indent content">
    <?php foreach($items as $item): ?>
		<li>
			<a 
				<?php e($item->isOpen(), ' class="active"') ?> 
				href="<?php echo $item->url() ?>">
					<?php echo $item->title()->html() ?>
			</a>
		</li>
		
	<?php $counter++; ?>
	<?php if($numberOfPages == $counter) { ?>
			<li>
				<a class="no-decoration" href="<?php echo $site->url() ?>">
					<img src="<?= url('assets/images/logo_sketch.svg') ?>">
				</a>
			</li>
	<?php } endforeach ?>
  </ul>
</nav>
<?php endif ?>


