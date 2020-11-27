<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simplecolor
 */

?>
<?php simplecolor_before_footer(); ?>
<footer id="colophon" class="site-footer this-site-footer bg-white this-margin-top">
	<?php simplecolor_footer(); ?>
		<div align="center" class="site-info container">
		<div class="simplecolor-theme-credit">
			<?php do_action( 'simplecolor_footer_credit' ); ?>
			</div><!-- .simplecolor-theme-credit -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
	<?php wp_footer(); ?>
		<?php simplecolor_after_footer(); ?>
	</body>
</html>
