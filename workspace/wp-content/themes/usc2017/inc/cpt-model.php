<?php
  // Register Custom Post Type
  function model_post_type() {

  	$labels = array(
  		'name'                  => _x( 'Models', 'Post Type General Name', 'text_domain' ),
  		'singular_name'         => _x( 'Model', 'Post Type Singular Name', 'text_domain' ),
  		'menu_name'             => __( 'Model', 'text_domain' ),
  		'name_admin_bar'        => __( 'Model', 'text_domain' ),
  		'archives'              => __( 'Model Archives', 'text_domain' ),
  		'attributes'            => __( 'Model Attributes', 'text_domain' ),
  		'parent_item_colon'     => __( 'Parent Model:', 'text_domain' ),
  		'all_items'             => __( 'All Models', 'text_domain' ),
  		'add_new_item'          => __( 'Add New Model', 'text_domain' ),
  		'add_new'               => __( 'Add New Model', 'text_domain' ),
  		'new_item'              => __( 'New Model', 'text_domain' ),
  		'edit_item'             => __( 'Edit Model', 'text_domain' ),
  		'update_item'           => __( 'Update Model', 'text_domain' ),
  		'view_item'             => __( 'View Model', 'text_domain' ),
  		'view_items'            => __( 'View Models', 'text_domain' ),
  		'search_items'          => __( 'Search Model', 'text_domain' ),
  		'not_found'             => __( 'Not found', 'text_domain' ),
  		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  		'featured_image'        => __( 'Featured Image', 'text_domain' ),
  		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
  		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
  		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
  		'insert_into_item'      => __( 'Insert into Model', 'text_domain' ),
  		'uploaded_to_this_item' => __( 'Uploaded to this Model', 'text_domain' ),
  		'items_list'            => __( 'Models list', 'text_domain' ),
  		'items_list_navigation' => __( 'Models list navigation', 'text_domain' ),
  		'filter_items_list'     => __( 'Filter models list', 'text_domain' ),
  	);
  	$args = array(
  		'label'                 => __( 'Model', 'text_domain' ),
  		'description'           => __( 'Content for each car model', 'text_domain' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
  		'taxonomies'            => array( 'fleet' ),
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'menu_icon'             => 'dashicons-performance',
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => true,
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'capability_type'       => 'page',
  	);
  	register_post_type( 'model', $args );

  }
  add_action( 'init', 'model_post_type', 0 );
?>
