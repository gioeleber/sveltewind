<?php 
$props = [
  "layout" => [
    "templateName" => "Index",
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
  "posts" => [] 
];

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();

    array_push($props["posts"], [
      "title" => get_the_title(),
      "content" => get_the_excerpt(),
      "permalink" => get_the_permalink(),
      "publishDate" => get_the_date(),
      "thumbUrl" => get_the_post_thumbnail_url(),
    ]);
  }
} else {
  array_push($props["posts"], [
    "title" => "No content found",
    "content" => "There is no content in this page.",
    "permalink" => null
  ]);
}

$props = sw_serialize_data($props);
?>

<?php get_header(); ?>
<div id="app" data-props="<?= $props ?>"></div>
<?php get_footer(); ?>