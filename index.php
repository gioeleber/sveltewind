<?php 
$content = [];

if ( have_posts() ) {
  // Start the Loop.
  while ( have_posts() ) {
    the_post();

    array_push($content, [
      "title" => get_the_title(),
      "content" => get_the_content(),
      "permalink" => get_the_permalink(),
    ]);
  }
} else {
  array_push($content, [
    "title" => "No content found",
    "content" => "There is no content in this page."
  ]);
}

$content = serialize_data($content);

?>
<?php get_header(); ?>
<main id="main-index" data-content='<?= $content ?>'></main>
<?php get_footer(); ?>