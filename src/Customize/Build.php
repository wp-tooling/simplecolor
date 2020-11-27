<?php
namespace Simplecolor\Customize;

use Simplecolor\Customize\Settings\General;
use Simplecolor\Customize\Settings\Header;
use Simplecolor\Customize\Settings\Navigation;
use Simplecolor\Customize\Settings\Pages;
use Simplecolor\Customize\Settings\Blog;
use Simplecolor\Customize\Settings\Posts;
use Simplecolor\Customize\Settings\Footer;
use Simplecolor\Customize\Settings\SelectiveRefresh;

final class Build {

	/**
	 * Private $instance
	 *
	 * @var $instance
	 */
	private static $instance;

	/**
	 * Singleton
	 *
	 * @return object
	 */
	public static function init() {

		if ( ! isset( self::$instance ) ) {
			self::$instance = new Build();
		}
		return self::$instance;
	}

	/**
	 * [__construct description]
	 */
	private function __construct() {
		// nothing to see here .
	}

	/**
	 * Lets build out the customizer sections
	 *
	 * Add new customizer sections to the Build.
	 *
	 * @param WP_Customize_Manager $wp_customize .
	 */
	public static function sections( $wp_customize ) {
		General::settings( $wp_customize );
		Navigation::settings( $wp_customize );
		Header::settings( $wp_customize );
		Pages::settings( $wp_customize );
		Blog::settings( $wp_customize );
		Posts::settings( $wp_customize );
		Footer::settings( $wp_customize );
		SelectiveRefresh::settings( $wp_customize );
	}

}
