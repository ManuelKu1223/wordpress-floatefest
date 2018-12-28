<?php
// Register Custom Post Type
function ticket() {

	$labels = array(
		'name'                  => _x( 'Tickets', 'Post Type General Name', 'floatfest2018' ),
		'singular_name'         => _x( 'Ticket', 'Post Type Singular Name', 'floatfest2018' ),
		'menu_name'             => __( 'Tickets', 'floatfest2018' ),
		'name_admin_bar'        => __( 'Tickets', 'floatfest2018' ),
		'archives'              => __( 'Tickets Archives', 'floatfest2018' ),
		'attributes'            => __( 'Ticket Attributes', 'floatfest2018' ),
		'parent_item_colon'     => __( 'Parent Item:', 'floatfest2018' ),
		'all_items'             => __( 'All Ticket', 'floatfest2018' ),
		'add_new_item'          => __( 'Add New Ticket', 'floatfest2018' ),
		'add_new'               => __( 'Add New', 'floatfest2018' ),
		'new_item'              => __( 'New Ticket', 'floatfest2018' ),
		'edit_item'             => __( 'Edit Ticket', 'floatfest2018' ),
		'update_item'           => __( 'Update Ticket', 'floatfest2018' ),
		'view_item'             => __( 'View Ticket', 'floatfest2018' ),
		'view_items'            => __( 'View Tickets', 'floatfest2018' ),
		'search_items'          => __( 'Search Ticket', 'floatfest2018' ),
		'not_found'             => __( 'Not found', 'floatfest2018' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'floatfest2018' ),
		'featured_image'        => __( 'Featured Image', 'floatfest2018' ),
		'set_featured_image'    => __( 'Set featured image', 'floatfest2018' ),
		'remove_featured_image' => __( 'Remove featured image', 'floatfest2018' ),
		'use_featured_image'    => __( 'Use as featured image', 'floatfest2018' ),
		'insert_into_item'      => __( 'Insert into ticket', 'floatfest2018' ),
		'uploaded_to_this_item' => __( 'Uploaded to this ticket', 'floatfest2018' ),
		'items_list'            => __( 'Tickets list', 'floatfest2018' ),
		'items_list_navigation' => __( 'Tickets list navigation', 'floatfest2018' ),
		'filter_items_list'     => __( 'Filter tickets list', 'floatfest2018' ),
	);
	$args = array(
		'label'                 => __( 'Ticket', 'floatfest2018' ),
		'description'           => __( 'Tickets for Float Fest', 'floatfest2018' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'ticket_types' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rest_base'             => 'tickets',
		'rest_controller_class' => 'WP_REST_Tickets_Controller',
	);
	register_post_type( 'ticket', $args );

}
add_action( 'init', 'ticket', 0 );

?>
