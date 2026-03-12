<?php
function register_my_cpt()
{
    register_post_type('project', [
        'labels' => [
            'name' => 'Projets',
            'singular_name' => 'Projet',
            'add_new_item' => 'Ajouter un projet',
            'edit_item' => 'Modifier le projet',
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true, // active Gutenberg + REST API
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor'],
        'rewrite' => ['slug' => 'projets'],
    ]);
    register_post_type('review', [
        'labels' => [
            'name' => 'Avis',
            'singular_name' => 'Avis',
            'add_new_item' => 'Ajouter un avis',
            'edit_item' => 'Modifier l\'avis',
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true, // active Gutenberg + REST API
        'menu_icon' => 'dashicons-thumbs-up',
        'supports' => ['editor'],
        'rewrite' => ['slug' => 'avis'],
    ]);
    register_post_type('team', [
        'labels' => [
            'name' => 'Équipes',
            'singular_name' => 'Équipe',
            'add_new_item' => 'Ajouter un équipe',
            'edit_item' => 'Modifier le équipe',
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true, // active Gutenberg + REST API
        'menu_icon' => 'dashicons-businessman',
        'supports' => ['title', 'thumbnail', 'editor'],
        'rewrite' => ['slug' => 'Équipes'],
    ]);

}
add_action('init', 'register_my_cpt');