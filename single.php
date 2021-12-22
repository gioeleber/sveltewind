<?php 


$content = urlencode(json_encode([
  "sidebar" => sw_sidebar_html("right-sidebar"),
  "homeUrl" => home_url( '/' ),
  "articles" => [
    [
      "title"=> get_the_title(),
      "content" => get_the_content(),
      "publishDate" => get_the_date(),
      "thumbUrl" => get_the_post_thumbnail_url(),
      "categories" => array_values(get_categories()),
    ]
  ],
]));
?>

<?php get_header(); ?>
<main id="main-single" data-props="<?= $content ?>"></main>
<?php get_footer(); ?>