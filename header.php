<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simplecolor
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'simplecolor-font simplecolor-font-style' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'simplecolor' ); ?></a>
<?php simplecolor_before_header(); ?>
	<header id="masthead" class="site-header">
		<div class="align-items-center simplecolor-navigation">
			<div class="<?php Simplecolor\Theme::options()->navigation_width(); ?> d-flex flex-column flex-md-row align-items-center">
				<div class="mr-md-auto d-flex flex-column flex-md-row align-items-center">
					<?php if ( has_custom_logo() ) : ?>
						<div id="the-logo">
							<?php the_custom_logo(); ?>
						</div>
					<?php endif; ?>
					<div class="site-title">
							<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
							<?php
								$simplecolor_description = get_bloginfo( 'description', 'display' );
								if ( $simplecolor_description || is_customize_preview() ) :
								?>
								<small class="site-description text-muted align-items-center">
									<?php echo $simplecolor_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								</small>
							<?php endif; ?>
					</div>
				</div>
					<nav id="site-navigation" class="my-2 my-md-0 mr-md-3 main-navigation ">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'simplecolor' ); ?></button>
					    <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
					</nav>
			</div>
		</div>
	<?php Simplecolor\Theme::header()->image(); ?>
</header><!-- #masthead -->
<?php simplecolor_after_header(); ?>
<?php if ( is_front_page() && is_home() ) :
	simplecolor_homepage_header();
endif; ?>
