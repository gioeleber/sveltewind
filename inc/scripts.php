<?php

function dev_add_theme_scripts() {
	$env = wp_get_environment_type();
	$MAIN_SRC = "src/main.ts";

	if ($env === "local") {
		wp_enqueue_script(
			'main_module',
			'http://localhost:3000/' . $MAIN_SRC,
			null,
			1.0, true
		);
	
		wp_enqueue_script(
			'vite_module',
			'http://localhost:3000/@vite/client',
			null,
			1.0, true
		);
		return;
	}

	$manifest = json_decode(file_get_contents(
		get_template_directory_uri() . '/public/build/manifest.json'
	), true);
	
	wp_enqueue_style(
		'app_style',
		get_template_directory_uri() . '/public/build/' . $manifest[$MAIN_SRC]["css"][0],
		false,
		1.0, 'all'
	);

	wp_enqueue_script(
		'main_module',
		get_template_directory_uri() . '/public/build/' . $manifest[$MAIN_SRC]["file"],
		null,
		1.0, true
	);	

} add_action('wp_enqueue_scripts', 'dev_add_theme_scripts');

add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);
function add_type_attribute($tag, $handle, $src) {
	// if not your script, do nothing and return original $tag
	if ( !str_contains($handle, "module") ) {
		return $tag;
	}
	// change the script tag by adding type="module" and return it.
	$tag = '<script defer type="module" src="' . esc_url( $src ) . '"></script>';
	return $tag;
}

