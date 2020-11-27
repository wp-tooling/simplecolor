<?php

namespace Simplecolor\Customize\Settings;

use Simplecolor\Customize\Controls\Control;
use Simplecolor\Customize\Controls\SeparatorControl;

class Footer
{
	/**
	 * Simplecolor Section
	 *
	 * @var $section
	 */
	public static $section = 'simplecolor_section_footer';

	/**
	 * Customizer transport
	 *
	 * @var $transport
	 */
	public static $transport = 'postMessage';

	/**
	 * Lets build out the customizer settings
	 *
	 * Create new customizer settings here is where we will add new panel sections
	 *
	 * @param WP_Customize_Manager $wp_customize .
	 */
	public static function settings( $wp_customize ) {

		/**
		 * Footer Settings
		 */
		( new Control() )->separator( $wp_customize, esc_html__( 'Footer', 'simplecolor' ), self::$section );

		// Copyright section .
		$wp_customize->add_setting(
			'footer_copyright', array(
				'default'           => wp_kses_post( 'Copyright © 2020 ' . get_bloginfo( 'name' ) . '.' ),
				'capability'        => 'edit_theme_options',
				'transport'         => self::$transport,
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'footer_copyright', array(
				'label'       => esc_html__( 'Copyright Text', 'simplecolor' ),
				'description' => esc_html__( 'edit footer section', 'simplecolor' ),
				'section'     => self::$section,
				'settings'    => 'footer_copyright',
			)
		);

		// Powered By.
		$wp_customize->add_setting(
			'poweredby', array(
				'default'           => wp_kses_post( ' | Powered by Simplecolor WordPress Theme' ),
				'capability'        => 'edit_theme_options',
				'transport'         => self::$transport,
				'sanitize_callback' => 'wp_kses_post',
			)
		);

		$wp_customize->add_control(
			'poweredby', array(
				'label'       => esc_html__( 'Powered By', 'simplecolor' ),
				'description' => esc_html__( 'edit Powered by section, html can be used', 'simplecolor' ),
				'section'     => self::$section,
				'settings'    => 'poweredby',
				'type'        => 'textarea',
			)
		);

	}
}
