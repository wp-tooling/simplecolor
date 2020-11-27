<?php

namespace Simplecolor\Customize\Settings;

use Simplecolor\Customize\Controls\Control;
use Simplecolor\Customize\Controls\SeparatorControl;

class Header
{
	/**
	 * Simplecolor Section
	 *
	 * @var $section
	 */
	public static $section = 'simplecolor_section_header';

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

		// Separator Header Image Settings.
		( new Control() )->separator( $wp_customize, esc_html__( 'Header Image', 'simplecolor' ), self::$section );
		/**
		 * Header Image
		 */
		$wp_customize->add_setting(
			'header_image_display', array(
				'sanitize_callback' => 'sanitize_html_class',
				'default'           => 'entire-site',
			)
		);

		$wp_customize->add_control(
			'header_image_display', array(
				'label'       => esc_html__( 'Header Image', 'simplecolor' ),
				'description' => esc_html__( 'display settings for the header image', 'simplecolor' ),
				'section'     => self::$section,
				'type'        => 'select',
				'choices'     => array(
					'this-home-page-only' => esc_html__( 'Home Page / Front Page Only', 'simplecolor' ),
					'this-entire-site'    => esc_html__( 'Entire Site', 'simplecolor' ),
					'this-disabled'       => esc_html__( 'Disabled', 'simplecolor' ),
				),
			)
		);

		// Header Image width.
		$wp_customize->add_setting(
			'header_image_width', array(
				'sanitize_callback' => 'sanitize_html_class',
				'default'           => 'container',
			)
		);

		$wp_customize->add_control(
			'header_image_width', array(
				'label'       => esc_html__( 'Header Image width', 'simplecolor' ),
				'description' => esc_html__( 'set width for the header image', 'simplecolor' ),
				'section'     => self::$section,
				'type'        => 'select',
				'choices'     => array(
					'container'       => esc_html__( 'Boxed', 'simplecolor' ),
					'container-fluid' => esc_html__( 'Full width', 'simplecolor' ),
				),
			)
		);
	}
}
