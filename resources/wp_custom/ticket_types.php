<?php
// Register Custom Taxonomy
function ticket_types() {

	$labels = array(
		'name'                       => _x( 'Ticket Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Ticket Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Ticket Type', 'text_domain' ),
		'all_items'                  => __( 'All Ticket Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Ticket Type', 'text_domain' ),
		'add_new_item'               => __( 'Add Ticket Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Ticket Type', 'text_domain' ),
		'update_item'                => __( 'Update Ticket Type', 'text_domain' ),
		'view_item'                  => __( 'View Ticket Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove ticket types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Ticket Types', 'text_domain' ),
		'search_items'               => __( 'Search Ticket Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Ticket Types', 'text_domain' ),
		'items_list'                 => __( 'Ticket types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Ticket types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
	);
	register_taxonomy( 'ticket_type', array( 'ticket' ), $args );

}
add_action( 'init', 'ticket_types', 0 );
?>
