<?php
 // Register Custom Post Type
function pod_post_type() {

	$labels = array(
		'name'                  => _x( 'Pods', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Pod', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Pods', 'text_domain' ),
		'name_admin_bar'        => __( 'Pods', 'text_domain' ),
		'archives'              => __( 'Pod Archives', 'text_domain' ),
		'attributes'            => __( 'Pod Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Pod:', 'text_domain' ),
		'all_items'             => __( 'All Pods', 'text_domain' ),
		'add_new_item'          => __( 'Add New Pod', 'text_domain' ),
		'add_new'               => __( 'Add New Pod', 'text_domain' ),
		'new_item'              => __( 'New Pod', 'text_domain' ),
		'edit_item'             => __( 'Edit Pod', 'text_domain' ),
		'update_item'           => __( 'Update Pod', 'text_domain' ),
		'view_item'             => __( 'View Pod', 'text_domain' ),
		'view_items'            => __( 'View Pods', 'text_domain' ),
		'search_items'          => __( 'Search Pod', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into pod', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this pod', 'text_domain' ),
		'items_list'            => __( 'Pod list', 'text_domain' ),
		'items_list_navigation' => __( 'Pod list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter pod list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Pod', 'text_domain' ),
		'description'           => __( 'Content for each pod', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', ),
		'taxonomies'            => array( 'my_pod' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-site',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'pod', $args );

}
add_action( 'init', 'pod_post_type', 0 );
?>
