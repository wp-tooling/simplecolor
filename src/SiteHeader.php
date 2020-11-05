<?php

namespace Brisko;

use Brisko\Traits\Singleton;

final class SiteHeader
{

	use Singleton;

	/**
	 * Get Class
	 *
	 * @return SiteHeader ..
	 */
	public static function get() {
		return new SiteHeader();
	}

	/**
	 * Site Header
	 */
	public function site_header() {
		$this->head();
		Navigation::get()->navigation();
		$this->header_image();
		$this->foot();
	}

	/**
	 * Header Image
	 */
	public function header_image() {

		if ( 'this-disabled' === Options::get()->header_image_display() ) {
			return false;
		}

		if ( 'this-home-page-only' === Options::get()->header_image_display() ) {
			if ( false === is_front_page() ) {
				return false;
			}
		}

		?>
			<div class="<?php Options::get()->header_image_width(); ?> brisko-header-img <?php Options::get()->header_image_display(); ?>" style="padding:0px">
				<?php
					the_header_image_tag( array( 'class' => 'brisko-header-img' ) );
				?>
			</div>
		<?php
	}

	/**
	 * Header Image
	 */
	public function head() {
		?>
			<header id="masthead" class="site-header">
		<?php
	}

	/**
	 * Header Image
	 */
	public function foot() {
		?>
		</header><!-- #masthead -->
		<?php
	}
}