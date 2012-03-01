<?php require('base-single-top.php');?>
<?php get_header(); ?>
<article>
	<?php # HEADER ?>
	<header>
		<h1><?php echo get_the_title( $current_post->ID );?></h1>
	</header>

	<?php #VIDEO ?>
	<?php if( isset( $post_custom['vimeo_video_id'] ) ) $vimeo = $post_custom['vimeo_video_id'][0]; ?>
	<?php if( $vimeo ): ?>
		<div class="video">
			<?php display_vimeo_video( $vimeo, '100%', '100%');?>
		</div>
	<?php endif;?>

	<?php #PRODUCTS ?>
	<?php
		$products = get_posts( array('post_type' => 'product') );
		$designer_products = array();
		foreach ($products as $product) {
			$product_custom = get_post_custom($product->ID);
			if( isset( $product_custom['designed_by'] ) ){
				if( $product_custom['designed_by'][0] == $current_post->ID ){
					$designer_products[] = $product;
				}
			}
		}
	?>
	<?php if( count( $designer_products ) ): ?>
		<section>
			<ul>
				<?php foreach ( $designer_products as $designer_product ):?>
					<?php $designer_product_custom =  get_post_custom($designer->ID);?>
					<li>
						<article>
							<a href="<?php echo get_permalink( $designer_product->ID );?>">
								<h3><?php echo get_the_title( $designer_product->ID );?></h3>
								<?php if( isset( $designer_product_custom['featured_image_id'] ) ) : ?>
									<?php $product_image = wp_get_attachment_image_src( $designer_product_custom['featured_image_id'][0], 'thumbnail' ); ?>
									<img src="<?php echo $product_image[0];?>" width="<?php echo $product_image[1];?>" height="<?php echo $product_image[2];?>" alt="<?php echo get_the_title( $designer_product->ID );?>"/>
								<?php endif; ?>
							</a>
						</article>
					</li>
				<?php endforeach;?>
			</ul>
		</section>
	<?php endif;?>

	<section>
		<?php require('base-single-content.php');?>
	</section>
</article>
<?php get_footer(); ?>