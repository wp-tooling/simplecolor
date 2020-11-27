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
<?php simplecolor_header_image(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'simplecolor' ); ?>
	</a>
<?php simplecolor_before_header(); ?>
<?php simplecolor_after_header(); ?>
<?php if ( is_front_page() && is_home() ) :
	simplecolor_homepage_header();
endif; ?>
