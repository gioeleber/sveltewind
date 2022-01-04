<?php
function sw_serialize_data($data) {
	return urlencode(json_encode($data));
}

function sw_get_catagory_name() {
	$q = get_queried_object();
	return is_category() ? $q->name : $q->labels->name;
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

function sw_title() {
  echo get_bloginfo( 'name' ) . (
    is_front_page() || is_home()
      ? ""
      : " - " . get_the_title()
  );
}