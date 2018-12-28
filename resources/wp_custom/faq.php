<?php
// Register Custom Post Type
function faq() {

$labels = array(
  'name'                  => _x( 'FAQs', 'Post Type General Name', 'text_domain' ),
  'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'text_domain' ),
  'menu_name'             => __( 'FAQ', 'text_domain' ),
  'name_admin_bar'        => __( 'FAQ', 'text_domain' ),
  'archives'              => __( 'FAQ Archives', 'text_domain' ),
  'attributes'            => __( 'FAQ Attributes', 'text_domain' ),
  'parent_item_colon'     => __( 'Parent Question:', 'text_domain' ),
  'all_items'             => __( 'All FAQ', 'text_domain' ),
  'add_new_item'          => __( 'Add New Question', 'text_domain' ),
  'add_new'               => __( 'Add New', 'text_domain' ),
  'new_item'              => __( 'New Question', 'text_domain' ),
  'edit_item'             => __( 'Edit Question', 'text_domain' ),
  'update_item'           => __( 'Update Question', 'text_domain' ),
  'view_item'             => __( 'View Question', 'text_domain' ),
  'view_items'            => __( 'View FAQ', 'text_domain' ),
  'search_items'          => __( 'Search FAQ', 'text_domain' ),
  'not_found'             => __( 'Not found', 'text_domain' ),
  'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  'featured_image'        => __( 'Featured Image', 'text_domain' ),
  'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
  'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
  'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
  'insert_into_item'      => __( 'Insert into question', 'text_domain' ),
  'uploaded_to_this_item' => __( 'Uploaded to this question', 'text_domain' ),
  'items_list'            => __( 'FAQ list', 'text_domain' ),
  'items_list_navigation' => __( 'FAQ list navigation', 'text_domain' ),
  'filter_items_list'     => __( 'Filter FAQ list', 'text_domain' ),
);
$rewrite = array(
  'slug'                  => '',
  'with_front'            => false,
  'pages'                 => true,
  'feeds'                 => false,
);
$args = array(
  'label'                 => __( 'FAQ', 'text_domain' ),
  'description'           => __( 'Frequently Asked Questions', 'text_domain' ),
  'labels'                => $labels,
  'supports'              => array( 'title', 'editor' ),
  'hierarchical'          => false,
  'public'                => true,
  'show_ui'               => true,
  'show_in_menu'          => true,
  'menu_position'         => 5,
  'menu_icon'             => 'dashicons-format-status',
  'show_in_admin_bar'     => true,
  'show_in_nav_menus'     => true,
  'can_export'            => true,
  'has_archive'           => false,
  'exclude_from_search'   => true,
  'publicly_queryable'    => true,
  'rewrite'               => $rewrite,
  'capability_type'       => 'page',
  'show_in_rest'          => true,
  'rest_base'             => 'faq',
  'rest_controller_class' => 'WP_REST_FAQ_Controller',
);
register_post_type( 'faq', $args );

}
add_action( 'init', 'faq', 0 );
?>
