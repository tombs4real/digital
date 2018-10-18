<?php
/**
 * Digital functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package umctheme2-child-digital
 */

/**
 * Enqueue scripts and styles.
 */
function digital_scripts() {

 // Styles
 // // Enqueue Custom Stylesheet
 // wp_enqueue_style( 'custom-style', get_stylesheet_uri() );

 // Scripts
 // Youtube Embed API Script
 wp_enqueue_script('ytapi','https://www.youtube.com/iframe_api', array(), '', true);
 // GSAP TimeLine Script
 wp_enqueue_script('gsap', get_stylesheet_directory_uri() . '/js/TweenMax.min.js', array(),'', true);
 // Enqueue Custom Script
 wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), true);

 // if(is_page('home-page')){
 //   add_action('wp_enqueue_scripts', 'custom');
 // }

 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
   wp_enqueue_script( 'comment-reply' );
 }
}
add_action( 'wp_enqueue_scripts', 'digital_scripts' );

// Allow SVG Upload
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
// Media Grid Thumbnail Fix for SVGs
function svg_meta_data($data, $id){

    $attachment = get_post($id); // Filter makes sure that the post is an attachment
    $mime_type = $attachment->post_mime_type; // The attachment mime_type

    //If the attachment is an svg

    if($mime_type == 'image/svg+xml'){

        //If the svg metadata are empty or the width is empty or the height is empty
        //then get the attributes from xml.

        if(empty($data) || empty($data['width']) || empty($data['height'])){

            $xml = simplexml_load_file(wp_get_attachment_url($id));
            $attr = $xml->attributes();
            $viewbox = explode(' ', $attr->viewBox);
            $data['width'] = isset($attr->width) && preg_match('/\d+/', $attr->width, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[2] : null);
            $data['height'] = isset($attr->height) && preg_match('/\d+/', $attr->height, $value) ? (int) $value[0] : (count($viewbox) == 4 ? (int) $viewbox[3] : null);
        }

    }

    return $data;

}

add_filter('wp_update_attachment_metadata', 'svg_meta_data', 10, 2);


// Custom post types
function create_posttype() {
    // Work/Projects
    register_post_type( 'work',
        array(
            'labels' => array(
                'name'               => __( 'Work' ),
                'singular_name'      => __( 'Project' ),
                'add_new'            => __( 'Add New Project' ),
                'add_new_item'       => __( 'Add New Project' ),
                'edit_item'          => __( 'Edit Project' ),
                'new_item'           => __( 'New Project' ),
                'all_items'          => __( 'All Projects' ),
                'view_item'          => __( 'View Project' ),
                'search_items'       => __( 'Search Projects' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'work'),
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'menu_position' => 5
        )
    );
    // Resources
    register_post_type( 'resources',
        array(
            'labels' => array(
                'name'               => __( 'Resources' ),
                'singular_name'      => __( 'Resource' ),
                'add_new'            => __( 'Add New Resource' ),
                'add_new_item'       => __( 'Add New Resource' ),
                'edit_item'          => __( 'Edit Resource' ),
                'new_item'           => __( 'New Resource' ),
                'all_items'          => __( 'All Resources' ),
                'view_item'          => __( 'View Resource' ),
                'search_items'       => __( 'Search Resources' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'resources'),
            'supports' => array( 'title', 'excerpt', 'editor', 'thumbnail' ),
            'taxonomies'  => array( 'category' ),
            'menu_icon' => 'dashicons-feedback',
            'menu_position' => 5
        )
    );
    // Services
    register_post_type( 'services',
        array(
            'labels' => array(
                'name'               => __( 'Services' ),
                'singular_name'      => __( 'Service' ),
                'add_new'            => __( 'Add New Service' ),
                'add_new_item'       => __( 'Add New Service' ),
                'edit_item'          => __( 'Edit Service' ),
                'new_item'           => __( 'New Service' ),
                'all_items'          => __( 'All Services' ),
                'view_item'          => __( 'View Services' ),
                'search_items'       => __( 'Search Services' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies'  => array( 'category' ),
            'menu_icon' => 'dashicons-thumbs-up',
            'menu_position' => 5
        )
    );
    // Team
    register_post_type( 'team',
        array(
            'labels' => array(
                'name'               => __( 'Team' ),
                'singular_name'      => __( 'Team Member' ),
                'add_new'            => __( 'Add New Team Member' ),
                'add_new_item'       => __( 'Add New Team Member' ),
                'edit_item'          => __( 'Edit Team Member' ),
                'new_item'           => __( 'New Team Member' ),
                'all_items'          => __( 'All Team Members' ),
                'view_item'          => __( 'View Team Member' ),
                'search_items'       => __( 'Search Team Members' ),
                'featured_image' => __( 'Headshot' ),
        				'set_featured_image' => __( 'Set Headshot' ),
        				'remove_featured_image' => __( 'Remove Headshot' ),
        				'use_featured_image' => __( 'Use as Headshot' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon' => 'dashicons-businessman',
            'menu_position' => 5
        )
    );
}
add_action( 'init', 'create_posttype' );


add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function your_prefix_register_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'team_fields_';
	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'team',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'Team Member Details', 'team_fields' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'team' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'side',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'low',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(
			// Postion
			array(
				'name'  => __( 'Position', 'team_fields' ),
				'id'    => "{$prefix}position",
				'desc'  => __( 'Director, Assistant Director, Assistant to the Director etc...', 'team_fields' ),
				'type'  => 'text',
				'std'   => __( '', 'team_fields' )
			),
      // Email Address
			array(
				'name'  => __( 'Email Address', 'team_fields' ),
				'id'    => "{$prefix}email",
				'type'  => 'text',
				'std'   => __( '', 'team_fields' )
			),
      // Phone Number
			array(
				'name'  => __( 'Phone Number', 'team_fields' ),
				'id'    => "{$prefix}phone",
				'type'  => 'text',
				'std'   => __( '', 'team_fields' )
			),
			// Is a Badass?
			array(
				'name' => __( 'Is a Badass?', 'team_fields' ),
				'id'   => "{$prefix}checkbox",
				'type' => 'checkbox',
				'std'  => 1,
			),
		),
		'validation' => array(
			'rules'    => array(
				"{$prefix}position" => array(
					'required'  => true,
					'minlength' => 2,
				),
			)
		)
	);
  // end 1st meta box
  // 2nd meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'resources',
		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'Resource Icon', 'resource_fields' ),
		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'resources' ),
		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'side',
		// Order of meta box: high (default), low. Optional.
		'priority'   => 'low',
		// Auto save: true, false (default). Optional.
		'autosave'   => true,
		// List of meta fields
		'fields'     => array(
      // FILE ADVANCED (WP 3.5+)
			array(
				'name'             => __( 'Set Icon Image', 'your-prefix' ),
				'id'               => "{$prefix}resource_icon",
				'type'             => 'file_advanced',
				'max_file_uploads' => 1,
				'mime_type'        => '', // Leave blank for all file types
			),
		),

	);
  // end 2nd meta box
	return $meta_boxes;
}

//Dequeue Styles
function dequeue_unnecessary_styles() {
    wp_dequeue_style( 'umctheme2-flexslider-style' );
        wp_deregister_style( 'umctheme2-flexslider-style' );
}
add_action( 'wp_print_styles', 'dequeue_unnecessary_styles' );

//Dequeue Scripts
function dequeue_unnecessary_scripts() {
    wp_dequeue_script( 'umctheme2-flexslider' );
        wp_deregister_script( 'umctheme2-flexslider' );
}
add_action( 'wp_print_scripts', 'dequeue_unnecessary_scripts' );



?>
