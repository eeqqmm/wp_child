<?php
add_action('init', 'create_taxonomy');
function create_taxonomy()
{
    register_taxonomy(
        'agency_company',
        ['agency'],
        array(
            "hierarchical" => true,
            "label" => "Agency",
            "singular_label" => "Agency",
            'show_in_rest'          => true,
            'public'                => true,
            "rewrite" => array('slug' => 'company')//, 'hierarchical' => true
        )
    );
}