<ul class="list-view no-indent">
	<?php foreach($page->children() as $subpage): ?>
		<li class="box-shadow-small">

			
			<?php foreach($subpage->files()->limit(1)->sortBy('sort', 'asc') as $file): 

					if ($subpage->ext_url() != '') {
					    $href = $subpage->ext_url()->html();
					    $target = 'target="_blank"';
					}else {
					    $href = $subpage->url();
					    $target = '';
					}
				?>

				<a href="<?php echo $href?>" <?php echo $target ?>>
					<?php
						if ($subpage->image() != "") {
							$imgUrl = $subpage->image()->url();
						} else{
							$imgUrl = $page->image()->url();
						}
					?>
					<div class="imgListview" style="background-image: url('<?= $imgUrl ?>')"></div>
				</a>
			<?php endforeach ?>
			<figcaption>
				<h3><?php echo $subpage->title() ?></h3>
				<p><?php echo $subpage->text()->excerpt(120) ?></p>
			</figcaption>
			<a class="read-more" href="<?= $href ?>" <?php echo $target ?>></a>
		</li>
	<?php endforeach ?>
</ul>