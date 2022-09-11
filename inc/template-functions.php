<?php

declare(strict_types=1);

function bulbera_body_classes($classes)
{
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    return $classes;
}

add_filter('body_class', 'bulbera_body_classes');

function get_custom_logo_url(): ?string
{
    $custom_logo_id = get_theme_mod('custom_logo');
    if (($image = wp_get_attachment_image_src($custom_logo_id, 'full')) && isset($image[0])) {
        return $image[0];
    }

    return null;
}

function get_menu_items_by_registered_slug(string $menu_slug): array
{
    $menu_items = [];

    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_slug]) && $locations[$menu_slug] !== 0) {
        $menu = get_term($locations[$menu_slug]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
    }

    return $menu_items;
}
