<?php
  // Register Custom Post Type
  function video() {

  $labels = array(
    'name'                  => _x( 'Videos', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Videos', 'text_domain' ),
    'name_admin_bar'        => __( 'Videos', 'text_domain' ),
    'archives'              => __( 'Videos Archives', 'text_domain' ),
    'attributes'            => __( 'Video Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Video:', 'text_domain' ),
    'all_items'             => __( 'All Videos', 'text_domain' ),
    'add_new_item'          => __( 'Add New Video', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Video', 'text_domain' ),
    'edit_item'             => __( 'Edit Video', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Video', 'text_domain' ),
    'view_items'            => __( 'View Videos', 'text_domain' ),
    'search_items'          => __( 'Search Videos', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Video Thumbnail', 'text_domain' ),
    'set_featured_image'    => __( 'Set video thumbnail', 'text_domain' ),
    'remove_featured_image' => __( 'Remove video thumbnail', 'text_domain' ),
    'use_featured_image'    => __( 'Use as video thumbnail', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into video', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this video', 'text_domain' ),
    'items_list'            => __( 'Videos list', 'text_domain' ),
    'items_list_navigation' => __( 'Videos list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter videos list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Video', 'text_domain' ),
    'description'           => __( 'Videos for Float Fest', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail' ),
    'taxonomies'            => array( 'category' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-video-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
    'rest_base'             => 'videos',
    'rest_controller_class' => 'WP_REST_Videos_Controller',
  );
  register_post_type( 'video', $args );

  }
  add_action( 'init', 'video', 0 );

?>
