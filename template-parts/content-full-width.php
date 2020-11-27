<?php
/**
 * Template part for displaying full width page content in page-full-width.php
 *
 * @package simplecolor
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php simplecolor_post_thumbnail(); ?>
	<div class="full-width-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'simplecolor' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
