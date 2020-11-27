<?php

namespace Simplecolor;

use Simplecolor\View\IndexPage;
use Simplecolor\View\Sidebar;
use Simplecolor\View\Archive;
use Simplecolor\View\Single;
use Simplecolor\View\Page404;
use Simplecolor\View\Page;
use Simplecolor\View\FullWidthPage;
use Simplecolor\View\CanvasPage;
use Simplecolor\View\Search;

final class Template
{
	/**
	 * Private $instance
	 *
	 * @var $instance
	 */
	private static $instance;

	/**
	 * Singleton
	 *
	 * @return object
	 */
	public static function init() {

		if ( ! isset( self::$instance ) ) {
			self::$instance = new Template();
		}
		return self::$instance;
	}

	/**
	 * [__construct description]
	 */
	private function __construct() {
		// nothing to see here .
	}

	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package simplecolor
	 */
	public function index() {
		get_header();
		IndexPage::view();
		get_footer();
	}

	/**
	 * The sidebar containing the main widget area
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package simplecolor
	 */
	public function sidebar() {
		Sidebar::view();
	}

	/**
	 * The template for displaying archive pages
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package simplecolor
	 */
	public function archive() {
		get_header();
		Archive::view();
		get_footer();
	}

	/**
	 * The template for displaying all single posts
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package simplecolor
	 */
	public function single() {
		get_header();
		Single::view();
		get_footer();
	}

	/**
	 * The template for displaying 404 pages (not found)
	 *
	 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
	 *
	 * @package simplecolor
	 */
	public function page_404() {
		get_header();
		Page404::view();
		get_footer();
	}

	/**
	 * The template for displaying all pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages
	 * and that other 'pages' on your WordPress site may use a
	 * different template.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package simplecolor
	 */
	public function page() {
		get_header();
		Page::view();
		get_footer();
	}

	/**
	 * Simplecolor Canvas
	 *
	 * @return void
	 */
	public function canvas_page() {
		get_header( 'canvas' );
		CanvasPage::view();
		get_footer( 'canvas' );
	}

	/**
	 * Full Width
	 *
	 * @return void
	 */
	public function full_width_page() {
		get_header();
		FullWidthPage::view();
		get_footer();
	}

	/**
	 * The template for displaying search results pages
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
	 *
	 * @package simplecolor
	 */
	public function search() {
		get_header();
		Search::view();
		get_footer();
	}

}
