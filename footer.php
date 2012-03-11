<?php
	global $q_config;
	$settings_options = get_option('settings_options');
?>
	<footer id="footer" class="clearfix">
		<?php # FACEBOOK?>
		<div id="facebook" class='g1'>
			<?php display_facebook_like($settings_options['facebook_like_url'], $settings_options['facebook_app_id']);?>
		</div>


		<?php # BOTTOM NAV?>
		<div class='g4'>
			<nav>
				<ul>
					<?php 
						$nav_items = array();
						$item = $settings_options['menu_item_footer_1_id'];
						if($item) $nav_items[] = $item;
						$item = $settings_options['menu_item_footer_2_id'];
						if($item) $nav_items[] = $item;
						$item = $settings_options['menu_item_footer_3_id'];
						if($item) $nav_items[] = $item;
						$item = $settings_options['menu_item_footer_4_id'];
						if($item) $nav_items[] = $item;
					 ?>
					<?php foreach ($nav_items as $nav_item): ?>
						<?php $item_url = get_permalink( $nav_item );?>
						<?php $item_active = ( $item_url == $q_config['url_info']['url'] );?>
						<li class="<?php echo ($item_active) ? 'active' : '';?>">
							<?php if (!$item_active):?><a href="<?php echo $item_url;?>"><?php endif;?>
								<span class="brackets"><?php echo get_the_title( $nav_item );?></span>
							<?php if (!$item_active):?></a><?php endif;?>
						</li>
					<?php endforeach;?>
					<?php # MAILING ?>
					<li>
						<a href="<?php echo $settings_options['mailing_url'];?>">
							<span  class="brackets"><?php echo $settings_options['mailing_internal_title_' . $q_config['language']];?></span>
						</a>
					</li>
				</ul>
			</nav>
		</div>

		<div class='g3'>
			<?php # COPYRIGHT?>
		
			<span id="copyright"><?php echo $settings_options['copyright_internal_title_' . $q_config['language']];?></span>

			<?php # LOGOS?>
			<a class="zeitlos ir" href="<?php echo $settings_options['zeitlos_url'];?>">Zeitlos</a>	
			<a class="vanishingpoints ir" href="<?php echo $settings_options['vanishing_points_url'];?>">Vanishing Points</a>
			
		</div>
	</footer>

</div><?php #END .wrapper?>


<?php # SCRIPTS?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory');?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>


	<!-- scripts concatenated and minified via build script -->
	<script defer src="<?php echo get_bloginfo('stylesheet_directory');?>/js/jquery.flexslider-min.js"></script>
	<script defer src="<?php echo get_bloginfo('stylesheet_directory');?>/js/jquery.nivo.slider.pack.js"></script>
	<script defer src="<?php echo get_bloginfo('stylesheet_directory');?>/js/jquery.placeholder.min.js"></script>
	<script defer src="<?php echo get_bloginfo('stylesheet_directory');?>/js/plugins.js"></script>
	<script defer src="<?php echo get_bloginfo('stylesheet_directory');?>/js/script.js"></script>
	<!-- end scripts -->

	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
			 chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
<?php wp_footer(); ?>
</body>
</html>