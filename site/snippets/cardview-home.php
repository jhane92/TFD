<ul class="card-view no-indent">
<?php
$pagina = $pages->visible();

//Show if pages are visible
if($pagina->visible()):
	foreach($pagina as $page): ?>
			<li class="card box-shadow-small">
				
				<a href="<?= $page->url()?>">
					<div class="imgCardview" style="background-image: url('<?= $page->image()->url() ?>')"></div>
				</a>
				<figcaption class="slope box-shadow-small">
					<div class="content">
						<h3><?php echo $page->title() ?></h3>
						<p><?php echo $page->text()->excerpt(50) ?> <a href="<?php echo $page->url() ?>">Lees&nbsp;meer&nbsp;&gt;</a></p>
					</div>
				</figcaption>
			</li>
	<?php
	endforeach;
endif;
?>
</ul>