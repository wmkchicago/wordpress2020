<?php get_header(); ?>
<header class="wmk2020-top-header"
  <?php 
  // Override header background to posts feature image if set.
  if (has_post_thumbnail()) {
    echo "style=\"background-image: url(" . wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0] . ");\"";
  }
  ?>
>
  <a href="http://wmkchicago.org">
    <div class="wmk2020-top-logo">
      <img class="wmk2020-top-logo-img" src="<?php echo wp_get_attachment_image_src(58, 'large')[0]; ?>"/>
    </div>
    <h1 class="wmk2020-top-h1 wmk2020-wide-title">Wspólnota Małżeństw Katolickich</h1>
    <h1 class="wmk2020-top-h1 wmk2020-short-title">WMK</h1>
  </a>
  <?php get_template_part('part', 'menu'); ?>
</header>
<div class="wmk2020-main wmk2020-front-page" id="main-content">
<?php
if (have_posts()) {
    the_content();
} else {
    esc_html_e('Jeszcze nic tu nie ma.');
}
?>
<?php get_footer(); ?>