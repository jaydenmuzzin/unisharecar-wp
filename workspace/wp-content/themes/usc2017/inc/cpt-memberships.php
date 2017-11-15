<?php
// Register Custom Post Type
function membership_post_type() {

	$labels = array(
		'name'                  => _x( 'Memberships', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Membership', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Membership', 'text_domain' ),
		'name_admin_bar'        => __( 'Membership', 'text_domain' ),
		'archives'              => __( 'Membership Archives', 'text_domain' ),
		'attributes'            => __( 'Membership Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Membership:', 'text_domain' ),
		'all_items'             => __( 'All Membership', 'text_domain' ),
		'add_new_item'          => __( 'Add New Membership', 'text_domain' ),
		'add_new'               => __( 'Add New Membership', 'text_domain' ),
		'new_item'              => __( 'New Membership', 'text_domain' ),
		'edit_item'             => __( 'Edit Membership', 'text_domain' ),
		'update_item'           => __( 'Update Membership', 'text_domain' ),
		'view_item'             => __( 'View Membership', 'text_domain' ),
		'view_items'            => __( 'View Memberships', 'text_domain' ),
		'search_items'          => __( 'Search Membership', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Membership', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Membership', 'text_domain' ),
		'items_list'            => __( 'Memberships list', 'text_domain' ),
		'items_list_navigation' => __( 'Memberships list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter membership list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Membership', 'text_domain' ),
		'description'           => __( 'Content for each membership level', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'membership', $args );

}
add_action( 'init', 'membership_post_type', 0 );
?>
