<?php

function theme_files() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3');
    wp_enqueue_style('main-styles', get_theme_file_uri('/assets/main.css'), ['bootstrap']);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], '5.3.3', ['in_footer' => true]);
    wp_enqueue_script('theme-scripts', get_theme_file_uri('/assets/script.js'), [], '202404261134', ['strategy' => 'defer']);
}

add_action('wp_enqueue_scripts', 'theme_files');


function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
} 
add_action('after_setup_theme', 'theme_features');

function create_sidebar_cards() { ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li><?php
}