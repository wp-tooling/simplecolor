<?php

namespace Simplecolor;

final class Header
{
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
			self::$instance = new Header();
		}
		return self::$instance;
	}

	/**
	 *  Constructor
	 */
	private function __construct() {
		add_action( 'wp_head', array( $this, 'simplecolor_pingback_header' ) );
		add_filter( 'body_class', array( $this, 'simplecolor_body_classes' ) );
	}

	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 * @return array
	 */
	public function simplecolor_body_classes( $classes ) {
		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		// Adds a class of no-sidebar when there is no sidebar present.
		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			$classes[] = 'no-sidebar';
		}
		return $classes;
	}

	/**
	 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
	 */
	public function simplecolor_pingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
	}

	/**
	 * Header Image
	 */
	public function image() {

		if ( 'this-disabled' === Theme::options()->header_image_display() ) {
			return false;
		}

		if ( 'this-home-page-only' === Theme::options()->header_image_display() ) {
			if ( false === is_front_page() ) {
				return false;
			}
		}

		?>
			<div class="<?php Theme::options()->header_image_width(); ?> simplecolor-header-img <?php Theme::options()->header_image_display(); ?>" style="padding:0px">
				<?php
					the_header_image_tag( array( 'class' => 'simplecolor-header-img' ) );
				?>
			</div>
		<?php
	}

}
