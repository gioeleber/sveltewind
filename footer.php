<?php
$props = sw_serialize_data([
  "sidebar" => sw_sidebar_html("footer-sidebar"),
]);
?>

<footer id="main-footer" data-props="<?= $props ?>"></footer>
<?php wp_footer(); ?>
</body>
</html>