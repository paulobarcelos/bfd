<?php require('base-single-top.php');?>
<?php get_header(); ?>
<article>
	<?php # HEADER ?>
	<div class="clearfix">
		<div class="g8">
			<header>
				<h1 class="brackets"><?php echo get_the_title( $current_post->ID );?></h1>
			</header>
		</div>
	</div>

	<?php #VIDEO OR IMAGE?>
	<div class="clearfix">
		<div class="emptyg1">&nbsp</div>
		<?php if( isset( $post_custom['vimeo_video_id_' . $q_config['language']] ) ) $vimeo = $post_custom['vimeo_video_id_' . $q_config['language']][0]; ?>
		<?php if( $vimeo ): ?>
			<div class="g6 video">
				<?php display_vimeo_video( $vimeo, '100%', '100%');?>
			</div>
		<?php elseif ( isset( $post_custom['featured_image_id'] ) ) : $image = wp_get_attachment_image_src( $post_custom['featured_image_id'][0], 'slideshow' );?>
			<div class="g6">
				<img src='<?php echo $image[0];?>' alt='<?php echo get_the_title( $current_post->ID );?>' width='100%'/>
			</div>
		<?php endif; ?>
		<div class="emptyg1">&nbsp</div>
	</div>

	<?php #PRODUCTS ?>
	<?php
		$products = get_posts( array('post_type' => 'product', 'numberposts' => 100) );
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
		<nav class="clearfix">
			<ul class="modules clearfix">
				<?php foreach ( $designer_products as $designer_product ):?>
					<?php $designer_product_custom =  get_post_custom($designer_product->ID);?>
					<li class="g2">
						<article>
							<a href="<?php echo get_permalink( $designer_product->ID );?>">
								<h1><?php echo get_the_title( $designer_product->ID );?></h1>
								<?php if( isset( $designer_product_custom['featured_image_id'] ) ) : ?>
									<?php $product_image = wp_get_attachment_image_src( $designer_product_custom['featured_image_id'][0], 'tb' ); ?>
									<img src="<?php echo $product_image[0];?>" width="100%"  alt="<?php echo get_the_title( $designer_product->ID );?>"/>
								<?php endif; ?>
							</a>
						</article>
					</li>
				<?php endforeach;?>
			</ul>
		</nav>
	<?php endif;?>

	<section>
		<?php require('base-single-content.php');?>
	</section>
</article>
<?php get_footer(); ?>