<?php
    /*--------------------------------------
    Custom Post Types for choclomedia
    --------------------------------------*/

    // Register Custom Post Type for Products
    function cpt_service() {

        $labels = array(
            'name'                  => _x( 'Servicios', 'Post Type General Name', 'choclomedia' ),
            'singular_name'         => _x( 'Servicios', 'Post Type Singular Name', 'choclomedia' ),
            'menu_name'             => __( 'Servicios', 'choclomedia' ),
            'name_admin_bar'        => __( 'Servicios', 'choclomedia' ),
            'archives'              => __( 'Item Archives', 'choclomedia' ),
            'attributes'            => __( 'Item Attributes', 'choclomedia' ),
            'parent_item_colon'     => __( 'Parent Item:', 'choclomedia' ),
            'all_items'             => __( 'All Items', 'choclomedia' ),
            'add_new_item'          => __( 'Add New Item', 'choclomedia' ),
            'add_new'               => __( 'Add New', 'choclomedia' ),
            'new_item'              => __( 'New Item', 'choclomedia' ),
            'edit_item'             => __( 'Edit Item', 'choclomedia' ),
            'update_item'           => __( 'Update Item', 'choclomedia' ),
            'view_item'             => __( 'View Item', 'choclomedia' ),
            'view_items'            => __( 'View Items', 'choclomedia' ),
            'search_items'          => __( 'Search Item', 'choclomedia' ),
            'not_found'             => __( 'Not found', 'choclomedia' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'choclomedia' ),
            'featured_image'        => __( 'Featured Image', 'choclomedia' ),
            'set_featured_image'    => __( 'Set featured image', 'choclomedia' ),
            'remove_featured_image' => __( 'Remove featured image', 'choclomedia' ),
            'use_featured_image'    => __( 'Use as featured image', 'choclomedia' ),
            'insert_into_item'      => __( 'Insert into item', 'choclomedia' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'choclomedia' ),
            'items_list'            => __( 'Items list', 'choclomedia' ),
            'items_list_navigation' => __( 'Items list navigation', 'choclomedia' ),
            'filter_items_list'     => __( 'Filter items list', 'choclomedia' ),
        );
        $rewrite = array(
            'slug'                  => 'servicios',
            'with_front'            => false,
            'feeds'                 => true,
            'pages'                 => true,
        );
        $args = array(
            'label'                 => __( 'Servicios', 'choclomedia' ),
            'description'           => __( 'Servicios de Choclomedia', 'choclomedia' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'excerpt',  'editor', 'thumbnail' ),
            'taxonomies'            => array(),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-lightbulb',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'post',
        );
        register_post_type( 'service', $args );

    }
    add_action( 'init', 'cpt_service', 0 );   
?>