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


	<?php #PRODUCTS ?>
	<?php $products = get_children( array( 'post_parent' => $current_post->ID, 'post_type' => 'product' ) ); ?>
	<?php if( count( $products ) ): ?>
		<nav class="clearfix">
			<ul class="modules clearfix">
				<?php foreach ( $products as $product ):?>
					<?php $product_custom = get_post_custom($product->ID);?>
					<li class="g2">
						<article>
							<a href="<?php echo get_permalink( $product->ID );?>">
								<h1><?php echo get_the_title( $product->ID );?></h1>
								<?php if( isset( $product_custom['featured_image_id'] ) ) : ?>
									<?php $product_image = wp_get_attachment_image_src( $product_custom['featured_image_id'][0], 'tb' ); ?>
									<img src="<?php echo $product_image[0];?>" width="100%" alt="<?php echo get_the_title( $product->ID );?>"/>
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