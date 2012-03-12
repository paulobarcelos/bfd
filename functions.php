<?php 
// INCLUDES
require_once('lib/twitter/twitter.class.php');
// CUSTOM POST TYPES
/**
* Info
*/
	add_action( 'init', 'register_cpt_info' );
	function register_cpt_info() {
		$labels = array( 
			'name' => _x( 'Infos', 'info' ),
			'singular_name' => _x( 'Info', 'info' ),
			'add_new' => _x( 'Add New', 'info' ),
			'add_new_item' => _x( 'Add New Info', 'info' ),
			'edit_item' => _x( 'Edit Info', 'info' ),
			'new_item' => _x( 'New Info', 'info' ),
			'view_item' => _x( 'View Info', 'info' ),
			'search_items' => _x( 'Search Infos', 'info' ),
			'not_found' => _x( 'No infos found', 'info' ),
			'not_found_in_trash' => _x( 'No infos found in Trash', 'info' ),
			'parent_item_colon' => _x( 'Parent:', 'info' ),
			'menu_name' => _x( 'Infos', 'info' ),
		);
		$args = array( 
			'labels' => $labels,
			'hierarchical' => false,
					
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 4,
			
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => array('slug'=>'info','with_front'=>false),
			'capability_type' => 'post'
		);
		register_post_type( 'info', $args );
	}

	/**
	 * Remove metaboxes
	 */
	function info_remove_meta_box_handler (){
		remove_meta_box('pageparentdiv', 'info', 'normal');
		remove_meta_box('commentstatusdiv', 'info', 'normal');
		remove_meta_box('commentsdiv', 'info', 'normal');
		remove_meta_box('authordiv', 'info', 'normal');
		remove_meta_box('postcustom', 'info', 'normal');
		remove_meta_box('postexcerpt', 'info', 'normal');
		remove_meta_box('trackbacksdiv', 'info', 'normal');
		remove_meta_box('postimagediv', 'info', 'normal');
		remove_meta_box('formatdiv', 'info', 'normal');
		remove_meta_box('categorydiv', 'info', 'normal');
	}
	add_action('admin_menu', 'info_remove_meta_box_handler');
/**
* Type
*/
	add_action( 'init', 'register_cpt_type' );
	function register_cpt_type() {
		$labels = array( 
			'name' => _x( 'Types', 'type' ),
			'singular_name' => _x( 'Type', 'type' ),
			'add_new' => _x( 'Add New', 'type' ),
			'add_new_item' => _x( 'Add New Type', 'type' ),
			'edit_item' => _x( 'Edit Type', 'type' ),
			'new_item' => _x( 'New Type', 'type' ),
			'view_item' => _x( 'View Type', 'type' ),
			'search_items' => _x( 'Search Types', 'type' ),
			'not_found' => _x( 'No types found', 'type' ),
			'not_found_in_trash' => _x( 'No types found in Trash', 'type' ),
			'parent_item_colon' => _x( 'Parent Type:', 'type' ),
			'menu_name' => _x( 'Types', 'type' ),
		);
		$args = array( 
			'labels' => $labels,
			'hierarchical' => false,
					
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 4,
			
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => array('slug'=>'type','with_front'=>false),
			'capability_type' => 'post'
		);
		register_post_type( 'type', $args );
		//global $wp_rewrite;
		//$wp_rewrite->add_rewrite_tag("%type%", '([^/]+)', "type=");
		//$wp_rewrite->add_permastruct('type', '%type%', false);
	}

	/**
	 * Remove metaboxes
	 */
	function type_remove_meta_box_handler (){
		remove_meta_box('pageparentdiv', 'type', 'normal');
		remove_meta_box('commentstatusdiv', 'type', 'normal');
		remove_meta_box('commentsdiv', 'type', 'normal');
		remove_meta_box('authordiv', 'type', 'normal');
		remove_meta_box('postcustom', 'type', 'normal');
		remove_meta_box('postexcerpt', 'type', 'normal');
		remove_meta_box('trackbacksdiv', 'type', 'normal');
		remove_meta_box('postimagediv', 'type', 'normal');
		remove_meta_box('formatdiv', 'type', 'normal');
		remove_meta_box('categorydiv', 'type', 'normal');
	}
	add_action('admin_menu', 'type_remove_meta_box_handler');
/**
* Designer
*/
	add_action( 'init', 'register_cpt_designer' );
	function register_cpt_designer() {
		$labels = array( 
			'name' => _x( 'Designers', 'designer' ),
			'singular_name' => _x( 'Designer', 'designer' ),
			'add_new' => _x( 'Add New', 'designer' ),
			'add_new_item' => _x( 'Add New Designer', 'designer' ),
			'edit_item' => _x( 'Edit Designer', 'designer' ),
			'new_item' => _x( 'New Designer', 'designer' ),
			'view_item' => _x( 'View Designer', 'designer' ),
			'search_items' => _x( 'Search Designers', 'designer' ),
			'not_found' => _x( 'No designers found', 'designer' ),
			'not_found_in_trash' => _x( 'No designers found in Trash', 'designer' ),
			'parent_item_colon' => _x( 'Parent:', 'designer' ),
			'menu_name' => _x( 'Designers', 'designer' ),
		);
		$args = array( 
			'labels' => $labels,
			'hierarchical' => true,
					
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => array('slug'=>'designer','with_front'=>false),
			'capability_type' => 'post'
		);
		register_post_type( 'designer', $args );
	}
	/**
	 * Remove metaboxes
	 */
	function designer_remove_meta_box_handler (){
		remove_meta_box('pageparentdiv', 'designer', 'normal');
		remove_meta_box('commentstatusdiv', 'designer', 'normal');
		remove_meta_box('commentsdiv', 'designer', 'normal');
		remove_meta_box('authordiv', 'designer', 'normal');
		remove_meta_box('postcustom', 'designer', 'normal');
		remove_meta_box('postexcerpt', 'designer', 'normal');
		remove_meta_box('trackbacksdiv', 'designer', 'normal');
		remove_meta_box('postimagediv', 'designer', 'normal');
		remove_meta_box('formatdiv', 'designer', 'normal');
		remove_meta_box('categorydiv', 'designer', 'normal');
	}
	add_action('admin_menu', 'designer_remove_meta_box_handler');
	/**
	 * Add metaboxes
	 */
	function designer_add_meta_box_handler (){
		add_meta_box('designer-parent', 'Type', 'designer_parent_meta_box', 'designer', 'normal', 'high');
	}
	function designer_parent_meta_box($post) {
		post_custom_parent_meta_box( $post, 'type' );
	}
	add_action('add_meta_boxes', 'designer_add_meta_box_handler');
	/**
	 * Add custom metaboxes via the metabox class
	 */
	add_filter( 'cmb_meta_boxes', 'designer_cmb_metaboxes' );
	function designer_cmb_metaboxes( array $meta_boxes ) {
		global $q_config;

		$fields = array();

		// Video 
		foreach ($q_config['enabled_languages'] as $language_code ) {
			$fields[] = designer_video_field_creator( $language_code );
		}

		$meta_boxes[] = array(
			'id'         => 'designer_metaboxes',
			'title'      => 'Desiger Media',
			'pages'      => array( 'designer' ),
			'context'    => 'normal',
			'priority'   => 'high',
			'show_names' => true,
			'fields'     => $fields,
		);

		return $meta_boxes;
	}

	function designer_video_field_creator($language_code){
		global $q_config;

		$array = array(
			'name' => 'Vimeo Video ID ('.$q_config['language_name'][$language_code].')',
			'desc' => '',
			'id' => 'vimeo_video_id_'.$language_code,
			'type' => 'text_small'
		);
		return $array;
	}

/**
* Category
*/
	add_action( 'init', 'register_cpt_category' );
	function register_cpt_category() {
		$labels = array( 
			'name' => _x( 'Categories', 'category' ),
			'singular_name' => _x( 'Category', 'category' ),
			'add_new' => _x( 'Add New', 'category' ),
			'add_new_item' => _x( 'Add New Category', 'category' ),
			'edit_item' => _x( 'Edit Category', 'category' ),
			'new_item' => _x( 'New Category', 'category' ),
			'view_item' => _x( 'View Category', 'category' ),
			'search_items' => _x( 'Search Categories', 'category' ),
			'not_found' => _x( 'No categories found', 'category' ),
			'not_found_in_trash' => _x( 'No categories found in Trash', 'category' ),
			'parent_item_colon' => _x( 'Parent:', 'category' ),
			'menu_name' => _x( 'Categories', 'category' ),
		);
		$args = array( 
			'labels' => $labels,
			'hierarchical' => false,
						
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 4,
			
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => array('slug'=>'category','with_front'=>false),
			'capability_type' => 'post'
		);
		register_post_type( 'category', $args );
		//global $wp_rewrite;
		//$wp_rewrite->add_rewrite_tag("%category%", '([^/]+)', "category=");
		//$wp_rewrite->add_permastruct('category', '%category%', false);
	}
	/**
	 * Remove metaboxes
	 */
	add_action('admin_menu', 'category_remove_meta_box_handler'); 
	function category_remove_meta_box_handler (){
		remove_meta_box('pageparentdiv', 'category', 'normal');
		remove_meta_box('commentstatusdiv', 'category', 'normal');
		remove_meta_box('commentsdiv', 'category', 'normal');
		remove_meta_box('authordiv', 'category', 'normal');
		remove_meta_box('postcustom', 'category', 'normal');
		remove_meta_box('postexcerpt', 'category', 'normal');
		remove_meta_box('trackbacksdiv', 'category', 'normal');
		remove_meta_box('postimagediv', 'category', 'normal');
		remove_meta_box('formatdiv', 'category', 'normal');
		remove_meta_box('categorydiv', 'category', 'normal');
	}	

/**
* Product
*/
	add_action( 'init', 'register_cpt_product' );
	function register_cpt_product() {
		$labels = array( 
			'name' => _x( 'Products', 'product' ),
			'singular_name' => _x( 'Product', 'product' ),
			'add_new' => _x( 'Add New', 'product' ),
			'add_new_item' => _x( 'Add New Product', 'product' ),
			'edit_item' => _x( 'Edit Product', 'product' ),
			'new_item' => _x( 'New Product', 'product' ),
			'view_item' => _x( 'View Product', 'product' ),
			'search_items' => _x( 'Search Products', 'product' ),
			'not_found' => _x( 'No products found', 'product' ),
			'not_found_in_trash' => _x( 'No products found in Trash', 'product' ),
			'parent_item_colon' => _x( 'Parent:', 'product' ),
			'menu_name' => _x( 'Products', 'product' ),
		);
		$args = array( 
			'labels' => $labels,
			'hierarchical' => true,
				
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => array('slug'=>'product','with_front'=>false),
			'capability_type' => 'post'
		);
		register_post_type( 'product', $args );
	}
	/**
	 * Remove metaboxes
	 */
	add_action('admin_menu', 'product_remove_meta_box_handler');
	function product_remove_meta_box_handler (){
		remove_meta_box('pageparentdiv', 'product', 'normal');
		remove_meta_box('commentstatusdiv', 'product', 'normal');
		remove_meta_box('commentsdiv', 'product', 'normal');
		remove_meta_box('authordiv', 'product', 'normal');
		remove_meta_box('postcustom', 'product', 'normal');
		remove_meta_box('postexcerpt', 'product', 'normal');
		remove_meta_box('trackbacksdiv', 'product', 'normal');
		remove_meta_box('postimagediv', 'product', 'normal');
		remove_meta_box('formatdiv', 'product', 'normal');
		remove_meta_box('categorydiv', 'product', 'normal');
	}
	/**
	 * Add metaboxes
	 */
	add_action('add_meta_boxes', 'product_add_meta_box_handler');
	function product_add_meta_box_handler (){
		add_meta_box('product-parent', 'Category', 'product_parent_meta_box', 'product', 'normal', 'high');
	}
	function product_parent_meta_box($post) {
		post_custom_parent_meta_box( $post, 'category' );
	}
	/**
	 * Add custom metaboxes via the metabox class
	 */
	add_filter( 'cmb_meta_boxes', 'product_cmb_metaboxes' );
	function product_cmb_metaboxes( array $meta_boxes ) {
		global $q_config;

		$fields = array();

		// Designed by
		$fields[] = array(
			'name' => 'Designed by',
			'desc' => 'The name of the designer who did this product',
			'id'   => 'designed_by',
			'type' => 'select',
			'options' => generate_product_designed_by_list(),
		);

		foreach ($q_config['enabled_languages'] as $language_code ) {
			$fields[] = product_year_field_creator( $language_code );
			$fields[] = product_material_field_creator( $language_code );
			$fields[] = product_specifications_field_creator( $language_code );
			$fields[] = product_copyright_field_creator( $language_code );
		}

		// Feature in slideshow
		$fields[] = array(
			'name' => 'Feature in Slideshow',
			'desc' => 'Should this product be displayed in the slideshow in the homepage?',
			'id' => 'feature_in_slideshow',
			'type' => 'checkbox',
		);

		// Image Gallery
		$fields[] = array(
			'name' => 'Image Gallery',
			'desc' => '',
			'id' => 'image_gallery_title',
			'type' => 'title',
		);

		for($i = 0; $i < 10; $i++){
			// Image 
			$fields[] = array(
				'name' => 'Image '. ($i + 1),
				'desc' => '',
				'id' => 'gallery_image_'.$i,
				'type' => 'file',
				'save_id' => true,
				'allow' => array( 'attachment' )
			);
		}
		


		$meta_boxes[] = array(
			'id'         => 'product_metaboxes',
			'title'      => 'Product Info',
			'pages'      => array( 'product' ),
			'context'    => 'normal',
			'priority'   => 'high',
			'show_names' => true,
			'fields'     => $fields,
		);

		return $meta_boxes;
	}
	function generate_product_designed_by_list(){
			$array = array();

			$array[] = array( 
				'name' => 'None', 
				'value' => 0
			);

			$designer_posts = get_posts ( array( 'post_type' => 'designer', 'numberposts' => 100) );
			foreach ($designer_posts as $designer_post){
				$array[] = array( 
					'name' => get_the_title($designer_post->ID), 
					'value' => $designer_post->ID
				);
			}
			
			return $array;
	}
	function product_year_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Product Date ('.$q_config['language_name'][$language_code].')',
					'desc' => '',
					'id'   => 'product_date_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	function product_material_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Product Material ('.$q_config['language_name'][$language_code].')',
					'desc' => '',
					'id'   => 'product_material_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	function product_specifications_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Product Specifications ('.$q_config['language_name'][$language_code].')',
					'desc' => '',
					'id'   => 'product_specifications_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	function product_copyright_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Product Copyright ('.$q_config['language_name'][$language_code].')',
					'desc' => '',
					'id'   => 'product_copyright_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	/**
	* Add a action hook when the post is edited, saving all the keywords in a separeted custom field used for searching
	*/
	function generate_product_search_terms($post_ID)  {
		global $q_config;
		if( get_post_type( $post_ID ) == 'product' ){
			$post = get_post($post_ID);
			$custom = get_post_custom( $post_ID );
			$terms = '';
			$terms .= get_the_title( $post_ID ) . ' ';
			$terms .= get_the_content( $post_ID ) . ' ';

			if( isset( $custom['designed_by'] ) ){
				$terms .= get_the_title( $custom['designed_by'][0] ) . ' ';
			}

			$parent_id = $post->post_parent;

			if( $parent_id ){
				$terms .= get_the_title( $parent_id ) . ' ';
			}

			foreach ($q_config['enabled_languages'] as $language_code ) {
				if( isset( $custom['product_date_' . $language_code] ) ){
					$terms .= $custom['product_date_' . $language_code][0] . ' ';
				}
				if( isset( $custom['product_material_' . $language_code] ) ){
					$terms .= $custom['product_material_' . $language_code][0] . ' ';
				}
				if( isset( $custom['product_specifications_' . $language_code] ) ){
					$terms .= $custom['product_specifications_' . $language_code][0] . ' ';
				}
			}

			$terms = str_replace('-', ' ', sanitize_title( $terms ) );
			update_post_meta($post_ID, '_search', $terms);
		}
	}

	add_action('edit_post', 'generate_product_search_terms');
/**
* Event
*/
	add_action( 'init', 'register_cpt_event' );
	function register_cpt_event() {
		$labels = array( 
			'name' => _x( 'Events', 'event' ),
			'singular_name' => _x( 'Event', 'event' ),
			'add_new' => _x( 'Add New', 'event' ),
			'add_new_item' => _x( 'Add New Event', 'event' ),
			'edit_item' => _x( 'Edit Event', 'event' ),
			'new_item' => _x( 'New Event', 'event' ),
			'view_item' => _x( 'View Event', 'event' ),
			'search_items' => _x( 'Search Events', 'event' ),
			'not_found' => _x( 'No events found', 'event' ),
			'not_found_in_trash' => _x( 'No events found in Trash', 'event' ),
			'parent_item_colon' => _x( 'Parent:', 'event' ),
			'menu_name' => _x( 'Events', 'event' ),
		);
		$args = array( 
			'labels' => $labels,
			'hierarchical' => true,
						
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => array('slug'=>'event','with_front'=>false),
			'capability_type' => 'post'
		);
		register_post_type( 'event', $args );
	}
	/**
	 * Remove metaboxes
	 */
	add_action('admin_menu', 'event_remove_meta_box_handler');
	function event_remove_meta_box_handler (){
		remove_meta_box('pageparentdiv', 'event', 'normal');
		remove_meta_box('commentstatusdiv', 'event', 'normal');
		remove_meta_box('commentsdiv', 'event', 'normal');
		remove_meta_box('authordiv', 'event', 'normal');
		remove_meta_box('postcustom', 'event', 'normal');
		remove_meta_box('postexcerpt', 'event', 'normal');
		remove_meta_box('trackbacksdiv', 'event', 'normal');
		remove_meta_box('postimagediv', 'event', 'normal');
		remove_meta_box('formatdiv', 'event', 'normal');
		remove_meta_box('categorydiv', 'event', 'normal');
	}

// ADMIN HELPERS
/**
* Helper to create a metabox with a list of post parent's to chose from a specif post type
* @param $post - current post obejct
* @param string $type - The post type from the parent
*/
	function post_custom_parent_meta_box($post, $type) {
		$post_type_object = get_post_type_object($post->post_type);
		if ( $post_type_object->hierarchical ) {
			$current_parent_id = $post->post_parent;
			$posts = get_posts ( array( 'post_type' => $type, 'numberposts' => 999 ) );
			?>
				<select name="post_parent">
					<option>None</option>
					<?php foreach ($posts as $category_post):?>
						<option value="<?php echo $category_post->ID;?>" <?php if ($current_parent_id == $category_post->ID):?> selected <?php endif;?> ><?php echo get_the_title($category_post->ID);?></option>
					<?php endforeach;?>
				</select>
			<?php
		}
	}

/**
* Global metaboxes
* Create custom metaboxes (via the metabox class) that will apply to multiple post types
* @package 	Custom metaboxes
*/
	/**
	 * Add custom metaboxes via the metabox class
	 */
	add_filter( 'cmb_meta_boxes', 'text_signature_cmb_metaboxes' );
	function text_signature_cmb_metaboxes( array $meta_boxes ) {
		global $q_config;

		$prefix = '_cmb_';
				
		$fields = array();
		// SEO
		$fields[] = array(
			'name' => 'SEO',
			'desc' => '',
			'type' => 'title',
			'id' => 'seo_title'
		);
		foreach ($q_config['enabled_languages'] as $language_code ) {
			$fields[] = seo_custom_title_field_creator( $language_code );
			$fields[] = seo_meta_description_field_creator( $language_code );
		}
		// Text information
		$fields[] = array(
			'name' => 'Main content',
			'desc' => '',
			'type' => 'title',
			'id' => 'main_text_title'
		);
		$fields[] = array(
			'name' => 'Featured Image',
			'desc' => '',
			'id' => 'featured_image',
			'type' => 'file',
			'save_id' => true, // save ID using true
			'allow' => array( 'attachment' ) // limit to just attachments with array( 'attachment' )
		);
		foreach ($q_config['enabled_languages'] as $language_code ) {
			$fields[] = text_title_field_creator( $language_code );
			$fields[] = text_heading_continuation_field_creator( $language_code );
			$fields[] = text_closure_field_creator( $language_code );
		}
		// Extra text 1 
		$fields[] = array(
			'name' => 'Extra Text 1',
			'desc' => 'Optional extra text box with title.',
			'type' => 'title',
			'id' => 'extra_text_1_title'
		);
		foreach ($q_config['enabled_languages'] as $language_code ) {
			$fields[] = extra_text_1_title_field_creator( $language_code );
			$fields[] = extra_text_1_field_creator( $language_code );
		}
		// Extra text 2 
		$fields[] = array(
			'name' => 'Extra Text 2',
			'desc' => 'Optional extra text box with title.',
			'type' => 'title',
			'id' => 'extra_text_2_title'
		);
		foreach ($q_config['enabled_languages'] as $language_code ) {
			$fields[] = extra_text_2_title_field_creator( $language_code );
			$fields[] = extra_text_2_field_creator( $language_code );
		}

		// Downloads
		foreach ($q_config['enabled_languages'] as $language_code ) {
			$fields[] = array(
				'name' => 'Downloads '.$q_config['language_name'][$language_code],
				'desc' => '',
				'type' => 'title',
				'id' => 'downloads_title_' . $language_code
			);
			$fields[] = array(
				'name' => 'Heading',
				'desc' => 'Optional heading for the download list',
				'type' => 'text',
				'id' => 'downloads_heading_' . $language_code
			);
			for($i = 0; $i < 10; $i++){
				$fields[] = download_file_field_creator( $language_code, $i );
				$fields[] = download_title_field_creator( $language_code, $i );
			}
		}
		
		$meta_boxes[] = array(
			'id'         => 'information',
			'title'      => 'Information',
			'pages'      => array( 'info', 'type', 'designer', 'category', 'product', 'event' ),
			'context'    => 'normal',
			'priority'   => 'high',
			'show_names' => true,
			'fields'     => $fields,
		);


		return $meta_boxes;
	}
	function seo_custom_title_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Custom Page Title ('.$q_config['language_name'][$language_code].')',
					'desc' => 'If provided, will be used as the custom title of the page.',
					'id'   => 'seo_custom_title_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	function seo_meta_description_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Page Meta description ('.$q_config['language_name'][$language_code].')',
					'desc' => 'Short description of the contents of this page.',
					'id'   => 'seo_meta_description_'.$language_code,
					'type' => 'textarea_small'
				);
		return $array;
	}
	function text_title_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Text Title ('.$q_config['language_name'][$language_code].')',
					'desc' => 'The title of the text.',
					'id'   => 'text_heading_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	function text_heading_continuation_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Text Title - continuation ('.$q_config['language_name'][$language_code].')',
					'desc' => 'If provided, will show up under the text title',
					'id'   => 'text_heading_continuation_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	function text_closure_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Text Closure ('.$q_config['language_name'][$language_code].')',
					'desc' => 'The closing line at the end of the text.',
					'id'   => 'text_signature_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	function extra_text_1_title_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Title ('.$q_config['language_name'][$language_code].')',
					'desc' => '',
					'id'   => 'extra_text_1_title_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	function extra_text_1_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Content ('.$q_config['language_name'][$language_code].')',
					'desc' => '',
					'id'   => 'extra_text_1_'.$language_code,
					'type' => 'textarea',
					/*'options' => array(
					    //'wpautop' => true, // use wpautop?
					    'media_buttons' => false, // show insert/upload button(s)
					    //'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
					    //'textarea_rows' => get_option('default_post_edit_rows', 5), // rows="..."
					    //'tabindex' => '',
					    //'editor_css' => '', // intended for extra types for both visual and HTML editors buttons, needs to include the <type> tags, can use "scoped".
					   // 'editor_class' => '', // add extra class(es) to the editor textarea
					  // 'teeny' => true, // output the minimal editor config used in Press This
					   // 'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
					   // 'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
					    //'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()	
					)*/
				);
		return $array;
	}
	function extra_text_2_title_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Title ('.$q_config['language_name'][$language_code].')',
					'desc' => '',
					'id'   => 'extra_text_2_title_'.$language_code,
					'type' => 'text'
				);
		return $array;
	}
	function extra_text_2_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Content ('.$q_config['language_name'][$language_code].')',
					'desc' => '',
					'id'   => 'extra_text_2_'.$language_code,
					'type' => 'textarea',
					/*'options' => array(
					    'wpautop' => true, // use wpautop?
					    'media_buttons' => FALSE, // show insert/upload button(s)
					    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
					    'textarea_rows' => get_option('default_post_edit_rows', 5), // rows="..."
					    'tabindex' => '',
					    'editor_css' => '', // intended for extra types for both visual and HTML editors buttons, needs to include the <type> tags, can use "scoped".
					    'editor_class' => '', // add extra class(es) to the editor textarea
					    'teeny' => false, // output the minimal editor config used in Press This
					    'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
					    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
					    'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()	
					),*/
				);
		return $array;
	}
	function download_file_field_creator($language_code, $i){
		global $q_config;
		$array = array(
				'name' => 'File '. ($i + 1),
				'desc' => '',
				'id' => 'download_file_'. $i . '_' . $language_code,
				'type' => 'file',
				'save_id' => true,
				//'allow' => array( 'attachment', 'url' )
			);
		return $array;
	}
	function download_title_field_creator($language_code, $i){
		global $q_config;
		$array = array(
				'name' => 'Title '. ($i + 1),
				'desc' => '',
				'id' => 'download_title_'. $i . '_' . $language_code,
				'type' => 'text'
			);
		return $array;
	}

// INITIALIZED EXTERNAL LIBS
/**
* Initialize the metabox class.
*/
	add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
	function cmb_initialize_cmb_meta_boxes() {
		if ( ! class_exists( 'cmb_Meta_Box' ) )
			require_once 'lib/metabox/init.php';
	}


// HELPERS
/**
* print_pre
* Prints Recursive (print_r) the content wrapped in <pre> tags
* @param $content - content to be printend
*/
	function print_pre( $content ){
		echo '<pre>';
		print_r( $content );
		echo '</pre>';
	}


/**
* display_vimeo_video
* @param $id - video id
* @param $width - video width
* @param $height - video height
*/
	function display_vimeo_video( $id, $width, $height ){
		?>
		<iframe src="http://player.vimeo.com/video/<?php echo $id;?>" width="<?php echo $width;?>" height="<?php echo $height;?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		<?php
	}
/**
* display_facebook_like
* @param $url - url to like
* @param $app_id - facebook app id
*/
	function display_facebook_like( $url, $app_id ) {
		$url = urlencode($url);
		?>
			<iframe src="//www.facebook.com/plugins/like.php?<?php echo ($url) ? 'href='.$url : '';?>&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21<?php echo ($app_id) ? '&amp;appId=' . $app_id : '';?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width: 90px; height:21px;" allowTransparency="true"></iframe>
		<?php
	}


/**
* Hide admin bar
*/
	show_admin_bar(false);
/**
* Remove unwanted wordpress head tags
*/
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');

// PLUGIN CONFIG
/**
* Make sure q_translate will provide the correct permalink when calling get_permalink
*/
	add_filter('post_type_link','qtrans_convertURL');

/**
* Redirect to exhibition page when on maintence mode
*/
/*	function maintece_mode_redirect() {
	    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=http://brazilianfurnituredesign.com/exhibition/en">';
	    exit();
	}
	add_action( 'wm_head', 'maintece_mode_redirect' );*/


// CUSTOM IMAGE SIZES --------------------------------------------------------------
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'slideshow', 864, 484, true ); 
	add_image_size( 'side', 532, 298, true );
	add_image_size( 'tb', 211, 118, true );
	add_image_size( 'mini', 105, 59, true );
}

// SETTINGS
/**
* Options
*/
	add_action('admin_init', 'settings_init' );
	add_action('admin_menu', 'settings_add_options_page');
	// Init plugin options to white list our options
	function settings_init(){
		register_setting( 'settings_plugin_options', 'settings_options', 'settings_validate_options' );
	}
	// Add menu page
	function settings_add_options_page() {
		add_options_page('Options Page', 'Options', 'manage_options', __FILE__, 'settings_render_form');
	}
	// Render the Plugin options form
	function settings_render_form() {
		global $q_config;
		?>
		<div class="wrap">		
			<!-- Display Plugin Icon, Header, and Description -->
			<div class="icon32" id="icon-options-general"><br></div>
			<h2>Options</h2>
			<!-- Beginning of the Plugin Options Form -->
			<form method="post" action="options.php">
				<?php settings_fields('settings_plugin_options'); ?>
				<?php $options = get_option('settings_options'); ?>
				<table class="form-table">
					<!-- SEO -->
					<h2>SEO</h2>
					<h3>Site Title</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[site_title_<?php echo $language_code;?>]" value="<?php echo $options['site_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Site Meta Description</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<textarea  rows="3" cols="57" name="settings_options[site_meta_description_<?php echo $language_code;?>]"><?php echo $options['site_meta_description_'.$language_code]; ?></textarea>
						<br>
					<?php endforeach;?>

					<br>
					<hr>

					<!-- Exhibition Details -->
					<h2>Exhibition Details</h2>
					<h3>Date</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[exhibition_date_<?php echo $language_code;?>]" value="<?php echo $options['exhibition_date_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Address</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<textarea  rows="3" cols="57" name="settings_options[exhibition_address_<?php echo $language_code;?>]"><?php echo $options['exhibition_address_'.$language_code]; ?></textarea>
						<br>
					<?php endforeach;?>

					<br>
					<hr>

					<!-- Internal Titles -->
					<h2>Internal Titles</h2>
					<h3>Home</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[home_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['home_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>About</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[about_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['about_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Designers</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[designers_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['designers_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Products</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[products_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['products_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Events</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[events_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['events_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Press</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[press_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['press_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>News</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[news_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['news_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Download</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[download_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['download_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Sponsors</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[sponsors_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['sponsors_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Mailing</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[mailing_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['mailing_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Organizers</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[organizers_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['organizers_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Product Search</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[product_search_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['product_search_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Copyright</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="57" name="settings_options[copyright_internal_title_<?php echo $language_code;?>]" value="<?php echo $options['copyright_internal_title_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<br>
					<hr>

					<!-- Menu Items -->
					<h2>Menu Items</h2>
					<h3>About ID</h3>
					<input type="text" size="5" name="settings_options[menu_item_about_id]" value="<?php echo $options['menu_item_about_id']; ?>" />

					<h3>Press ID</h3>
					<input type="text" size="5" name="settings_options[menu_item_press_id]" value="<?php echo $options['menu_item_press_id']; ?>" />

					<h3>Footer 1 ID</h3>
					<input type="text" size="5" name="settings_options[menu_item_footer_1_id]" value="<?php echo $options['menu_item_footer_1_id']; ?>" />

					<h3>Footer 2 ID</h3>
					<input type="text" size="5" name="settings_options[menu_item_footer_2_id]" value="<?php echo $options['menu_item_footer_2_id']; ?>" />

					<h3>Footer 3 ID</h3>
					<input type="text" size="5" name="settings_options[menu_item_footer_3_id]" value="<?php echo $options['menu_item_footer_3_id']; ?>" />

					<h3>Footer 4 ID</h3>
					<input type="text" size="5" name="settings_options[menu_item_footer_4_id]" value="<?php echo $options['menu_item_footer_4_id']; ?>" />


					<br>
					<hr>

					<!-- Other -->
					<h2>Other</h2>
					<h3>Video Vimeo ID</h3>
					<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
						<span><?php echo $q_config['language_name'][$language_code];?></span><br>
						<input type="text" size="10" name="settings_options[video_vimeo_id_<?php echo $language_code;?>]" value="<?php echo $options['video_vimeo_id_'.$language_code]; ?>" />
						<br>
					<?php endforeach;?>

					<h3>Twitter News Search Term</h3>
					<input type="text" size="40" name="settings_options[twitter_search_term]" value="<?php echo $options['twitter_search_term']; ?>" />
					<br>
					
					<h3>Facebook App ID</h3>
					<input type="text" size="40" name="settings_options[facebook_app_id]" value="<?php echo $options['facebook_app_id']; ?>" />
					<br>

					<h3>Facebook Admins</h3>
					<input type="text" size="40" name="settings_options[facebook_admins]" value="<?php echo $options['facebook_admins']; ?>" />
					<br>

					<h3>Facebook Like URL</h3>
					<input type="text" size="40" name="settings_options[facebook_like_url]" value="<?php echo $options['facebook_like_url']; ?>" />
					<br>

					<h3>Vanishing Points Website</h3>
					<input type="text" size="40" name="settings_options[vanishing_points_url]" value="<?php echo $options['vanishing_points_url']; ?>" />
					<br>

					<h3>Mailing URL</h3>
					<input type="text" size="40" name="settings_options[mailing_url]" value="<?php echo $options['mailing_url']; ?>" />
					<br>

					<h3>Zeitlos Website</h3>
					<input type="text" size="40" name="settings_options[zeitlos_url]" value="<?php echo $options['zeitlos_url']; ?>" />
					<br>

					<h3>Google Analytics Tracker</h3>
					<input type="text" size="40" name="settings_options[google_analytics_tracker]" value="<?php echo $options['google_analytics_tracker']; ?>" />
					<br>

					<h3>Maintenece Mode</h3>
					<input type="text" size="40" name="settings_options[maintenece_mode]" value="<?php echo $options['maintenece_mode']; ?>" />
					<br>


					<br>
					<hr>
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
				</p>
			</form>
		</div>
		<?php	
	}
	// Sanitize and validate input. Accepts an array, return a sanitized array.
	function settings_validate_options($input) {
		 // strip html from textboxes
		$input['textcategory_one'] =  wp_filter_nohtml_kses($input['textcategory_one']); // Sanitize textcategory input (strip html tags, and escape characters)
		$input['txt_one'] =  wp_filter_nohtml_kses($input['txt_one']); // Sanitize textbox input (strip html tags, and escape characters)
		return $input;
	}
	add_filter( 'plugin_action_links', 'settings_plugin_action_links', 10, 2 );
	// Display a Settings link on the main Plugins page
	function settings_plugin_action_links( $links, $file ) {
		if ( $file == plugin_basename( __FILE__ ) ) {
			$settings_links = '<a href="'.get_admin_url().'options-general.php?page=plugin-options-starter-kit/plugin-options-starter-kit.php">'.__('Settings').'</a>';
			// make the 'Settings' link appear first
			array_unshift( $links, $settings_links );
		}
		return $links;
	}


/**
* Hack to fix problem with qtranslate removing tags from the editor.
* Note there is also a fix on the wp-content/plugins/qtranslate/qtranslate_wphacks.php 
* More info: http://www.teslina.com/748/wordpress/qtranslate-code-syntax-bugfix/#comment-6
*/

// Remove WordPress Auto P
remove_filter( 'the_content', 'wpautop' );

// function aus advanced tinymce plugin
if ( ! function_exists('tmce_replace') ) {
        function tmce_replace() {
                $tadv_options = get_option('tadv_options', array());
                $tadv_plugins = get_option('tadv_plugins', array());

?>
<script type="text/javascript">
if ( typeof(jQuery) != 'undefined' ) {
  jQuery('body').bind('afterPreWpautop', function(e, o){
    o.data = o.unfiltered
    .replace(/caption\]\ +?<\/object>/g, function(a) {
      return a.replace(/[\r\n]+/g, ' ');
    });
  }).bind('afterWpautop', function(e, o){
    o.data = o.unfiltered;
  });
}
</script>
<?php
        }
        add_action( 'after_wp_tiny_mce', 'tmce_replace' );
}
// eof advanced tinymce plugin

// http://tinymce.moxiecode.com/wiki.php/Configuration
function teslina_tinymce_config( $init ) {

// Change code cleanup/content filtering config

    // Don't remove line breaks
    $init['remove_linebreaks'] = false;
    // Convert newline characters to BR tags
    //$init['convert_newlines_to_brs'] = true;
    //$init['force_br_newlines '] = true;

    // With this option set to false, the line breaks are stripped from the HTML source.
    $init['apply_source_formatting'] = true;
    // Preserve tab/space whitespace
    $init['preformatted'] = true;
    // Do not remove redundant BR tags
    $init['remove_redundant_brs'] = false;

    return $init;
}
add_filter('tiny_mce_before_init', 'teslina_tinymce_config');

?>