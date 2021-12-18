<?php
$menu = wp_nav_menu(["echo" => false]);

$content = serialize_data([
  "menu" => $menu,
  "logoSrc" => has_custom_logo()
    ? wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ) , 'full')[0]
    : null,
  "siteName" => get_bloginfo( 'name' ),
  "homeUrl" => home_url( '/' )
]);
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
      echo get_bloginfo( 'name' ) . (is_front_page() || is_home()
        ? ""
        : " - " . get_the_title());
    ?></title>
    <?php wp_head(); ?>
  </head>
<body>
<div id="main-loader">Loading...</div>
<header id="main-menu" data-content="<?= $content ?>">
</header>
