<?php
/**
 * Theme basic setup
 *
 * @package wp-svelte
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'wpsvelte_setup' );

if ( ! function_exists( 'wpsvelte_setup' ) ) {
	function wpsvelte_setup() {
		load_theme_textdomain( 'wpsvelte', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'wpsvelte' ),
			)
		);
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);
		add_theme_support(
			'custom-background',
			apply_filters(
				'wpsvelte_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
    add_theme_support( 'custom-logo' );
    add_theme_support( 'responsive-embeds' );
	}
}
