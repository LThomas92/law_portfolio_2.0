<?php
/**
 * Theme Functions
 */

function sde_2020_scripts() {
	// wp_enqueue_style( 'sde_2020-style', get_stylesheet_uri() );

	$manifest = json_decode(file_get_contents('dist/assets.json', true));
	$main = $manifest->main;

	wp_enqueue_style( 'sde_2020-style', get_template_directory_uri() . $main->css, false, null );

	wp_enqueue_script('sde_2020-js', get_template_directory_uri() . $main->js, ['jquery'], null, true);


	wp_enqueue_script( 'sde_2020-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sde_2020-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sde_2020_scripts' );
    

//POST THUMBNAIL FUNCTION 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

//ADD WP NAV MENU

function custom_post_type() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Projects', 'Post Type General Name' ),
			'singular_name'       => _x( 'Project', 'Post Type Singular Name'),
			'menu_name'           => __( 'Projects'),
			'parent_item_colon'   => __( 'Parent Project'),
			'all_items'           => __( 'All Projects' ),
			'view_item'           => __( 'View Project' ),
			'add_new_item'        => __( 'Add New Project' ),
			'add_new'             => __( 'Add New' ),
			'edit_item'           => __( 'Edit Project' ),
			'update_item'         => __( 'Update Project' ),
			'search_items'        => __( 'Search Project' ),
			'not_found'           => __( 'Not Found' ),
			'not_found_in_trash'  => __( 'Not found in Trash' ),
		);

	// Set other options for Custom Post Type

		$args = array(
			'label'               => __( 'projects'),
			'description'         => __( 'Projects'),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'category', 'post_tag' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,

		);

		// Registering your Custom Post Type
		register_post_type( 'projects', $args );
	}

	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not
	* unnecessarily executed.
	*/

	add_action( 'init', 'custom_post_type', 0 );


add_filter('term_links-post_tag','limit_to_five_tags');
function limit_to_five_tags($terms) {
return array_slice($terms,0,5,true);
}

