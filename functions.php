<?php

function theme_enqueue_assets() {
    wp_enqueue_style('theme_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');
