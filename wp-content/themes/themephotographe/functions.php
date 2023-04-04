<?php

// Ajouter la prise en charge des images mises en avant dans le blog
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Chargement des fichiers de CSS

function load_css()
{
    // // Déclarer le fichier style.css à la racine du thème
    // wp_enqueue_style('capitaine',get_stylesheet_uri(),array(),'1.0'
    // );

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style('capitaine',get_template_directory_uri() . '/css/styles.css',array(),'1.0'
    );
}

add_action('wp_enqueue_scripts', 'load_css');

// Chargement des fichiers de JS

function load_js() {
    // Déclarer jQuery
    wp_enqueue_script('jquery');

    // Déclarer le JS
    wp_enqueue_script('capitaine',get_template_directory_uri() . '/js/scripts.js',array('jquery'),'1.0', true
    );
}

add_action('wp_enqueue_scripts', 'load_js');



// On ajoute les menus au thème dans le menu apparences 


function register_my_menus()
{
    register_nav_menus(
        array(
            'primary' => __('Menu principal')
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');


// Register Post Type de 'photo' dans le menu gauche de WordPress

function create_custom_posttype_project() {
    // Fonction WP 
    register_post_type(
        'photo',
        array(
            'label' => 'Photos',
            'description' => 'Une photographie',
            'public' => true // si passé à true = catégories, si false = étiquettes
        )
    );
}

add_action('init', 'create_custom_posttype_project');

// Création de la catégorie associée à mon CPT : test 

// function create_taxonomy_test() {
//     register_taxonomy(
//         'taxonomy_photos_test',
//         'photo',
//         array(
//             'hierarchical' => true,
//             'labels' => array(
//                 'name' => 'Tests',  // nom au pluriel
//                 'singular' => 'Test'  // nom au singulier
//                 )
//             )
//         );
// }

// add_action('init', 'create_taxonomy_test');