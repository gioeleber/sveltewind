<?php 
$props = sw_serialize_data([
  [
    "title" => get_the_title(),
    "content" => get_the_content()
  ]
]);

?>
<?php get_header(); ?>
<main id="main-page" data-props="<?= $props ?>"></main>
<?php get_footer(); ?>