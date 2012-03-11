<?php
	$settings_options = get_option('settings_options');
?>
<?php
	$META_TITLE = $settings_options['site_title_' . $q_config['language']];
	$META_URL = qtrans_convertURL( get_bloginfo( 'home' ) ) . '/';
	$META_DESCRIPTION = $settings_options['site_meta_description_' . $q_config['language']];
?>
<?php get_header(); ?>

<?php # SLIDEDSHOW ?>
<?php $products = get_posts( array('post_type' => 'product') );?>

<nav id="slideshow" class="row flexslider">
	<ul class="g8 slides">
		<?php foreach ($products as $product) : ?>
			<?php $product_custom =  get_post_custom($product->ID);?>
			<?php if( isset( $product_custom['feature_in_slideshow'] ) ) : if( $product_custom['feature_in_slideshow'][0] == 'on' ) : ?>
				<?php if( isset( $product_custom['designed_by'] ) ) : $product_designer = get_post( $product_custom['designed_by'][0] ); endif; ?>
				<?php if( isset( $product_custom['featured_image_id'] ) ) : $product_image = wp_get_attachment_image_src( $product_custom['featured_image_id'][0], 'slideshow' ); endif; ?>
				<?php if( $product_designer && $product_image ):?>
					<li>
						<article>
							<div>
								<a href="<?php echo get_permalink( $product_designer->ID );?>">
									<h1><?php echo __($product_designer->post_title);?></h1>
									<p>
										<?php echo __($product->post_title);?>
										<?php if( isset( $product_custom['product_date_' . $q_config['language']] ) ) : ?>| <?php echo $product_custom['product_date_' . $q_config['language']][0]; endif;?>
										<?php if( isset( $product_custom['product_material_' . $q_config['language']] ) ) : ?><br><?php echo $product_custom['product_material_' . $q_config['language']][0]; endif;?>
									</p>
								</a>
							</div>
							<a href="<?php echo get_permalink( $product_designer->ID );?>">
								<img src='<?php echo $product_image[0];?>' alt='<?php echo __($product->post_title);?>' width='100%'/>
							</a>
						</article>
					</li>
				<?php endif;?>
			<?php endif; endif;?>
		<?php endforeach;?>
	</ul>
</nav>

<?php # CATEGORIES ?>
<?php $categories = get_posts( array('post_type' => 'category') );?>
<nav class="clearfix">
	<ul class="modules">
		<?php foreach ($categories as $category) : ?>
			<?php $category_custom =  get_post_custom($category->ID);?>
			<?php if( isset( $category_custom['featured_image_id'] ) ) : $category_image = wp_get_attachment_image_src( $category_custom['featured_image_id'][0], 'tb' ); endif; ?>
			<?php if( $category_image ):?>
				<li class="g2">
					<article>
						<a href="<?php echo get_permalink( $category->ID );?>">
							<h1><?php echo __($category->post_title);?></h1>
							<img src='<?php echo $category_image[0];?>' alt='<?php echo __($category->post_title);?>' width='100%'/>
						</a>
					</article>
				</li>
			<?php endif;?>
		<?php endforeach;?>
	</ul>
</nav>

<div class="clearfix">
	<?php # VIDEO?>
	<div id="homevideo" class="g5">
		<?php display_vimeo_video( $settings_options['video_vimeo_id'], '100%', '100%');?>
	</div>

	<?php # NEWS?>
	<div class="g3">
		<?php
			$twitter = new Twitter;
			$results = array();
			try {
				$results = $twitter->search($settings_options['twitter_search_term']);
			} catch (Exception $e) {}
		?>
		<?php if( $results ):?>
			<section id='news'>
				<h1><?php echo $settings_options['news_internal_title_' . $q_config['language']];?></h1>
				<ul>
				
				<?php $i = 0; foreach ($results as $result): ?>
					<?php if($i < 3):?>
						<li><span class="date"><?php echo date("d/m/y ", strtotime($result->created_at)) ?></span>
							<?php echo Twitter::clickable($result->text) ?>			
						</li>
					<?php endif;?>
				<?php $i++; endforeach; ?>
				</ul>
			</section>
		<?php endif;?>
	</div>
</div>

<?php get_footer(); ?>