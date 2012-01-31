<?php 

// CUSTOM POST TYPES
/**
* @category Info
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
* @category Style
*/
	add_action( 'init', 'register_cpt_style' );
	function register_cpt_style() {
		$labels = array( 
			'name' => _x( 'Styles', 'style' ),
			'singular_name' => _x( 'Style', 'style' ),
			'add_new' => _x( 'Add New', 'style' ),
			'add_new_item' => _x( 'Add New Style', 'style' ),
			'edit_item' => _x( 'Edit Style', 'style' ),
			'new_item' => _x( 'New Style', 'style' ),
			'view_item' => _x( 'View Style', 'style' ),
			'search_items' => _x( 'Search Styles', 'style' ),
			'not_found' => _x( 'No styles found', 'style' ),
			'not_found_in_trash' => _x( 'No styles found in Trash', 'style' ),
			'parent_item_colon' => _x( 'Parent Style:', 'style' ),
			'menu_name' => _x( 'Styles', 'style' ),
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
			'rewrite' => false,
			'capability_type' => 'post'
		);
		register_post_type( 'style', $args );
		global $wp_rewrite;
		$wp_rewrite->add_rewrite_tag("%style%", '([^/]+)', "style=");
		$wp_rewrite->add_permastruct('style', '%style%', false);
	}

	/**
	 * Remove metaboxes
	 */
	function style_remove_meta_box_handler (){
		remove_meta_box('pageparentdiv', 'style', 'normal');
		remove_meta_box('commentstatusdiv', 'style', 'normal');
		remove_meta_box('commentsdiv', 'style', 'normal');
		remove_meta_box('authordiv', 'style', 'normal');
		remove_meta_box('postcustom', 'style', 'normal');
		remove_meta_box('postexcerpt', 'style', 'normal');
		remove_meta_box('trackbacksdiv', 'style', 'normal');
		remove_meta_box('postimagediv', 'style', 'normal');
		remove_meta_box('formatdiv', 'style', 'normal');
		remove_meta_box('categorydiv', 'style', 'normal');
	}
	add_action('admin_menu', 'style_remove_meta_box_handler');
/**
* @category Designer
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
		add_meta_box('designer-parent', 'Style', 'designer_parent_meta_box', 'designer', 'normal', 'high');
	}
	function designer_parent_meta_box($post) {
		post_custom_parent_meta_box( $post, 'style' );
	}
	add_action('add_meta_boxes', 'designer_add_meta_box_handler');
/**
* @category Category
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
			'rewrite' => false,
			'capability_type' => 'post'
		);
		register_post_type( 'category', $args );
		global $wp_rewrite;
		$wp_rewrite->add_rewrite_tag("%category%", '([^/]+)', "category=");
		$wp_rewrite->add_permastruct('category', '%category%', false);
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
* @category Product
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

		$prefix = '_cmb_';
				
		$fields = array();

		// Designed by
		$fields[] = array(
			'name' => 'Designed by',
			'desc' => 'The name of the designer who did this product',
			'id'   => 'text_signature_'.$language_code,
			'type' => 'select',
			'options' => generate_product_designed_by_list(),
		);
		//foreach ($q_config['enabled_languages'] as $language_code ) {
			// Signature field
			//$fields[] = text_signature_field_creator( $language_code );
		//}
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

			$designer_posts = get_posts ( array( 'post_type' => 'designer' ) );
			foreach ($designer_posts as $designer_post){
				$array[] = array( 
					'name' => get_the_title($designer_post->ID), 
					'value' => $designer_post->ID
				);
			}
			
			return $array;
		}
/**
* @category Event
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
			$posts = get_posts ( array( 'post_type' => $type ) );
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
			'name' => 'Main Text',
			'desc' => '',
			'type' => 'title',
			'id' => 'main_text_title'
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
			$fields[] = extra_text_1_title_field_creator( $language_code );
			$fields[] = extra_text_1_field_creator( $language_code );
		}
		$meta_boxes[] = array(
			'id'         => 'information',
			'title'      => 'Information',
			'pages'      => array( 'info', 'style', 'designer', 'category', 'product', 'event' ),
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
					'type' => 'wysiwyg',
					'options' => array(
					    'wpautop' => true, // use wpautop?
					    'media_buttons' => FALSE, // show insert/upload button(s)
					    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
					    'textarea_rows' => get_option('default_post_edit_rows', 5), // rows="..."
					    'tabindex' => '',
					    'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
					    'editor_class' => '', // add extra class(es) to the editor textarea
					    'teeny' => false, // output the minimal editor config used in Press This
					    'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
					    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
					    'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()	
					),
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
					'type' => 'wysiwyg',
					'options' => array(
					    'wpautop' => true, // use wpautop?
					    'media_buttons' => FALSE, // show insert/upload button(s)
					    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
					    'textarea_rows' => get_option('default_post_edit_rows', 5), // rows="..."
					    'tabindex' => '',
					    'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
					    'editor_class' => '', // add extra class(es) to the editor textarea
					    'teeny' => false, // output the minimal editor config used in Press This
					    'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
					    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
					    'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()	
					),
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
* Hide admin bar
*/
show_admin_bar(false);

/**
* Redirect to exhibition page when on maintence mode
*/
function maintece_mode_redirect() {
    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=http://wordpress.dev/exhibition/en">';
    exit();
}
add_action( 'wm_head', 'maintece_mode_redirect' );


// CUSTOM IMAGE SIZES --------------------------------------------------------------
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'thumbnail', 350, 196, true ); //(cropped)
	add_image_size( 'gallery-image', 750, 9999 ); //(unlimited height)
}


// Customize media upload tabs --------------------------------------------------
/*add_filter( 'media_upload_tabs', 'custom_media_upload_tabs');
add_filter( 'media_upload_default_tab', 'custom_media_upload_default_tab');
function custom_media_upload_tabs($arr_tabs) {
	if ( (isset($_GET["simple_fields_action"]) || isset($_GET["simple_fields_action"]) ) && ($_GET["simple_fields_action"] == "select_file" || $_GET["simple_fields_action"] == "select_file_for_tiny") ) {
		unset($arr_tabs["type"], $arr_tabs["gallery"], $arr_tabs["type_url"]);
	return $arr_tabs;
	}
}
function custom_media_upload_default_tab($tab) {
	$tab = 'library';
	return $tab;
}*/
// OPTIONS -------------------------------------------------------------------------------
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
				<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
					<span><?php echo $q_config['language_name'][$language_code];?></span><br>
					<input type="text" size="5" name="settings_options[menu_item_about_id_<?php echo $language_code;?>]" value="<?php echo $options['menu_item_about_id_'.$language_code]; ?>" />
					<br>
				<?php endforeach;?>

				<h3>Press ID</h3>
				<?php foreach ($q_config['enabled_languages'] as $language_code ):?>
					<span><?php echo $q_config['language_name'][$language_code];?></span><br>
					<input type="text" size="5" name="settings_options[menu_item_press_id_<?php echo $language_code;?>]" value="<?php echo $options['menu_item_about_id_'.$language_code]; ?>" />
					<br>
				<?php endforeach;?>

				<br>
				<hr>

				<!-- Other -->
				<h2>Other</h2>
				<h3>Video Vimeo ID</h3>
				<input type="text" size="10" name="settings_options[video_vimeo_id]" value="<?php echo $options['video_vimeo_id']; ?>" />
				<br>

				<h3>Twitter user</h3>
				<input type="text" size="40" name="settings_options[twitter_user]" value="<?php echo $options['twitter_user']; ?>" />
				<br>
				
				<h3>Facebook page</h3>
				<input type="text" size="40" name="settings_options[facebook_page_url]" value="<?php echo $options['facebook_page_url']; ?>" />
				<br>

				<h3>Vanishing Points Website</h3>
				<input type="text" size="40" name="settings_options[vanishing_points_url]" value="<?php echo $options['vanishing_points_url']; ?>" />
				<br>

				<h3>Zeitlos Website</h3>
				<input type="text" size="40" name="settings_options[zeitlos_url]" value="<?php echo $options['zeitlos_url']; ?>" />
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

?>