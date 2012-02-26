<?php
	global $q_config;
	$settings_options = get_option('settings_options');
#print_pre($settings_options);
#print_pre($q_config);
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $META_TITLE; ?></title>
		
	<?php if( isset ( $META_TITLE ) ) : if( $META_TITLE ) : ?>
		<meta property="og:title" content="<?php echo $META_TITLE; ?>" />
	<?php endif; endif;?>

	<?php if( isset ( $META_DESCRIPTION ) ) : if( $META_DESCRIPTION ) : ?>
		<meta property="og:description" content="<?php echo $META_DESCRIPTION; ?>" />
		<meta name="description" content="<?php echo $META_DESCRIPTION; ?>">
	<?php endif; endif;?>

	<?php if( isset ( $META_URL ) ) : if( $META_URL ) : ?>
		<meta property="og:url" content="<?php echo $META_URL; ?>" />
		<link rel="canonical" href="<?php echo $META_URL; ?>"/>
	<?php endif; endif;?>

	<?php if( isset ( $META_IMAGE ) ) : if( $META_IMAGE ) : ?>
		<meta property="og:image" content="<?php echo $META_IMAGE; ?>" />
	<?php endif; endif;?>

	<?php if( isset ( $META_TYPE ) ) : if( $META_TYPE ) : ?>
		<meta property="og:type" content="<?php echo $META_TYPE; ?>" />
	<?php endif; endif;?>
	

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/style.css">
	
	<script src="<?php bloginfo('stylesheet_directory');?>/js/libs/modernizr-2.0.6.min.js"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<?php # MAIN NAVIGATION;?>
		<nav>
			<ul>
				<?php # Home ?>
				<?php $home_url = qtrans_convertURL( get_bloginfo( 'home' ) ) . '/';?>
				<?php $home_active = ( $home_url == $q_config['url_info']['url'] );?>
				<li class="<?php echo ($home_active) ? 'active' : '';?>">
					<?php if (!$home_active):?><a href="<?php echo $home_url;?>"><?php endif;?>
						<span><?php echo $settings_options['home_internal_title_' . $q_config['language']];?></span>
					<?php if (!$home_active):?></a><?php endif;?>
				</li>

				<?php # About ?>
				<?php $about_url = get_permalink( $settings_options['menu_item_about_id'] );?>
				<?php $about_active = ( $about_url == $q_config['url_info']['url'] );?>
				<li class="<?php echo ($about_active) ? 'active' : '';?>">
					<?php if (!$about_active):?><a href="<?php echo $about_url;?>"><?php endif;?>
						<span><?php echo $settings_options['about_internal_title_' . $q_config['language']];?></span>
					<?php if (!$about_active):?></a><?php endif;?>
				</li>

				<?php # Styles(designers) ?>
				<?php $styles = get_posts( array('post_type' => 'style') );?>
				<?php $styles_active = false;?>
				<?php ob_start();?>
				<?php foreach ($styles as $style) : ?>
					<?php $style_url = get_permalink( $style->ID );?>
					<?php $style_active = ( $style_url == $q_config['url_info']['url'] );?>
					<?php if ($style_active) $styles_active = true;?>
					<li class="<?php echo ($style_active) ? 'active' : '';?>">
						<?php if (!$style_active):?><a href="<?php echo $style_url;?>"><?php endif;?>
							<span><?php echo __($style->post_title);?></span>
						<?php if (!$style_active):?></a><?php endif;?>
					</li>
				<?php endforeach;?>
				<?php $styles_string = ob_get_contents();  ob_end_clean();?>

				<li class="dropdown <?php echo ($styles_active) ? 'active' : '';?>">
					<span><?php echo $settings_options['designers_internal_title_' . $q_config['language']];?></span>
					<ul>
						<?php echo $styles_string;?>
					</ul>
				</li>

				<?php # Categories(products) ?>
				<?php $categories = get_posts( array('post_type' => 'category') );?>
				<?php $categories_active = false;?>
				<?php ob_start();?>
				<?php foreach ($categories as $category) : ?>
					<?php $category_url = get_permalink( $category->ID );?>
					<?php $category_active = ( $category_url == $q_config['url_info']['url'] );?>
					<?php if ($category_active) $categories_active = true;?>
					<li class="<?php echo ($category_active) ? 'active' : '';?>">
						<?php if (!$category_active):?><a href="<?php echo $category_url;?>"><?php endif;?>
							<span><?php echo __($category->post_title);?></span>
						<?php if (!$category_active):?></a><?php endif;?>
					</li>
				<?php endforeach;?>
				<?php $categories_string = ob_get_contents();  ob_end_clean();?>

				<li class="dropdown <?php echo ($categories_active) ? 'active' : '';?>">
					<span><?php echo $settings_options['products_internal_title_' . $q_config['language']];?></span>
					<ul>
						<?php echo $categories_string;?>
					</ul>
				</li>

				<?php # Events ?>
				<?php $events = get_posts( array('post_type' => 'event') );?>
				<?php $events_active = false;?>
				<?php ob_start();?>
				<?php foreach ($events as $event) : ?>
					<?php $event_url = get_permalink( $event->ID );?>
					<?php $event_active = ( $event_url == $q_config['url_info']['url'] );?>
					<?php if ($event_active) $events_active = true;?>
					<li class="<?php echo ($event_active) ? 'active' : '';?>">
						<?php if (!$event_active):?><a href="<?php echo $event_url;?>"><?php endif;?>
							<span><?php echo __($event->post_title);?></span>
						<?php if (!$event_active):?></a><?php endif;?>
					</li>
				<?php endforeach;?>
				<?php $events_string = ob_get_contents();  ob_end_clean();?>

				<li class="dropdown <?php echo ($events_active) ? 'active' : '';?>">
					<span><?php echo $settings_options['events_internal_title_' . $q_config['language']];?></span>
					<ul>
						<?php echo $events_string;?>
					</ul>
				</li>

				<?php # Press ?>
				<?php $press_url = get_permalink( $settings_options['menu_item_press_id'] );?>
				<?php $press_active = ( $press_url == $q_config['url_info']['url'] );?>
				<li class="<?php echo ($press_active) ? 'active' : '';?>">
					<?php if (!$press_active):?><a href="<?php echo $press_url;?>"><?php endif;?>
						<span><?php echo $settings_options['press_internal_title_' . $q_config['language']];?></span>
					<?php if (!$press_active):?></a><?php endif;?>
				</li>

			</ul>
		</nav>

		<?php qtrans_generateLanguageSelectCode();?>

		<?php # LOGO?>
		<a class="logo " href="<?php echo  qtrans_convertURL( get_bloginfo( 'home' ) ) . '/';?>"><?php echo $settings_options['site_title_' . $q_config['language']];?></a>

		<?php # DATE?>
		<div>
			<span><?php echo $settings_options['exhibition_date_' . $q_config['language']];?></span>
			<span><?php echo $settings_options['exhibition_address_' . $q_config['language']];?></span>
		</div>

	</header>

<?php
while ( have_posts() ) : the_post();
	echo '<h2>';
	the_title();
	echo '</h2>';
	the_content();
endwhile;
?>
	<?php #get_search_form(); ?>
