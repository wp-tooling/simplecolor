<?php

namespace Brisko\View;

class FooterCredits
{
	/**
	 * Class instance.
	 *
	 * @var $instance
	 */
	private static $instance = null;

	/**
	 * New instance.
	 *
	 * @return object ..
	 */
	public static function init() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new FooterCredits();
		}
		return self::$instance;
	}

	/**
	 * [__construct description]
	 */
	private function __construct() {
		$this->get_footer_credits();
	}

	/**
	 * Copyright info
	 *
	 * @return string $copyright
	 */
	public function copyright() {

		if ( get_theme_mod( 'footer_copyright' ) !== false ) {
			$copyright = '<span class="brisko-footer-copyright">' . esc_html__( get_theme_mod( 'footer_copyright' ) ) . '</span>'; // @codingStandardsIgnoreLine
		} else {
			$copyright = get_bloginfo( 'name' );
		}
		return $copyright;
	}

	/**
	 * Brisko Theme credit powered by
	 *
	 * @return string $poweredby
	 */
	public function poweredby() {

		if ( get_theme_mod( 'poweredby' ) !== false ) {
			$poweredby = '<span class="brisko-footer-poweredby">' . wp_kses_post( get_theme_mod( 'poweredby' ) ) . '</span>';
		} else {
			$poweredby = ' | Powered by <a href="https://wpbrisko.com">Brisko WordPress Theme</a>';
		}
		return $poweredby;
	}

	/**
	 * Footer credit section
	 *
	 * @return void
	 */
	public function get_footer_credits() {
		printf( esc_html__( '%1$s %2$s %3$s', 'brisko' ), $this->copyright(), '   ', $this->poweredby() ); // @codingStandardsIgnoreLine
	}

}