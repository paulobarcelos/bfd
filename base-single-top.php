<?php
	$settings_options = get_option('settings_options');

	while ( have_posts() ) : the_post();
		$current_post = get_post( get_the_id() );
	endwhile;

	$post_custom = get_post_custom($current_post->ID);

	$custom_title = '';
	$custom_description = '';
	$custom_image = '';

	if( isset( $post_custom['seo_custom_title_' . $q_config['language']] ) ){
		$custom_title = $post_custom['seo_custom_title_' . $q_config['language']][0];
	}

	if( isset( $post_custom['seo_meta_description_' . $q_config['language']] ) ){
		$custom_description = $post_custom['seo_meta_description_' . $q_config['language']][0];
	}

	if( isset( $post_custom['featured_image_id'] ) ) { 
		$custom_image = wp_get_attachment_image_src( $post_custom['featured_image_id'][0], 'medium' );
		if($custom_image) $custom_image = $custom_image[0];
	}


	$default_title = get_the_title( $current_post->ID ) . ' - ' . $settings_options['site_title_' . $q_config['language']];
	$default_description = get_the_excerpt( $current_post->ID);
	$default_image = '';

	$META_TITLE = ($custom_title) ? $custom_title : $default_title;	
	$META_DESCRIPTION = ($custom_description) ? $custom_description : $default_description;
	$META_IMAGE = ($custom_image) ? $custom_image : $default_image;
	$META_URL = get_permalink( $current_post->ID );


	if( isset( $post_custom['text_heading_' . $q_config['language']] ) ){
		$heading = $post_custom['text_heading_' . $q_config['language']][0];
	}
	if( isset( $post_custom['text_heading_continuation_' . $q_config['language']] ) ){
		$heading_continuation = $post_custom['text_heading_continuation_' . $q_config['language']][0];
	}
	if( isset( $post_custom['text_signature_' . $q_config['language']] ) ){
		$closure = $post_custom['text_signature_' . $q_config['language']][0];
	}
	if( isset( $post_custom['text_free_html_' . $q_config['language']] ) ){
		$free_html = $post_custom['text_free_html_' . $q_config['language']][0];
	}

	$extras = array();
	for( $i = 1; $i <= 2; $i ++){
		
		$extra_title = '';
		$extra_content = '';
		if( isset( $post_custom['extra_text_' . $i . '_title_' . $q_config['language']] ) ){
			$extra_title = $post_custom['extra_text_' . $i . '_title_' . $q_config['language']][0];
		}
		if( isset( $post_custom['extra_text_' . $i . '_' . $q_config['language']] ) ){
			$extra_content = $post_custom['extra_text_' . $i . '_' . $q_config['language']][0];
		}
		if( $extra_title || $extra_content ){
			$extra = array();
			$extra['title'] = $extra_title;
			$extra['content'] = $extra_content;
			$extras[] = $extra;
			$extra = NULL;
		}
	}

	$downloads = array();
	$downloads_heading = $post_custom['downloads_heading_' . $q_config['language']][0];

	for( $i = 0; $i < 20; $i ++){
		
		$download_title = '';
		$download_url = '';

		if( isset( $post_custom['download_title_' . $i . '_' . $q_config['language']] ) ){
			$download_title = $post_custom['download_title_' . $i . '_' . $q_config['language']][0];
		}
		if( isset( $post_custom['download_file_' . $i . '_' . $q_config['language']] ) ){
			$download_url = $post_custom['download_file_' . $i . '_' . $q_config['language']][0];
		}
		if( $download_title && $download_url ){
			$download = array();
			$download['title'] = $download_title;
			$download['url'] = $download_url;
			$downloads[] = $download;
			$download = NULL;
		}
	}
	
?>