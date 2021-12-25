<?php 
$props = [
  "sidebar" => sw_sidebar_html("right-sidebar"),
  "homeUrl" => home_url('/'),
  "catName" => sw_get_catagory_name(),
  "archivePosts" => [] 
];

if ( have_posts() ) {
  // Start the Loop.
  while ( have_posts() ) {
    the_post();

    array_push($props["archivePosts"], [
      "title" => get_the_title(),
      "content" => get_the_excerpt(),
      "permalink" => get_the_permalink(),
      "publishDate" => get_the_date(),
      "thumbUrl" => get_the_post_thumbnail_url(),
      "categories" => array_values(get_categories()),
    ]);
  }
} else {
  array_push($props["archivePosts"], [
    "title" => "No props found",
    "content" => "There is no content in this page.",
    "permalink" => null
  ]);
}

$props = sw_serialize_data($props);

?>
<?php get_header(); ?>
<main id="main-archive" data-props='<?= $props ?>'></main>
<?php get_footer(); ?>