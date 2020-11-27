<?php

namespace Simplecolor\Customize\Settings;

use Simplecolor\Customize\Controls\Control;
use Simplecolor\Customize\Controls\SeparatorControl;

class Pages
{
	/**
	 * Simplecolor Section
	 *
	 * @var $section
	 */
	public static $section = 'simplecolor_section_pages';

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

		// Separator Pages Settings.
		( new Control() )->separator( $wp_customize, esc_html__( 'Pages', 'simplecolor' ), self::$section );

		// Display Page Header.
		$wp_customize->add_setting(
			'display_page_header', array(
				'default'           => absint( 1 ),
				'capability'        => 'edit_theme_options',
				'transport'         => self::$transport,
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control(
			'display_page_header', array(
				'label'   => esc_html__( 'Display Page Header', 'simplecolor' ),
				'section' => self::$section,
				'type'    => 'checkbox',
			)
		);

		// Pages width.
		$wp_customize->add_setting(
			'page_width', array(
				'sanitize_callback' => 'sanitize_html_class',
				'default'           => 'container',
			)
		);

		$wp_customize->add_control(
			'page_width', array(
				'label'       => esc_html__( 'Page width', 'simplecolor' ),
				'description' => esc_html__( 'set page width for all pages', 'simplecolor' ),
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
