<?php

function theme_enqueue_assets() {
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('theme_styles', get_stylesheet_uri());

    wp_enqueue_script('theme_scripts', get_theme_file_uri('/js/scripts-bundled.js'), null, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

function theme_setup_supports() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup_supports');

function get_page_parent_id($id = null) {
    return wp_get_post_parent_id($id ?: get_the_ID());
}

function get_page_parent_or_child_id($id = null) {
    return get_page_parent_id($id) ?: get_the_ID();
}

function is_page_parent($id = null) {
    return get_page_parent_id($id) > 0;
}

function is_page_child($id = null) {
    return get_pages([
        'child_of' => $id ?: get_the_ID(),
    ]);
}

function is_page_parent_or_child($id = null) {
    return is_page_parent($id) || is_page_child($id);
}

function get_page_parent_permalink($id = null) {
    return get_permalink($id ?: get_page_parent_id());
}

function get_page_parent_title($id = null) {
    return get_the_title($id ?: get_page_parent_id());
}
