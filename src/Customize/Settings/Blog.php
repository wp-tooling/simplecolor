<?php

namespace Simplecolor\Customize\Settings;

use Simplecolor\Customize\Controls\Control;
use Simplecolor\Customize\Controls\SeparatorControl;

class Blog
{
	/**
	 * Simplecolor Section
	 *
	 * @var $section
	 */
	public static $section = 'simplecolor_section_blog';

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
		 * Archives Template Details
		 */
		( new Control() )->separator( $wp_customize, esc_html__( 'Blog', 'simplecolor' ), self::$section );

		// Blog Title .
		// Blog Layout .

		// Read More Button .
		( new Control() )->header_title( $wp_customize, esc_html__( 'Read More Button', 'simplecolor' ) );

		// button border radius.
		$wp_customize->add_setting(
			'read_more_border_radius', array(
				'default'           => absint( 1 ),
				'capability'        => 'edit_theme_options',
				'transport'         => self::$transport,
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control(
			'read_more_border_radius', array(
				'label'   => esc_html__( 'Border Radius', 'simplecolor' ),
				'section' => self::$section,
				'type'    => 'checkbox',
			)
		);

		// background color.
	}
}
