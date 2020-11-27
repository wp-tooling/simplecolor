<?php

namespace Simplecolor\Customize\Settings;

use Simplecolor\Customize\Controls\Control;
use Simplecolor\Customize\Controls\SeparatorControl;

class Posts
{
	/**
	 * Simplecolor Section
	 *
	 * @var $section
	 */
	public static $section = 'simplecolor_section_posts';

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
		 * Separator Post Settings.
		 */
		( new Control() )->separator( $wp_customize, esc_html__( 'Posts', 'simplecolor' ), self::$section );

		/**
		 * Featured image
		 */
		$wp_customize->add_setting(
			'featured_image', array(
				'default'           => sanitize_html_class( 'show-image' ),
				'capability'        => 'edit_theme_options',
				'transport'         => self::$transport,
				'sanitize_callback' => 'sanitize_html_class',
			)
		);
		$wp_customize->add_control(
			'featured_image', array(
				'label'       => esc_html__( 'Featured Image Display', 'simplecolor' ),
				'description' => esc_html__( 'featured Image on single posts', 'simplecolor' ),
				'section'     => self::$section,
				'type'        => 'select',
				'choices'     => array(
					'this-display-show' => esc_html__( 'Display on single posts', 'simplecolor' ),
					'this-display-none' => esc_html__( 'Remove on single posts', 'simplecolor' ),
				),
			)
		);

		/**
		 * Post Details
		 */
		( new Control() )->header_title( $wp_customize, esc_html__( 'Post Details', 'simplecolor' ), self::$section );

		// Display Post Categories .
		$wp_customize->add_setting(
			'display_post_categories', array(
				'default'           => absint( 1 ),
				'capability'        => 'edit_theme_options',
				'transport'         => self::$transport,
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control(
			'display_post_categories', array(
				'label'   => esc_html__( 'Display Post Categories', 'simplecolor' ),
				'section' => self::$section,
				'type'    => 'checkbox',
			)
		);

		// Display tags.
		$wp_customize->add_setting(
			'display_tags', array(
				'default'           => absint( 1 ),
				'capability'        => 'edit_theme_options',
				'transport'         => self::$transport,
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control(
			'display_tags', array(
				'label'   => esc_html__( 'Display Post Tags', 'simplecolor' ),
				'section' => self::$section,
				'type'    => 'checkbox',
			)
		);

		// Display previous and next post navigation.
		$wp_customize->add_setting(
			'display_previous_next', array(
				'default'           => absint( 1 ),
				'capability'        => 'edit_theme_options',
				'transport'         => self::$transport,
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control(
			'display_previous_next', array(
				'label'   => esc_html__( 'Display Previous and Next Navigation', 'simplecolor' ),
				'section' => self::$section,
				'type'    => 'checkbox',
			)
		);

		// Post width.
		$wp_customize->add_setting(
			'post_width', array(
				'sanitize_callback' => 'sanitize_html_class',
				'default'           => 'container',
			)
		);

		$wp_customize->add_control(
			'post_width', array(
				'label'       => esc_html__( 'Post width', 'simplecolor' ),
				'description' => esc_html__( 'set width for all single post pages', 'simplecolor' ),
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
