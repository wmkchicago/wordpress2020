<?php 
get_header();

if (have_posts()) {
    the_post();
?>
<header class="wmk2020-top-header wmk2020-page-top-header"
  <?php 
  // Override header background to posts feature image if set.
  if (has_post_thumbnail()) {
    echo "style=\"background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(" . wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0] . ");\"";
  }
  ?>
>
  <a href="http://wmkchicago.org">
    <div class="wmk2020-page-logo">
      <img class="wmk2020-top-logo-img" src="<?php echo wp_get_attachment_image_src(58, 'large')[0]; ?>"/>
    </div>
  </a>
  <h1 class="wmk2020-page-h1 wmk2020-wide-title">
    <span class="wmk2020-page-title-text"><?php the_title(); ?></span>
    <?php
      if (has_excerpt()) {  // if has custom excerpt
    ?>
    <p class="wmk2020-post-exerpt">
      <span class="wmk2020-post-exerpt-text"><?php echo(get_the_excerpt()); ?></span>
    </p>
    <?php
      }
    ?>
  </h1>
  <h1 class="wmk2020-page-h1 wmk2020-short-title"><?php the_title(); ?></h1>
</header>
<div class="wmk2020-main wmk2020-not-front-page" id="main-content">
  <section class="wmk2020-post-content">
    <?php
      the_content();
    ?>
  </section>
<?php
} else {
  esc_html_e('Jeszcze nic tu nie ma.');
}
get_footer();
?>