<?php

namespace Simplecolor\Customize\Settings;

use Simplecolor\Customize\Controls\Control;
use Simplecolor\Customize\Controls\SeparatorControl;

class Navigation
{
	/**
	 * Simplecolor Section
	 *
	 * @var $section
	 */
	public static $section = 'simplecolor_section_navigation';

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

		// Separator Header Navigation Settings.
		( new Control() )->separator( $wp_customize, esc_html__( 'Navigation', 'simplecolor' ), self::$section );

		$wp_customize->add_setting(
			'navigation_width', array(
				'sanitize_callback' => 'sanitize_html_class',
				'default'           => 'container',
			)
		);

		$wp_customize->add_control(
			'navigation_width', array(
				'label'       => esc_html__( 'Navigation width', 'simplecolor' ),
				'description' => esc_html__( 'set menu navigation width', 'simplecolor' ),
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
