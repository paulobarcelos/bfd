<?php require('base-single-top.php');?>
<?php get_header(); ?>
<article>
	<?php # HEADER ?>
	<div>
		<header>
			<?php #DESIGNER ?>
			<?php if( isset( $post_custom['designed_by'] ) ) : if ( $post_custom['designed_by'][0] ) : $designer_id = $post_custom['designed_by'][0]; endif; endif; ?>
			<?php if( $designer_id  ):?>
				<p><a href="<?php echo get_permalink( $designer_id );?>"><?php echo __( get_the_title( $designer_id ) ); ?></a></p>
			<?php endif;?>
			<?php #TITLE ?>	
			<h1><?php echo __( get_the_title( $current_post->ID ) );?></h1>
		</header>
		<p>
			<?php if( isset( $post_custom['product_date_' . $q_config['language']] ) ) : ?><?php echo $post_custom['product_date_' . $q_config['language']][0]; endif;?>
			<?php if( isset( $post_custom['product_material_' . $q_config['language']] ) ) : ?><br><?php echo $post_custom['product_material_' . $q_config['language']][0]; endif;?>
			<?php if( isset( $post_custom['product_specifications_' . $q_config['language']] ) ) : ?><br><?php echo $post_custom['product_specifications_' . $q_config['language']][0]; endif;?>
		</p>
	</div>

	<?php #IMAGE GALLERY ?>
	<?php 
		$images = array();
		for( $i = 0; $i < 10; $i ++){
			$image_id = '';
			if( isset( $post_custom['gallery_image_' . $i . '_id'] ) ){
				$image_id = $post_custom['gallery_image_' . $i . '_id'][0];
				$image = array();
				$image['medium'] = wp_get_attachment_image_src( $image_id, 'medium' ); 
				$image['mini'] = wp_get_attachment_image_src( $image_id, 'mini' ); 
				$images[] = $image;
				$image = NULL;
			}
		}

	?>
	<?php if( count( $images ) ):?>
		<div class='nivoSliderWrapper'>
			<div class="nivoSlider">
				<?php foreach ($images as $image):?>
					<img src="<?php echo $image['medium'][0];?>" rel="<?php echo $image['mini'][0];?>" alt="<?php echo __( get_the_title( $current_post->ID ) );?>" />
				<?php endforeach;?>
			</div>
		<div>
	<?php endif;?>


	

	<section>
		<?php require('base-single-content.php');?>
	</section>
</article>
<?php get_footer(); ?>