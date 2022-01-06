<?php 
$props = sw_serialize_data([
  "layout" => [
    "templateName" => "Single",
    "header" => [
      "menu" => wp_nav_menu(["echo" => false]),
      "logoSrc" => sw_logo(),
      "siteName" => get_bloginfo( 'name' ),
      "homeUrl" => home_url( '/' ),
    ],
    "sidebar" => sw_sidebar_html("right-sidebar"),
    "footer" => [
      "footerSidebar" => sw_sidebar_html("footer-sidebar"),
    ],
  ],
  "posts" => [
    [
      "title"=> get_the_title(),
      "content" => get_the_content(),
      "publishDate" => get_the_date(),
      "thumbUrl" => get_the_post_thumbnail_url(),
      "categories" => array_values(get_categories()),
    ]
  ],
]);
?>

<?php get_header(); ?>
<div id="app" data-props="<?= $props ?>"></div>
<?php get_footer(); ?>