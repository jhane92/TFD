<?php if($page->parent() != ""): ?>
	<?php if($page->hasPrevVisible()): ?>
		<a href="<?php echo $page->prevVisible()->url() ?>" class="backlink">&lt; previous page</a>
	<?php else : ?>
		<a href="<?php echo $page->parent()->url() ?>" class="backlink">&lt; <?= $page->parent()->title() ?></a>
	<?php endif ?>
<?php else : ?>
	<a href="<?php echo $page->parent()->url() ?>" class="backlink">&lt; Homepage</a>
<?php endif ?>