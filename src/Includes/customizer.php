<?php

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function simplecolor_customize_partial_copyright() {
	echo esc_html( get_theme_mod( 'footer_copyright' ) );
}

/**
 * Render Selective refresh partial.
 *
 * @return void
 */
function simplecolor_customize_partial_poweredby() {
	echo wp_kses_post( get_theme_mod( 'poweredby' ) );
}


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function simplecolor_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function simplecolor_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function simplecolor_customize_preview_js() {
	wp_enqueue_script( 'simplecolor-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), Simplecolor\Theme::VERSION, true );
}
add_action( 'customize_preview_init', 'simplecolor_customize_preview_js' );
