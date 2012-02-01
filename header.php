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
<?php qtrans_generateLanguageSelectCode();?>
<?php print_pre(the_post());?>
	<?php #get_search_form(); ?>
