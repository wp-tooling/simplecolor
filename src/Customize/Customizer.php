<?php

namespace Simplecolor\Customize;

class Customizer
{
	/**
	 * Initialize the Customizer
	 *
   	 * @see Theme __construct
	 *
	 * @return Customizer
	 */
	public static function init() {
		return new Customizer();
	}

	/**
	 * Register the Customizer
	 */
	public function __construct() {
		add_action( 'customize_register', array( $this, 'simplecolor_customizer' ) );
	}

	/**
	 * Create Simplecolor Theme Panel
	 *
	 * @param WP_Customize_Manager $wp_customize .
	 */
	public function simplecolor_theme_panel( $wp_customize ) {
		$wp_customize->add_panel(
			'simplecolor_theme_panel',
			array(
				'priority'       => 10,
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => esc_html__( 'Simplecolor Theme Options', 'simplecolor' ),
			)
		);
	}

	/**
	 * Theme Customizer.
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize .
	 */
	public function simplecolor_customizer( $wp_customize ) {

		// Add Panel .
		$this->simplecolor_theme_panel( $wp_customize );

		/**
		 * Sections
		 */
		$this->sections( $wp_customize );

		/**
		 * Settings
		 */
		$this->settings( $wp_customize );

	}

	/**
	 * Sections
	 *
	 * @param WP_Customize_Manager $wp_customize .
	 */
	public function sections( $wp_customize ) {

		foreach ( Sections::get() as $seckey => $section ) {

			// build out each section.
			$wp_customize->add_section( 'simplecolor_section_' . trim( $section ),
				array(
					'title'      => __( ' » ' . trim( ucwords( $section ) ) ), // @codingStandardsIgnoreLine
					'capability' => 'edit_theme_options',
					'panel'      => 'simplecolor_theme_panel',
				)
			);

		} // foreach
	}

	/**
	 * Settings .
	 *
	 * @param WP_Customize_Manager $wp_customize .
	 */
	public function settings( $wp_customize ) {
		Build::sections( $wp_customize );
	}

}
