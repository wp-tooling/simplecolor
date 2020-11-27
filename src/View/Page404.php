<?php

namespace Simplecolor\View;

/**
 *
 */
class Page404 extends Layout
{

	/**
	 * Display content
	 * @return [type] [description]
	 */
	public static function view(){

		self::head();
		?>
		<header class="page-header">
			<h1 class="page-title archive-title entry-meta">
				<?php
					esc_html_e( 'Oops! That page can&rsquo;t be found.', 'simplecolor' );
						?>
				</h1>
			</header><!-- .page-header -->
			<p/>
		<?php

		/**
		 * Page content
		 */
		esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'simplecolor' );

		get_search_form();
 		//the_widget( 'WP_Widget_Recent_Posts' );

			?>
						<br/>
					<div class="widget widget_categories">
 					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'simplecolor' ); ?></h2>
 						<ul><?php
 							wp_list_categories(
 								array(
 									'orderby'    => 'count',
 									'order'      => 'DESC',
 									'show_count' => 1,
 									'title_li'   => '',
 									'number'     => 10,
 								)
 							);
 					?></ul>
 		</div><!-- .widget -->
 		<?php

		/* translators: %1$s: smiley */
 		$simplecolor_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'simplecolor' ), convert_smilies( ':)' ) ) . '</p>';
 		the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$simplecolor_archive_content" );
 		the_widget( 'WP_Widget_Tag_Cloud' );

		self::footer();
	}



}
