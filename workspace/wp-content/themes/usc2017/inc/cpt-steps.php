<?php
// Register Custom Post Type
function step_post_type() {

	$labels = array(
		'name'                  => _x( 'Steps', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Step', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Steps', 'text_domain' ),
		'name_admin_bar'        => __( 'Step', 'text_domain' ),
		'archives'              => __( 'Step Archives', 'text_domain' ),
		'attributes'            => __( 'Step Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Step:', 'text_domain' ),
		'all_items'             => __( 'All Steps', 'text_domain' ),
		'add_new_item'          => __( 'Add New Step', 'text_domain' ),
		'add_new'               => __( 'Add New Step', 'text_domain' ),
		'new_item'              => __( 'New Step', 'text_domain' ),
		'edit_item'             => __( 'Edit Step', 'text_domain' ),
		'update_item'           => __( 'Update Step', 'text_domain' ),
		'view_item'             => __( 'View Step', 'text_domain' ),
		'view_items'            => __( 'View Steps', 'text_domain' ),
		'search_items'          => __( 'Search Step', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into step', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this step', 'text_domain' ),
		'items_list'            => __( 'Step list', 'text_domain' ),
		'items_list_navigation' => __( 'Step list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter step list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Step', 'text_domain' ),
		'description'           => __( 'Content for each step', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'editor', 'revisions', ),
		'taxonomies'            => array( 'my_step' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-editor-ol',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'step', $args );

}
add_action( 'init', 'step_post_type', 0 );
?>
