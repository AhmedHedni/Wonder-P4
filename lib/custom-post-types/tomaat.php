<?php

add_action('init', 'tomaatPostType');

function tomaatPostType()
{
    $args = [
        'labels' => [
            'name' => 'Tomaat',
            'singular_name' => 'Tomaat',
            'all_items' => 'Al het tomaat',
            'edit_item' => 'Tomaat bewerken',
            'add_new' => 'Tomaat aanmaken',
            'add_new_item' => 'Tomaat toevoegen',
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'nieuws',
        ],
    ];

    \register_post_type('tomaat', $args);

}

