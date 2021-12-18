<?php
/**
 * wpsvelte functions and definitions
 *
 * @package wp-svelte
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// wpsvelte's includes directory.
$wpsvelte_inc_dir = 'inc';

// Array of files to include.
$wpsvelte_includes = array(
	'utils',
	'setup',
	'sidebars',
	'scripts',
);

foreach ( $wpsvelte_includes as $file ) {
	require_once get_theme_file_path( $wpsvelte_inc_dir . "/" . $file . ".php" );
}
