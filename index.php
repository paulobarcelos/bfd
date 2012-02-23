<?php
	$settings_options = get_option('settings_options');
?>
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
							<div>
								<h1><?php echo __($product_designer->post_title);?></h1>
								<p>
									<?php echo __($product->post_title);?>
									<?php if( isset( $product_custom['product_date_' . $q_config['language']] ) ) : ?>| <?php echo $product_custom['product_date_' . $q_config['language']][0]; endif;?>
									<?php if( isset( $product_custom['product_material_' . $q_config['language']] ) ) : ?><br><?php echo $product_custom['product_material_' . $q_config['language']][0]; endif;?>
								</p>
							</div>
							<img src='<?php echo $product_image[0];?>' alt='<?php echo __($product->post_title);?>' width='<?php echo $product_image[1];?>' height='<?php echo $product_image[2];?>'/>
						</article>
					</li>
				<?php endif;?>
			<?php endif; endif;?>
		<?php endforeach;?>
	</ul>
</section>

<?php # CATEGORIES ?>
<?php $categories = get_posts( array('post_type' => 'category') );?>
<section>
	<ul>
		<?php foreach ($categories as $category) : ?>
			<?php $category_custom =  get_post_custom($category->ID);?>
			<?php if( isset( $category_custom['featured_image_id'] ) ) : $category_image = wp_get_attachment_image_src( $category_custom['featured_image_id'][0], 'thumbnail' ); endif; ?>
			<?php if( $category_image ):?>
				<li>
					<article>
						<h1><?php echo __($category->post_title);?></h1>
						<img src='<?php echo $category_image[0];?>' alt='<?php echo __($category->post_title);?>' width='<?php echo $category_image[1];?>' height='<?php echo $category_image[2];?>'/>
					</article>
				</li>
			<?php endif;?>
		<?php endforeach;?>
	</ul>
</section>


<?php # VIDEO?>
<?php display_vimeo_video( $settings_options['video_vimeo_id'], 100, 100);?>

<?php get_footer(); ?>