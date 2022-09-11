<?php

declare(strict_types=1);

if (!defined('BULBERA_VERSION')) {
    define('BULBERA_VERSION', '1.0.0');
}

function bulbera_setup()
{
    load_theme_textdomain('bulbera', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(
        [
            'menu-1' => esc_html__('Primary', 'bulbera'),
        ]
    );

    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    add_theme_support(
        'custom-background',
        apply_filters(
            'bulbera_custom_background_args',
            [
                'default-color' => 'ffffff',
                'default-image' => '',
            ]
        )
    );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support(
        'custom-logo',
        [
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ]
    );
}

add_action('after_setup_theme', 'bulbera_setup');

function bulbera_content_width()
{
    $GLOBALS['content_width'] = apply_filters('bulbera_content_width', 640);
}

add_action('after_setup_theme', 'bulbera_content_width', 0);

function bulbera_widgets_init()
{
    register_sidebar(
        [
            'name' => esc_html__('Sidebar', 'bulbera'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'bulbera'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ]
    );
}

add_action('widgets_init', 'bulbera_widgets_init');

function bulbera_scripts()
{
    wp_enqueue_style('bulbera-style', get_stylesheet_uri(), [], BULBERA_VERSION);

    wp_enqueue_style('bulma-cdn', 'https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css');

    wp_enqueue_script(
        'bulbera-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        [],
        BULBERA_VERSION,
        true
    );

    wp_enqueue_script(
        'font-awesome',
        'https://use.fontawesome.com/releases/v5.0.7/js/all.js'
    );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'bulbera_scripts');

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

