<?php

declare(strict_types=1);

function bulbera_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}

add_filter( 'body_class', 'bulbera_body_classes' );

function get_custom_logo_url(): ?string
{
    $custom_logo_id = get_theme_mod('custom_logo');
    if (($image = wp_get_attachment_image_src($custom_logo_id, 'full')) && isset($image[0])) {
        return $image[0];
    }

    return null;
}
