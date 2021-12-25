<?php 
$props = [
  "sidebar" => sw_sidebar_html("right-sidebar"),
  "homeUrl" => home_url( '/' ),
  "archiveItems" => [] 
];

if ( have_posts() ) {
  // Start the Loop.
  while ( have_posts() ) {
    the_post();

    array_push($props["archiveItems"], [
      "title" => get_the_title(),
      "content" => get_the_excerpt(),
      "permalink" => get_the_permalink(),
      "publishDate" => get_the_date(),
      "thumbUrl" => get_the_post_thumbnail_url(),
    ]);
  }
} else {
  array_push($props["archiveItems"], [
    "title" => "No props found",
    "content" => "There is no content in this page.",
    "permalink" => null
  ]);
}

$props = sw_serialize_data($props);

?>
<?php get_header(); ?>
<main id="main-index" data-props='<?= $props ?>'></main>
<?php get_footer(); ?>