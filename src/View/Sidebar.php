<?php

namespace Simplecolor\View;

class Sidebar
{

	/**
	 * Display content
	 */
	public static function view() {

		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			return 0;
		}

		?>
			<aside id="secondary" class="widget-area">
		<?php
		/**
		 * Sidebar
		 */
		simplecolor_before_sidebar();
		dynamic_sidebar( 'sidebar-1' );
		simplecolor_after_sidebar();

				?>
			</aside><!-- #secondary -->
		<?php
	}


}
