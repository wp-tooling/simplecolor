<?php

namespace Simplecolor\Customize\Settings;

use Simplecolor\Customize\Controls\Control;
use Simplecolor\Customize\Controls\SeparatorControl;

class General
{
	/**
	 * Simplecolor Section
	 *
	 * @var $section
	 */
	public static $section = 'simplecolor_section_general';

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

		// Separator General Settings.
		( new Control() )->separator( $wp_customize, esc_html__( 'General', 'simplecolor' ), self::$section );

		/**
		 * Link Color
		 */
		$wp_customize->add_setting(
			'link_color', array(
				'capability'        => 'manage_options',
				'default'           => '#E4584B',
				'transport'         => self::$transport,
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		$wp_customize->add_control(
			new \WP_Customize_Color_Control(
				$wp_customize, 'link_color',
				array(
					'label'       => esc_html__( 'Link Color', 'simplecolor' ),
					'description' => esc_html__( 'Select a color', 'simplecolor' ),
					'section'     => self::$section,
				)
			)
		);

		/**
		 * Disable Sidebar
		 */
		( new Control() )->header_title( $wp_customize, esc_html__( 'Sidebar', 'simplecolor' ), self::$section );
		$wp_customize->add_setting(
			'disable_sidebar', array(
				'default'           => absint( 0 ),
				'capability'        => 'edit_theme_options',
				'transport'         => self::$transport,
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control(
			'disable_sidebar', array(
				'label'   => esc_html__( 'Disable Sidebar', 'simplecolor' ),
				'section' => self::$section,
				'type'    => 'checkbox',
			)
		);

	}
}
