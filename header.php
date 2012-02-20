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
				<?php $home_url = $q_config['url_info']['home'];?>
				<?php $home_active = ( $home_url == $q_config['url_info']['original_url'] );?>
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

				<?php # Designers ?>
				<?php $about_url = get_permalink( $settings_options['menu_item_about_id'] );?>
				<?php $designers_active = ( $about_url == $q_config['url_info']['url'] );?>
				<li class="dropdown <?php echo ($designers_active) ? 'active' : '';?>">
					<span><?php echo $settings_options['designers_internal_title_' . $q_config['language']];?></span>
					<ul>
						<?php $styles = get_posts( array('post_type' => 'style') );?>
						<?php foreach ($styles as $style) : ?>
							<?php $style_url = get_permalink( $style->ID );?>
							<?php $style_active = ( $style_url == $q_config['url_info']['url'] );?>
							<li class="<?php echo ($style_active) ? 'active' : '';?>">
								<?php if (!$style_active):?><a href="<?php echo $style_url;?>"><?php endif;?>
									<span><?php echo __($style->post_title);?></span>
								<?php if (!$style_active):?></a><?php endif;?>
							</li>
						<?php endforeach;?>
					</ul>
				</li>

			</ul>
		</nav>
	</header>
<?php qtrans_generateLanguageSelectCode();?>
<?php print_pre(the_post());?>
	<?php #get_search_form(); ?>
