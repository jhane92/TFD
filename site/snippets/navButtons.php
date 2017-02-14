<?php if($page->hasPrevVisible()): ?>
	<a href="<?php echo $page->prevVisible()->url() ?>" class="button prev-page box-shadow-small">&lt; vorige</a>
<?php endif ?>

<?php if($page->hasNextVisible()): ?>
	<a href="<?php echo $page->nextVisible()->url() ?>" class="button next-page box-shadow-small">volgende &gt;</a>
<?php endif ?>