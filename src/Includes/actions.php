<?php
/**
 * Custom actions for Simplecolor
 * https://developer.wordpress.org/reference/functions/do_action/
 */


	/**
	 * simplecolor_before_header
	 */
	if ( ! function_exists( 'simplecolor_before_header' ) ) :
		function simplecolor_before_header() {
		    /**
		     * before the header tag.
		     */
		    do_action( 'simplecolor_before_header' );
		}
	endif;

	/**
	 * simplecolor_after_header
	 */
	if ( ! function_exists( 'simplecolor_after_header' ) ) :
		function simplecolor_after_header() {
		    /**
		     * after the closing header tag.
		     */
		    do_action( 'simplecolor_after_header' );
		}
	endif;

	/**
	 * simplecolor_homepage_header
	 */
	if ( ! function_exists( 'simplecolor_homepage_header' ) ) :
		function simplecolor_homepage_header() {
		    /**
		     * after the closing header tag.
		     */
		    do_action( 'simplecolor_homepage_header' );
		}
	endif;

	/**
	 * simplecolor_post_header
	 */
	if ( ! function_exists( 'simplecolor_post_header' ) ) :
		function simplecolor_post_header() {
				/**
				 * header section on posts.
				 */
				do_action( 'simplecolor_post_header' );
		}
	endif;

	/**
	 * simplecolor_page_header
	 */
	if ( ! function_exists( 'simplecolor_page_header' ) ) :
		function simplecolor_page_header() {
				/**
				 * header section on pages.
				 */
				do_action( 'simplecolor_page_header' );
		}
	endif;

	/**
	 * simplecolor_page_footer
	 */
	if ( ! function_exists( 'simplecolor_page_footer' ) ) :
		function simplecolor_page_footer() {
				/**
				 * footer section on pages.
				 */
				do_action( 'simplecolor_page_footer' );
		}
	endif;

	/**
	 * simplecolor_after_entry_meta
	 */
	if ( ! function_exists( 'simplecolor_after_entry_meta' ) ) :
		function simplecolor_after_entry_meta() {
		    /**
		     * before the entry meta.
		     */
		    do_action( 'simplecolor_after_entry_meta' );
		}
	endif;

	/**
	 * simplecolor_before_entry_meta
	 */
	if ( ! function_exists( 'simplecolor_before_entry_meta' ) ) :
		function simplecolor_before_entry_meta() {
		    /**
		     * after the closing post-article tag.
		     */
		    do_action( 'simplecolor_before_entry_meta' );
		}
	endif;

	/**
	 * simplecolor_after_post_content
	 */
	if ( ! function_exists( 'simplecolor_after_post_content' ) ) :
		function simplecolor_after_post_content() {
		    /**
		     * after the closing post-article tag.
		     */
		    do_action( 'simplecolor_after_post_content' );
		}
	endif;

	/**
	 * simplecolor_before_sidebar
	 */
	if ( ! function_exists( 'simplecolor_before_sidebar' ) ) :
		function simplecolor_before_sidebar() {
		    /**
		     * before the sidebar.
		     */
		    do_action( 'simplecolor_before_sidebar' );
		}
	endif;

	/**
	 * simplecolor_after_sidebar
	 */
	if ( ! function_exists( 'simplecolor_after_sidebar' ) ) :
		function simplecolor_after_sidebar() {
		    /**
		     * after the sidebar.
		     */
		    do_action( 'simplecolor_after_sidebar' );
		}
	endif;

	/**
	 * simplecolor_before_footer
	 */
	if ( ! function_exists( 'simplecolor_before_footer' ) ) :
		function simplecolor_before_footer() {
		    /**
		     * before the opening footer tag.
		     */
		    do_action( 'simplecolor_before_footer' );
		}
	endif;

	/**
	 * simplecolor_footer
	 */
	if ( ! function_exists( 'simplecolor_footer' ) ) :
		function simplecolor_footer() {
				/**
				 * after the opening <footer> tag.
				 */
				do_action( 'simplecolor_footer' );
		}
	endif;

	/**
	 * simplecolor_after_footer
	 */
	if ( ! function_exists( 'simplecolor_after_footer' ) ) :
		function simplecolor_after_footer() {
		    /**
		     * after the closing footer tag.
		     * wp_footer happens just before this action
		     */
		    do_action( 'simplecolor_after_footer' );
		}
	endif;
