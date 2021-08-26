<?php
add_action('init', 'register_custom_post_types');
function register_custom_post_types(){


    register_post_type('agency', array(
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'public' => true,
        'publicly_queryable' => true,
        'labels' => array(
            'name' => 'Agency',
            'add_new_item' => 'Add agency',
            'edit_item' => 'Edit agency',
            'all_items' => 'All agency',
            'singular_name' => 'agency'
        ),
        'rewrite' => [
            'slug'                  => 'agency'],
        'taxonomies'=> array( 'agency_company' ),
        'menu_icon' => 'dashicons-admin-comments'
    ));
}