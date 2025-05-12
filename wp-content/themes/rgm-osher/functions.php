<?php

// Optimized request
function opt_wp() {
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_shortlink_wp_head');
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	show_admin_bar(false);
}
add_action('init', 'opt_wp');

// Регистрируем возможности темы
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('title-tag');

register_nav_menus(array(
    'header' => 'Header',
    'footer' => 'Footer',
));



