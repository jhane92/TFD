<ul class="breadcrumbs no-indent">
    <?php foreach($site->breadcrumb() AS $crumb): ?>
    	<?php if($crumb->isActive() != 1): ?>
	    	<li>
	    		<a href="<?php echo $crumb->url() ?>">
	    			<?php echo $crumb->title()->html() ?>
	    		</a>
	    	</li>
    	<?php else : ?>
    		<li>
	    			<?php echo $crumb->title()->html() ?>
	    	</li>
	    <?php endif ?>

    <?php endforeach; ?>
</ul>