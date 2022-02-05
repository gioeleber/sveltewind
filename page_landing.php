<?php
  /**
   * Template Name: Landing Page
   *
   * @package WordPress
   * @subpackage SvelteWind
   * @since SvelteWind 1.0
   */

  $props = sw_serialize_data([
  
  "layout" => [
    "templateName" => "Landing",
    "header" => [
      "menu" => wp_nav_menu(["echo" => false]),
      "logoSrc" => sw_logo(),
      "siteName" => get_bloginfo( 'name' ),
      "homeUrl" => home_url( '/' ),
    ],
    "footer" => [
      "footerSidebar" => sw_sidebar_html("footer-sidebar"),
    ],
  ],
  "posts" => [
    [
      "title" => get_the_title(),
      "content" => get_the_content()
    ]
  ],
]);
?>

<?php get_header(); ?>
<div id="app" data-props="<?= $props ?>"></div>
<?php get_footer(); ?>