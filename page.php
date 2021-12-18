<?php 
$content = urlencode(json_encode([
  [
    "title" => get_the_title(),
    "content" => get_the_content()
  ]
]));

?>
<?php get_header(); ?>
<main id="main-page" data-content="<?= $content ?>"></main>
<?php get_footer(); ?>