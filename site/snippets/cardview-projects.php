<ul class="card-view no-indent">
	<?php
		foreach($page->children() as $subpage): ?>
			<li class="card box-shadow-small">
				<a href="<?php echo $subpage->url() ?>"?>
					<div class="imgCardview" style="background-image:url(<?php echo $subpage->image()->url() ?>)"></div>
				</a>
				<figcaption class="slope box-shadow-small">
					<div class="content">
						<h3><?php echo $subpage->title(); if($subpage->author() != ""){ echo " - " .$subpage->author(); } ?></h3>
							<p>
								<?php echo $subpage->text()->excerpt(50) ?> 
								<a href="<?php echo $subpage->url() ?>">Lees&nbsp;meer&nbsp;&gt;</a>
							</p>
					</div>
				</figcaption>
			</li>
	<?php
		endforeach;
	?>
</ul>