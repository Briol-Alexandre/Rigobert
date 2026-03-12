<?php
include('helpers/cpt.php');
function rigobert_theme_setup()
{
    // Support des titres automatiques
    add_theme_support('title-tag');

    // Support des images à la une
    add_theme_support('post-thumbnails');

    // Support des menus
    add_theme_support('menus');

    // Enregistrement des menus
    register_nav_menus(array(
        'primary' => __('Menu principal', 'rigobert-theme'),
    ));
}
add_action('after_setup_theme', 'rigobert_theme_setup');

add_filter('show_admin_bar', '__return_false');

// Enqueue des styles et scripts
function rigobert_theme_scripts()
{
    // Style principal compilé avec Tailwind
    wp_enqueue_style('rigobert-style', get_stylesheet_directory_uri() . '/dist/output.css', array(), '1.0.0');

    // Script principal
    wp_enqueue_script('rigobert-script', get_stylesheet_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'rigobert_theme_scripts');

function dd($dump_value)
{
    var_dump($dump_value);
    die;
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Informations du site',
        'menu_title' => 'Infos générales',
        'menu_slug' => 'infos-generales',
        'capability' => 'edit_posts',
    ));
}
?>