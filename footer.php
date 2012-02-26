<?php
	global $q_config;
	$settings_options = get_option('settings_options');
?>

<?php # FACEBOOK?>
<?php echo $settings_options['facebook_like_url'];?>


<?php # BOTTOM NAV?>
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
					<span><?php echo get_the_title( $nav_item );?></span>
				<?php if (!$item_active):?></a><?php endif;?>
			</li>
		<?php endforeach;?>
		<?php # MAILING ?>
		<li>
			<a href="<?php echo $settings_options['mailing_url'];?>">
				<span><?php echo $settings_options['mailing_internal_title_' . $q_config['language']];?></span>
			</a>
		</li>
	</ul>
</nav>


<?php # COPYRIGHT?>
<span><?php echo $settings_options['copyright_internal_title_' . $q_config['language']];?></span>

<?php # LOGOS?>
<a class="vanishing-points " href="<?php echo $settings_options['vanishing_points_url'];?>">Vanishing Points</a>
<a class="zeitlos " href="<?php echo $settings_options['zeitlos_url'];?>">Zeitlos</a>


<?php # SCRIPTS?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory');?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>


	<!-- scripts concatenated and minified via build script -->
	<script defer src="<?php bloginfo('stylesheet_directory');?>/js/plugins.js"></script>
	<script defer src="<?php bloginfo('stylesheet_directory');?>/js/script.js"></script>
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