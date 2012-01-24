<?php 

// CUSTOM POST TYPES
/**
* @category Text
*/
	add_action( 'init', 'register_cpt_text' );
	function register_cpt_text() {
		$labels = array( 
			'name' => _x( 'Texts', 'text' ),
			'singular_name' => _x( 'Text', 'text' ),
			'add_new' => _x( 'Add New', 'text' ),
			'add_new_item' => _x( 'Add New Text', 'text' ),
			'edit_item' => _x( 'Edit Text', 'text' ),
			'new_item' => _x( 'New Text', 'text' ),
			'view_item' => _x( 'View Text', 'text' ),
			'search_items' => _x( 'Search Texts', 'text' ),
			'not_found' => _x( 'No texts found', 'text' ),
			'not_found_in_trash' => _x( 'No texts found in Trash', 'text' ),
			'parent_item_colon' => _x( 'Parent Text:', 'text' ),
			'menu_name' => _x( 'Texts', 'text' ),
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
		register_post_type( 'text', $args );
	}

	/**
	 * Remove metaboxes
	 */
	function text_remove_meta_box_handler (){
		remove_meta_box('pageparentdiv', 'text', 'normal');
		remove_meta_box('commentstatusdiv', 'text', 'normal');
		remove_meta_box('commentsdiv', 'text', 'normal');
		remove_meta_box('authordiv', 'text', 'normal');
		remove_meta_box('postcustom', 'text', 'normal');
		remove_meta_box('postexcerpt', 'text', 'normal');
		remove_meta_box('trackbacksdiv', 'text', 'normal');
		remove_meta_box('postimagediv', 'text', 'normal');
		remove_meta_box('formatdiv', 'text', 'normal');
		remove_meta_box('categorydiv', 'text', 'normal');
	}
	add_action('admin_menu', 'text_remove_meta_box_handler');
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
			'parent_item_colon' => _x( 'Parent Circulo:', 'designer' ),
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
		add_meta_box('designer-parent', 'Designer Style', 'designer_parent_meta_box', 'designer', 'side', 'high');
	}
	function designer_parent_meta_box($post) {
		post_custom_parent_meta_box( $post, 'style', 'designer Style' );
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
			'parent_item_colon' => _x( 'Parent Category:', 'category' ),
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
			'parent_item_colon' => _x( 'Parent Circulo:', 'product' ),
			'menu_name' => _x( 'Products', 'product' ),
		);
		$args = array( 
			'labels' => $labels,
			'hierarchical' => true,
			
			'supports' => array( 'title', 'post-formats' ),
			
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
		add_meta_box('product-parent', 'Product Category', 'product_parent_meta_box', 'product', 'side', 'high');
	}
	function product_parent_meta_box($post) {
		post_custom_parent_meta_box( $post, 'category', 'Product Category' );
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
			'parent_item_colon' => _x( 'Parent Circulo:', 'event' ),
			'menu_name' => _x( 'Events', 'event' ),
		);
		$args = array( 
			'labels' => $labels,
			'hierarchical' => true,
			
			'supports' => array( 'title', 'post-formats' ),
			
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
* @param string $type_name - Will be the title of the metabox
*/
	function post_custom_parent_meta_box($post, $type, $type_name) {
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
* Text siganture
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
		foreach ($q_config['enabled_languages'] as $language_code ) {
			// Signature field
			$fields[] = text_signature_field_creator( $language_code );
		}
		$meta_boxes[] = array(
			'id'         => 'text_signature',
			'title'      => 'Text Siganture',
			'pages'      => array( 'text', 'style', 'designer', 'category', 'product', 'event' ),
			'context'    => 'normal',
			'priority'   => 'high',
			'show_names' => true,
			'fields'     => $fields,
		);


		return $meta_boxes;
	}
	function text_signature_field_creator($language_code){
		global $q_config;
		$array = array(
					'name' => 'Text Signature ('.$q_config['language_name'][$language_code].')',
					'desc' => 'The closing signature at the end of a text.',
					'id'   => 'text_signature_'.$language_code,
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








// CUSTOM IMAGE SIZES --------------------------------------------------------------
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'thumbnail', 350, 196, true ); //(cropped)
	add_image_size( 'gallery-image', 750, 9999 ); //(unlimited height)
}


// Customize media upload tabs --------------------------------------------------
add_filter( 'media_upload_tabs', 'custom_media_upload_tabs');
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
}
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
	?>
	<div class="wrap">		
		<!-- Display Plugin Icon, Header, and Description -->
		<div class="icon32" id="icon-options-general"><br></div>
		<h2>Options</h2>
		<!-- Beginning of the Plugin Options Form -->
		<form method="post" action="options.php">
			<?php settings_fields('settings_plugin_options'); ?>
			<?php $options = get_option('settings_options'); ?>
			<!-- Table Structure Containing Form Controls -->
			<!-- Each Plugin Option Defined on a New Table Row -->
			<table class="form-table">
				<!-- Textbox Control -->
				<tr>
					<th scope="row">Título do Site</th>
					<td>
						<input type="text" size="57" name="settings_options[site_title]" value="<?php echo $options['site_title']; ?>" />
					</td>
				</tr>				
				<!-- Textbox Control -->
				<tr>
					<th scope="row">Tagline</th>
					<td>
						<input type="text" size="57" name="settings_options[tagline]" value="<?php echo $options['tagline']; ?>" />
					</td>
				</tr>
				<!-- Text Style Control -->
				<tr>
					<th scope="row">Meta Descrição</th>
					<td>
						<textcategory name="settings_options[description]" rows="3" cols="50" type='textcategory'><?php echo $options['description']; ?></textcategory>
						<br />
						<span category="color:#666666;margin-left:2px;">Aparecerá abaixo da logo e também na meta-description da home.<br />Use palavras chave pois este conteúdo é muito relevante para SEO.</span>
					</td>
				</tr>				
				<!-- Text Style Control -->
				<tr>
					<th scope="row">Introdução</th>
					<td>
						<textcategory name="settings_options[intro]" rows="7" cols="50" type='textcategory'><?php echo $options['intro']; ?></textcategory>
						<br />
						<span category="color:#666666;margin-left:2px;">Aparecerá abaixo das áreas de atuação na home.</span>
					</td>
				</tr>
				<!-- Textbox Control -->
				<tr>
					<th scope="row">Label dos Clientes</th>
					<td>
						<input type="text" size="57" name="settings_options[clients_label]" value="<?php echo $options['clients_label']; ?>" />
						<br />
						<span category="color:#666666;margin-left:2px;">Exemplo: "Alguns de nossos clientes:"</span>
					</td>
				</tr>
				<!-- Textbox Control -->
				<tr>
					<th scope="row">Logos dos Clientes (ID da image)</th>
					<td>
						<input type="text" size="10" name="settings_options[clients_logos]" value="<?php echo $options['clients_logos']; ?>" />
						<br />
						<span category="color:#666666;margin-left:2px;">Para encontrar a ID, abra a imagem na "Media Library" e olhe a URL,<br />a ID esterá incluída lá como "attachment_id".<br />Exemplo(a ID é 16): www.hibrido.cc/wp-admin/media.php?attachment_id=16&action=edit</span>
					</td>
				</tr>
				<!-- Textbox Control -->
				<tr>
					<th scope="row">Contatos</th>
					<td>
						<textcategory name="settings_options[contacts]" rows="2" cols="50" type='textcategory'><?php echo $options['contacts']; ?></textcategory>
						<br />
						<span category="color:#666666;margin-left:2px;">Não se esqueça de utilizar a tag <?php echo htmlentities('<br />');?> para quebrar a linha.</span>
					</td>
				</tr>				
				<!-- Textbox Control -->
				<tr>
					<th scope="row">Endereço do Blog</th>
					<td>
						<input type="text" size="57" name="settings_options[blog]" value="<?php echo $options['blog']; ?>" />
					</td>
				</tr>
				<!-- Textbox Control -->
				<tr>
					<th scope="row">Página no Facebook</th>
					<td>
						<input type="text" size="57" name="settings_options[facebook]" value="<?php echo $options['facebook']; ?>" />
					</td>
				</tr>
				<!-- Textbox Control -->
				<tr>
					<th scope="row">Página no Twitter</th>
					<td>
						<input type="text" size="57" name="settings_options[twitter]" value="<?php echo $options['twitter']; ?>" />
					</td>
				</tr>
				<!-- Textbox Control -->
				<tr>
					<th scope="row">Google Analytics Track ID</th>
					<td>
						<input type="text" size="57" name="settings_options[analytics]" value="<?php echo $options['analytics']; ?>" />
					</td>
				</tr>
			</table>
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