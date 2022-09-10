<?php

declare(strict_types=1);

function bulbera_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			[
				'selector'        => '.site-title a',
				'render_callback' => 'bulbera_customize_partial_blogname',
			]
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			[
				'selector'        => '.site-description',
				'render_callback' => 'bulbera_customize_partial_blogdescription',
			]
		);
	}
}

add_action( 'customize_register', 'bulbera_customize_register' );

function bulbera_customize_partial_blogname() {
	bloginfo( 'name' );
}

function bulbera_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function bulbera_customize_preview_js() {
	wp_enqueue_script(
		'bulbera-customizer',
		get_template_directory_uri() . '/js/customizer.js',
		[ 'customize-preview' ],
		BULBERA_VERSION,
		true
	);
}

add_action( 'customize_preview_init', 'bulbera_customize_preview_js' );
