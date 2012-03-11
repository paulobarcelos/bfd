<?php
	$settings_options = get_option('settings_options');

	$META_TITLE = $settings_options['product_search_internal_title_' . $q_config['language']]  . ': ' . get_search_query() . ' - ' . $settings_options['site_title_' . $q_config['language']];;	
	
?>
<?php get_header(); ?>
<article>
	<?php # HEADER ?>
	<div class="clearfix">
		<div class="g8">
			<header>
				<h1 class="brackets"><?php echo $settings_options['product_search_internal_title_' . $q_config['language']]  . ': ' . get_search_query();?></h1>
			</header>
		</div>
	</div>


	<?php #PRODUCTS ?>
	<nav class="clearfix">
			<ul class="modules clearfix">
				<?php 
					$post_type = (isset($_REQUEST['post_type'])) ? $_REQUEST['post_type'] : 'product';
					$key = (isset($_REQUEST['key'])) ? $_REQUEST['key'] : '_search';
					$s = (isset($_REQUEST['s'])) ? $_REQUEST['s'] : '';
					$s = sanitize_title( $s );
					$s = explode( '-', $s );
					$args = array('post_type' => $post_type );
					query_posts( $args );
				?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php $product_custom = get_post_custom();?>
					<?php
					$found = false;
						foreach ($s as $term) {
							if( strripos( $product_custom[$key][0], $term ) ){
								$found = true;
								break;
							}
						}
					?>
					<?php if( $found ):?>
						<li class="g2">
							<article>
								<a href="<?php echo get_permalink();?>">
									<h1><?php echo get_the_title();?></h1>
									<?php if( isset( $product_custom['featured_image_id'] ) ) : ?>
										<?php $product_image = wp_get_attachment_image_src( $product_custom['featured_image_id'][0], 'tb' ); ?>
										<img src="<?php echo $product_image[0];?>" width="100%" alt="<?php echo get_the_title();?>"/>
									<?php endif; ?>
								</a>
							</article>
						</li>
					<?php endif;?>
				<?php endwhile;?>
				<?php wp_reset_query();?>
		</ul>
	</nav>

</article>
<?php get_footer(); ?>