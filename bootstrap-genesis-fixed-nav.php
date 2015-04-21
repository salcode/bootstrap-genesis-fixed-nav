<?php
/**
 * Plugin Name: Bootstrap Genesis Fixed Nav
 * Plugin URI:
 * Description: Modifies the Primary Navigation Menu so it is fixed to the top of the page
 * Version: 1.0.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: bootstrap-genesis-fixed-nav
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class Bootstrap_Genesis_Fixed_Nav {
	public function __construct() {
		add_filter( 'bsg-classes-to-add', array( $this, 'modify_nav_class' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_css' ) );
		add_filter( 'genesis_markup_nav-primary_output',  array( $this, 'add_boot_strap_affix_markup' ) );
	}

	public function modify_nav_class( $classes_to_add ) {
		$classes_to_add['nav-primary'] = 'navbar navbar-default navbar-fixed-top';
		return $classes_to_add;
	}

	public function load_css() {
		error_log( 'load_css' );
		wp_enqueue_style(
			'bsg-fixed-nav',
			plugins_url( 'assets/bsg-fixed-nav.css', __FILE__ ),
			'bsg_combined_css',
			'1.0.0'
		);
	}

	/**
	 * Add Bootstrap Affix attributes to html tag
	 * See http://getbootstrap.com/javascript/#affix
	 *
	 * @since 1.0.0
	 *
	 * @param string $markup Rendered output for opening html tag
	 *
	 * @return string Modified version of the opening html tag
	 *                which now includes the data attributes to trigger
	 *                the affix behavior
	 */
	public function add_boot_strap_affix_markup( $markup ) {
		$markup = rtrim( $markup, ">" ) . 'data-spy="affix" data-offset-top="32">';
		return $markup;
	}
}

add_action( 'after_setup_theme', 'bootstrap_genesis_fixed_nav' );

function bootstrap_genesis_fixed_nav() {
	new Bootstrap_Genesis_Fixed_Nav();
}


