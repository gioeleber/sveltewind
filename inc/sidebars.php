<?php
add_action( 'widgets_init', 'right_sidebar' );
function right_sidebar() {
  $args = array(
    'name'          => 'Right Sidebar',
    'id'            => 'right-sidebar',
    'description'   => 'This is the right sidebar shown in the articles and archives',
    'class'         => 'wiget-container',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3 class="h4">',
    'after_title'   => '</h3>' 
  );

  register_sidebar( $args );
}

function sw_sidebar_html($sidebar_name) {
  $right_sidebar = null;
  if ( is_active_sidebar( $sidebar_name ) ) :
    ob_start();
    dynamic_sidebar($sidebar_name);
    $right_sidebar = ob_get_contents();
    ob_end_clean();
  endif;

  return $right_sidebar;
}