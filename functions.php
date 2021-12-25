<?php
/**
 * wpsvelte functions and definitions
 *
 * @package wp-svelte
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// wpsvelte's includes directory.
$sw_inc_dir = 'inc';

// Array of files to include.
$sw_includes = array(
	'utils',
	'setup',
	'sidebars',
	'scripts',
);

foreach ( $sw_includes as $file ) {
	require_once get_theme_file_path( $sw_inc_dir . "/" . $file . ".php" );
}
