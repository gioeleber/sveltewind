<?php 
$right_sidebar = null;
if ( is_active_sidebar( 'Right Sidebar' ) ) :
  ob_start();
  get_sidebar('Right Sidebar');
  $right_sidebar = ob_get_contents();
  ob_end_clean();
endif;

$content = urlencode(json_encode([
  "sidebar" => $right_sidebar,
  "articles" => [
    [
      "title" => get_the_title(),
      "content" => get_the_content(),
    ]
  ],
]));

?>
<?php get_header(); ?>
<main id="main-single" data-content="<?= $content ?>"></main>
<?php get_footer(); ?>