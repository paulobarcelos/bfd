<?php require('base-single-top.php');?>
<?php get_header(); ?>
<article>
	<?php # HEADER ?>
	<header>
		<h1><?php echo get_the_title( $current_post->ID );?></h1>
	</header>


	<?php #PRODUCTS ?>
	<?php $products = get_children( array( 'post_parent' => $current_post->ID, 'post_type' => 'product' ) ); ?>
	<?php if( count( $products ) ): ?>
		<section>
			<ul>
				<?php foreach ( $products as $product ):?>
					<?php $product_custom = get_post_custom($product->ID);?>
					<li>
						<article>
							<a href="<?php echo get_permalink( $product->ID );?>">
								<h3><?php echo get_the_title( $product->ID );?></h3>
								<?php if( isset( $product_custom['featured_image_id'] ) ) : ?>
									<?php $product_image = wp_get_attachment_image_src( $product_custom['featured_image_id'][0], 'thumbnail' ); ?>
									<img src="<?php echo $product_image[0];?>" width="<?php echo $product_image[1];?>" height="<?php echo $product_image[2];?>" alt="<?php echo get_the_title( $product->ID );?>"/>
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