<?php

namespace Simplecolor\View;

use Simplecolor\Theme;

class Page extends Layout
{

	/**
	 * Display content
	 */
	public static function view() {

		self::head();

		/**
		 * Page content
		 */
		while ( have_posts() ) :
 			the_post();
 			get_template_part( 'template-parts/content', 'page' );
 			if ( comments_open() || get_comments_number() ) :
 				comments_template();
 			endif;
 		endwhile;

		self::footer();
	}

	/**
	 * Head section
	 */
	public static function head() {
		simplecolor_page_header(); ?>
		<main id="primary" class="site-main <?php Theme::options()->page_width(); ?> bg-white">
		<?php
	}

	/**
	 * Footer section
	 */
	public static function footer() {
		?>
			</main><!-- #main -->
		<?php
		simplecolor_page_footer();
	}
}
