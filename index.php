<?php get_header(); ?>

<?php # SLIDEDSHOW ?>
<?php $products = get_posts( array('post_type' => 'product') );?>
<section>
	<ul>
		<?php foreach ($products as $product) : ?>
			<?php $product_custom =  get_post_custom($product->ID);?>
			<?php if( isset( $product_custom['feature_in_slideshow'] ) ) : if( $product_custom['feature_in_slideshow'][0] == 'on' ) : ?>
				<?php if( isset( $product_custom['designed_by'] ) ) : $product_designer = get_post( $product_custom['designed_by'][0] ); endif; ?>
				<?php if( isset( $product_custom['featured_image_id'] ) ) : $product_image = wp_get_attachment_image_src( $product_custom['featured_image_id'][0], 'slideshow' ); endif; ?>
				<?php if( $product_designer && $product_image ):?>
					<li>
						<article>
							<img src='<?php echo $product_image[0];?>' alt='<?php echo __($product->post_title);?>' width='<?php echo $product_image[1];?>' height='<?php echo $product_image[2];?>'/>
							<div>
								<h1><?php echo __($product_designer->post_title);?></h1>
								<p>
									<?php echo __($product->post_title);?>
									<?php if( isset( $product_custom['product_date_' . $q_config['language']] ) ) : ?>| <?php echo $product_custom['product_date_' . $q_config['language']][0]; endif;?>
									<?php if( isset( $product_custom['product_material_' . $q_config['language']] ) ) : ?><br><?php echo $product_custom['product_material_' . $q_config['language']][0]; endif;?>
								</p>
							</div>
						</article>
					</li>
				<?php endif;?>
			<?php endif; endif;?>
		<?php endforeach;?>
	</ul>
<section>

<?php get_footer(); ?>