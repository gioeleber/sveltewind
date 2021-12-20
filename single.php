<?php 
$right_sidebar = null;
if ( is_active_sidebar( 'Right Sidebar' ) ) :
  ob_start();
  dynamic_sidebar('right-sidebar');
  $right_sidebar = ob_get_contents();
  ob_end_clean();
endif;

$content = urlencode(json_encode([
  "sidebar" => $right_sidebar,
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
<main id="main-single" data-content="<?= $content ?>"></main>
<?php get_footer(); ?>