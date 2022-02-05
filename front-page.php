<?php
$props = [
  "layout" => [
    "templateName" => "FrontPage",
    "header" => [
      "menu" => wp_nav_menu(["echo" => false]),
      "logoSrc" => sw_logo(),
      "siteName" => get_bloginfo( 'name' ),
      "homeUrl" => home_url( '/' ),
    ],
    "footer" => [
      "footerSidebar" => sw_sidebar_html("footer-sidebar"),
    ],
  ],
  "posts" => [
    [
      "title" => get_the_title(),
      "content" => get_the_content()
    ]
  ],
  "socials" => [],
];

$query = new WP_Query( ['post_type' => 'social'] );
if ( $query->have_posts() ) :
  while ( $query->have_posts() ) :
    $query->the_post();
    array_push($props["socials"], [
      "title" => get_the_title(),
      "link" => get_field('link'),
      "thumbUrl" => get_the_post_thumbnail_url(),
    ]);
  endwhile; 
  wp_reset_postdata();
else :
  esc_html_e( 'Sorry, no posts matched your criteria.' );
endif;

$props = sw_serialize_data($props);
?>

<?php get_header(); ?>
<div id="app" data-props="<?= $props ?>"></div>
<?php get_footer(); ?>