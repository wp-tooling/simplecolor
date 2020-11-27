<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simplecolor
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php simplecolor_post_thumbnail(); ?>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			simplecolor_posted_on();
			simplecolor_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-summary">
		<?php
		the_excerpt();
		printf( esc_html__( '%1$s', 'simplecolor' ), '<div class="read-more"><a class="more-link" href="'.get_permalink().'">Read More</a></div>' );
		?>
	</div><!-- .entry-summary -->
</article><!-- #post-<?php the_ID(); ?> -->
