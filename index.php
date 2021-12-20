<?php 
$props = [];

if ( have_posts() ) {
  // Start the Loop.
  while ( have_posts() ) {
    the_post();

    array_push($props, [
      "title" => get_the_title(),
      "content" => get_the_content(),
      "permalink" => get_the_permalink(),
    ]);
  }
} else {
  array_push($props, [
    "title" => "No props found",
    "props" => "There is no props in this page."
  ]);
}

$props = serialize_data($props);

?>
<?php get_header(); ?>
<main id="main-index" data-props='<?= $props ?>'></main>
<?php get_footer(); ?>