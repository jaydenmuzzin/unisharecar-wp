<?php
  // Register Custom Taxonomy
  function fleet() {

  $labels = array(
    'name'                       => _x( 'Fleet', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'              => _x( 'Fleet', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                  => __( 'Fleet', 'text_domain' ),
    'all_items'                  => __( 'All Fleets', 'text_domain' ),
    'parent_item'                => __( 'Parent Fleet', 'text_domain' ),
    'parent_item_colon'          => __( 'Parent Fleet:', 'text_domain' ),
    'new_item_name'              => __( 'New Fleet Name', 'text_domain' ),
    'add_new_item'               => __( 'Add New Fleet', 'text_domain' ),
    'edit_item'                  => __( 'Edit Fleet', 'text_domain' ),
    'update_item'                => __( 'Update Fleet', 'text_domain' ),
    'view_item'                  => __( 'View Fleet', 'text_domain' ),
    'separate_items_with_commas' => __( 'Separate fleets with commas', 'text_domain' ),
    'add_or_remove_items'        => __( 'Add or remove fleets', 'text_domain' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
    'popular_items'              => __( 'Popular Fleets', 'text_domain' ),
    'search_items'               => __( 'Search Fleets', 'text_domain' ),
    'not_found'                  => __( 'Not Found', 'text_domain' ),
    'no_terms'                   => __( 'No Fleets', 'text_domain' ),
    'items_list'                 => __( 'Fleets list', 'text_domain' ),
    'items_list_navigation'      => __( 'Fleets list navigation', 'text_domain' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'show_in_rest'               => false,
  );
  register_taxonomy( 'fleet', array( 'model' ), $args );

  }
  add_action( 'init', 'fleet', 0 );
?>
