<!-- begin footer -->
		</section>
		<footer class="grids">
			<section id="footer1" class="grid-4">
				<?php wp_nav_menu(array(
					'menu'            => "Footer 1", 
					'container'       => '', 
					'fallback_cb'     => false
				));?>
  		</section>
			<section id="footer2" class="grid-4">
				This space for rent
				<?php wp_nav_menu(array(
					'menu'            => "Footer 2", 
					'container'       => '',
					'fallback_cb'     => false 
				));?>
  			</section>
			<section id="footer3" class="grid-8">
				<ul class="grids">
					<li class="grid-2"><a href="http://twitter.com/#!/devilsansclue"><img src="<?php echo( bloginfo( 'template_directory' )); ?>/img/Twitter.png" alt="Follow me on Twitter"></a></li>
					<li class="grid-2"><a href="http://www.facebook.com/devilsansclue"><img src="<?php echo( bloginfo( 'template_directory' )); ?>/img/Facebook.png" alt="Follow me on Facebook"></a></li>
					<li class="grid-2"><a href="http://iamian.me/feed"><img src="<?php echo( bloginfo( 'template_directory' )); ?>/img/RSS.png" alt="Let me feed you"></a></li>
					<li class="grid-2"><a href="http://www.wordpress.org"><img src="<?php echo( bloginfo( 'template_directory' )); ?>/img/Wordpress.png" alt="Powered by Wordpress"></a></li>
				</ul>
				<p>Layout and Content Copyright 2010 and Beyond Ian Nusbaum</p>
			</section>

		</footer>
	</body>
</html>