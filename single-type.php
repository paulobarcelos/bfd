<?php require('base-single-top.php');?>
<?php get_header(); ?>
<article>
	<?php # DESIGNERS ?>
	<?php $designers = get_children( array( 'post_parent' => $current_post->ID, 'post_type' => 'designer' ) );?>
	<?php if ( count( $designers ) ):?>
		<section>
			<ul>
				<?php foreach ($designers as $designer) :?>
					<?php $designer_custom =  get_post_custom($designer->ID);?>
					<li>
						<article>
							<a href="<?php echo get_permalink( $designer->ID );?>">
								<h3><?php echo get_the_title( $designer->ID );?></h3>
								<?php if( isset( $designer_custom['featured_image_id'] ) ) : ?>
									<?php $product_image = wp_get_attachment_image_src( $designer_custom['featured_image_id'][0], 'thumbnail' ); ?>
									<img src="<?php echo $product_image[0];?>" width="<?php echo $product_image[1];?>" height="<?php echo $product_image[2];?>" alt="<?php echo get_the_title( $designer->ID );?>"/>
								<?php endif; ?>
							</a>
						</article>
					</li>
				<?php endforeach;?>
			</ul>
		</section>
	<?php endif;?>

	<?php require('base-single-content.php');?>
</article>
<?php get_footer(); ?>