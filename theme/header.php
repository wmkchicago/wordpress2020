<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com"/>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&family=Literata:wght@300;400;500&family=Eczar:wght@400;500;600&family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="wmk2020-top-header"
  <?php 
  // Override header background to posts feature image if set.
  if (has_post_thumbnail()) {
    echo "style=\"background-image: url(" . wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0] . ");\"";
  }
  ?>
>
  <a class="wmk2020-nav-burger" href="#expand-menu">
    <div class="wmk2020-burger-bar1"></div>
    <div class="wmk2020-burger-bar2"></div>
    <div class="wmk2020-burger-bar3"></div>
  </a>
  <div class="wmk2020-top-logo">
    <img class="wmk2020-top-logo-img" src="<?php echo wp_get_attachment_image_src(58, 'large')[0]; ?>"/>
  </div>
  <h1 class="wmk2020-top-h1 wmk2020-wide-title">Wspólnota Małżeństw Katolickich</h1>
  <h1 class="wmk2020-top-h1 wmk2020-short-title">WMK</h1>
  <div id="close-menu"></div>
  <section id="expand-menu">
    <nav class="wmk2020-navbar" id="">
      <a class="wmk2020-nav-close" href="#close-menu">
        <div class="wmk2020-nav-close-bar1"></div>
        <div class="wmk2020-nav-close-bar2"></div>
      </a>
      <?php
        wp_nav_menu(
          array(
            "theme_location" => "nav-menu",
            "container" => false,
            "link_before" => "<span class=\"wmk2020-menu-item-text\">",
            "link_after" => "</span>",
          )
        );
      ?>
    </nav>
    <a class="wmk2020-navbar-close" href="#close-menu">
      <span class="wmk2020-navbar-close-text">Close menu</span>
    </a>
  </section>
</header>
<div class="wmk2020-main" id="main-content">