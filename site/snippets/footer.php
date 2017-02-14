  <footer class="footer cf" role="contentinfo">
  	<div class="footer-width">
  	<ul class="no-indent">
		<li>Pagina's</li>
		
		<!--Main menu items ophalen-->
		<?php $footerLinks = $pages->visible(); ?>
			<?php foreach($footerLinks as $footerLink): ?>
				<li>
					<a href="<?php echo $footerLink->url(); ?>">
						<?php echo $footerLink->title()->html(); ?>
					</a>
				</li>
			<?php endforeach ?>
	</ul>
	<ul class="no-indent">
		<li>Bestanden</li>
		<li><a href="#">Modulewijzer</a></li>
		<li><a href="#">Beoordelingsformulier</a></li>
		<li><a href="#">Presentaties</a></li>
		<li><a href="#">Benchmarks</a></li>
	</ul>
	<ul class="no-indent">
		<li>Gerelateerd</li>
		<li><a href="http://basecamp.com" target="new">Basecamp</a></li>
		<li><a href="http://facebook.com" target="new">Facebook</a></li>
		<li><a href="http://bohemiancoding.com" target="new">Bohemian Coding</a></li>
		<li><a href="http://hr.nl" target="new">Hogeschool Rotterdam</a></li>
	</ul>
	</div>
    
  </footer>

</body>
</html>
