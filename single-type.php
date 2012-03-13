<?php require('base-single-top.php');?>
<?php get_header(); ?>
<article>
	<?php # DESIGNERS ?>
	<?php $designers = get_children( array( 'post_parent' => $current_post->ID, 'post_type' => 'designer' ) );?>
	<?php if ( count( $designers ) ):?>
		<nav class="clearfix">
			<ul  class="modules">
				<?php foreach ($designers as $designer) :?>
					<?php $designer_custom =  get_post_custom($designer->ID);?>
					<li  class="g2">
						<article>
							<a href="<?php echo get_permalink( $designer->ID );?>">
								<h1><?php echo get_the_title( $designer->ID );?></h1>
								<?php if( isset( $designer_custom['featured_image_id'] ) ) : ?>
									<?php $product_image = wp_get_attachment_image_src( $designer_custom['featured_image_id'][0], 'tb' ); ?>
									<img src="<?php echo $product_image[0];?>" width="100%" alt="<?php echo get_the_title( $designer->ID );?>"/>
								<?php endif; ?>
							</a>
						</article>
					</li>
				<?php endforeach;?>
			</ul>
		</nav>
	<?php endif;?>

	<?php require('base-single-content.php');?>
</article>
<?php get_footer(); ?>