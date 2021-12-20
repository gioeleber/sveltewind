<form class="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label class="screen-reader-text">Search for:</label>
  <input class="input-text" type="text" class="search-field" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
  <input class="btn btn-primary" type="submit" value="Search">
</form>