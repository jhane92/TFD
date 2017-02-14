<?php snippet('header') ?>

	<main class="main" role="main">

		<?php snippet('breadcrumb') ?>
		

		<article class="box-shadow-small">
			<?php if($page->header()->bool()) { ?>
				<div class="topArticle" style="background-image: url(<?php echo $page->image()->url() ?>)"></div>
	      	<?php } ?>
		
	      	<?php if($page->author() != "" || $page->date('m/d/y') != "") { ?>
	      		<div class="author">
	      			Published
	      	<?php if($page->author() != "") {
	      		echo " by " . $page->author();
	      	}
	      	if($page->date('m/d/y') != "") {
	      		echo " on " . $page->date('m/d/Y');
	      	}
			?>
	      		</div>
	      	<?php } ?>

		<?php if($page->header()->bool()) { ?>
			<div class="wrapper withAuthor">
		<?php } else { ?>
			<div class="wrapper">
		<?php } ?>
      		<h1>
      			<?php echo $page->title()->html() ?>	
      		</h1>
      		<?php echo $page->text()->kirbytext() ?>
      		</div>
		</article>
		<?php snippet('navButtons') ?>
  </main>
<?php snippet('footer') ?>