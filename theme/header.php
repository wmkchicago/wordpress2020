<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="wmk2020-top-header">
  <a class="wmk2020-nav-burger" href="#expand-menu">
    <div class="wmk2020-burger-bar1"></div>
    <div class="wmk2020-burger-bar2"></div>
    <div class="wmk2020-burger-bar3"></div>
  </a>
  <div class="wmk2020-top-logo">
    <img class="wmk2020-top-logo-img" src="<?php echo wp_get_attachment_image_src(57, 'medium')[0]; ?>"/>
  </div>
  <h1 class="wmk2020-top-h1 wmk2020-wide-title">Wspólnota Małżeństw Katolickich</h1>
  <h1 class="wmk2020-top-h1 wmk2020-short-title">WMK</h1>
  <div id="close-menu"></div>
  <section id="expand-menu">
    <nav class="wmk2020-navbar">
      <a class="wmk2020-nav-close" href="#close-menu">
        <div class="wmk2020-nav-close-bar1"></div>
        <div class="wmk2020-nav-close-bar2"></div>
      </a>
      <?php
        wp_nav_menu(
          array(
            "theme_location" => "nav-menu",
            "container" => false,
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