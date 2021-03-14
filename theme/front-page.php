<?php get_header(); ?>
<header class="wmk2020-top-header wmk2020-front-top-header"
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
    <h1 class="wmk2020-top-h1 wmk2020-wide-title">Wspólnota Małżeństw Katolickich <p class="wmk2020-top-caption">Budujemy silne małżeństwa.</p></h1>
    <h1 class="wmk2020-top-h1 wmk2020-short-title">WMK</h1>
  </a>
  <?php get_template_part('part', 'menu'); ?>
</header>
<div class="wmk2020-main wmk2020-front-page" id="main-content">
  <section class="wmk2020-front-section wmk2020-front-news">
    <h2 class="wmk2020-front-section-title" id="-aktualnosci">Aktualności</h2>
    <ul class="wmk2020-front-posts-list">
      <?php
      $postsQuery = new WP_Query([
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
      ]);
      while ($postsQuery->have_posts()):
        $postsQuery->the_post();
      ?>
      <li>
        <a class="wmk2020-front-post-link wmk2020-front-post-title" href="<?php the_permalink(); ?>">
          <div class="wmk2020-front-post-image-box">
            <?php the_post_thumbnail('large', ['class' => 'wmk2020-front-post-image']); ?>
          </div>
          <h3 class="wmk2020-front-post-title"><?php the_title(); ?></h3>
        </a>
        <p class="wmk2020-front-post-excerpt"><?php echo get_the_excerpt(); ?></p>
      </li>
      <?php
      endwhile;
      ?>
    </ul>
    <p class="wmk2020-front-posts-more">Wszystkie aktualności dostępne są w <a href="https://wmkchicago.org/aktualnosci/" data-type="page" data-id="7">archiwum</a>.</p>
  </section>
  <section class="wmk2020-front-section wmk2020-front-section-support">
    <h2 class="wmk2020-front-section-title" id="-wesprzyj-nas">Wesprzyj nas</h2>
    <p class="wmk2020-front-section-support-caption">
      Dzięki Twojemu wsparciu możemy działać i się rozwijać.
      Jest wiele form w które można się zaangażować.
      WMK to nasza wspólnota, i też od Ciebie zależy jak będzie ona wyglądała w przyszłości.
    </p>
    <ul class="wmk2020-support-list">
      <li class="wmk2020-support-item">
        <img
          class="wmk2020-support-item-img"
          loading="lazy"
          src="<?php echo get_template_directory_uri() . '/images/pray.png'; ?>"
          />
        <h3>Pomódl się</h3>
      </li>
      <li class="wmk2020-support-item">
        <img
          class="wmk2020-support-item-img"
          loading="lazy"
          src="<?php echo get_template_directory_uri() . '/images/volunteer.png'; ?>"
          />
        <h3>Zostań wolontariuszem</h3>
      </li>
      <li class="wmk2020-support-item">
        <img
          class="wmk2020-support-item-img"
          loading="lazy"
          src="<?php echo get_template_directory_uri() . '/images/donate.png'; ?>"
          />
        <h3>Złóż dotację</h3>
      </li>
    </ul>
  </section>
  <section class="wmk2020-front-section wmk2020-front-section-contact">
    <h2 id="-kontakt">Kontakt</h2>
    <p>Serdecznie dziękujemy za zainteresowanie naszą wspólnotą.&nbsp; Chętnie nawiążemy kontakt lub odpowiemy na pytania jakie możecie mieć o naszej wspólnocie, sposobie naszej działalności, lub nadchodzących i planowanych wydarzeniach.</p>
    <p>E-maile prosimy kierować na adres <a href="mailto:kontakt@wmkchicago.org">kontakt@wmkchicago.org</a>.</p>
  </section>
<?php get_footer();
?>