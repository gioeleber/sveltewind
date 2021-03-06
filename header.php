<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> id="body" style="margin: 0">
    <div id="main-loader" style="width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;">
      <?php if (has_custom_logo()): ?>
        <img width="64" src="<?=  wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ) , 'full')[0] ?>" alt="loading logo">
      <?php else: ?>
        <div>Loading...</div>
      <?php endif; ?>
    </div>
