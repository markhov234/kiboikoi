<?php

function allow_cors()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
}


function enqueue_styles()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/styles.css', array(), '1.0.0', 'all');
}

function enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true);
}



function theme_setup()
{
    register_nav_menus(
        array(
            'primary_menu' => esc_html__('Primary Menu', 'kiboikoi'),
            'footer_menu'  => esc_html__('Footer Menu', 'kiboikoi'),
        )
    );
}

function enqueue_custom_fonts()
{
    wp_enqueue_style('custom-font', get_template_directory_uri() . '/dist/css/fonts/CalibreWeb-Regular.woff', array(), '1.0.0', 'all');
    wp_enqueue_style('custom-font', get_template_directory_uri() . '/dist/css/fonts/CalibreWeb-Semibold.woff', array(), '1.0.0', 'all');
    wp_enqueue_style('custom-font', get_template_directory_uri() . '/dist/css/fonts/Tungsten-Semibold.woff', array(), '1.0.0', 'all');
    wp_enqueue_style('location', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0');
}


function custom_register_partner_post_type()
{
    $labels = array(
        'name'               => 'Partenaires',
        'singular_name'      => 'Partenaire',
        'menu_name'          => 'Partenaires',
        'add_new'            => 'Ajouter un nouveau',
        'add_new_item'       => 'Ajouter un nouveau partenaire',
        'edit_item'          => 'Modifier le partenaire',
        'new_item'           => 'Nouveau partenaire',
        'view_item'          => 'Voir le partenaire',
        'search_items'       => 'Rechercher parmi les partenaires',
        'not_found'          => 'Aucun partenaire trouvé',
        'not_found_in_trash' => 'Aucun partenaire trouvé dans la corbeille',
        'parent_item_colon'  => '',
        'all_items'          => 'Tous les partenaires',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'partner'),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 20,
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('partner', $args);
}
function remove_partner_editor_support()
{
    remove_post_type_support('partner', 'editor');
}

function my_acf_google_map_api($api)
{
    $api['key'] = 'AIzaSyCRVtg-kdlt66NB6gay8DEI5Rq4LXl5lHg';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

add_action('init', 'remove_partner_editor_support');
add_action('init', 'custom_register_partner_post_type');



add_action('init', 'allow_cors');
add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action('after_setup_theme', 'theme_setup');
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');
