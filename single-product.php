<?php require('base-single-top.php');?>
<?php get_header(); ?>
<article>
	<div class="clearfix">
		<?php # HEADER ?>	
		<div id="productcontent" class="g3">
			<header>
				<?php #DESIGNER ?>
				<?php if( isset( $post_custom['designed_by'] ) ) : if ( $post_custom['designed_by'][0] ) : $designer_id = $post_custom['designed_by'][0]; endif; endif; ?>
				<?php if( $designer_id  ):?>
					<p><a href="<?php echo get_permalink( $designer_id );?>" class="brackets"><?php echo __( get_the_title( $designer_id ) ); ?></a></p>
				<?php endif;?>
				<?php #TITLE ?>	
				<h1><?php echo __( get_the_title( $current_post->ID ) );?></h1>
			</header>
			<p class="details"><?php if( isset( $post_custom['product_date_' . $q_config['language']] ) ) : ?><?php echo $post_custom['product_date_' . $q_config['language']][0]; endif;?><?php if( isset( $post_custom['product_material_' . $q_config['language']] ) ) : ?><br><?php echo $post_custom['product_material_' . $q_config['language']][0]; endif;?><?php if( isset( $post_custom['product_specifications_' . $q_config['language']] ) ) : ?><br><?php echo $post_custom['product_specifications_' . $q_config['language']][0]; endif;?><?php if( isset( $post_custom['product_copyright_' . $q_config['language']] ) ) : ?><br><?php echo $post_custom['product_copyright_' . $q_config['language']][0]; endif;?></p>
		</div>

		<?php #IMAGE GALLERY ?>
		<?php 
			$images = array();
			for( $i = 0; $i < 10; $i ++){
				$image_id = '';
				if( isset( $post_custom['gallery_image_' . $i . '_id'] ) ){
					$image_id = $post_custom['gallery_image_' . $i . '_id'][0];
					$image = array();
					$image['slideshow'] = wp_get_attachment_image_src( $image_id, 'slideshow' ); 
					$image['tb'] = wp_get_attachment_image_src( $image_id, 'tb' ); 
					$images[] = $image;
					$image = NULL;
				}
			}

		?>
		<?php if( count( $images ) ):?>
			<div class="g5">
				<img id="bigimage" width="100%" src="<?php echo $images[0]['slideshow'][0];?>" alt="<?php echo __( get_the_title( $current_post->ID ) );?>" />
			</div>
		<?php endif;?>
	</div>

	<?php if( count( $images ) ):?>
		<div class="clearfix smallimages">
			<?php foreach ($images as $image):?>
				<div class="_g1">
					<img data-big="<?php echo $image['slideshow'][0];?>" src="<?php echo $image['slideshow'][0];?>" width="100%" alt="<?php echo __( get_the_title( $current_post->ID ) );?>" />
				</div>
			<?php endforeach;?>
		</div>
	<?php endif;?>

	<section>
		<?php require('base-single-content.php');?>
	</section>
</article>
<?php get_footer(); ?>