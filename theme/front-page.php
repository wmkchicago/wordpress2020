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
    <h1 class="wmk2020-front-title">Wspólnota Małżeństw Katolickich <p class="wmk2020-front-caption">Budujemy silne małżeństwa.</p></h1>
  </a>
  <nav class="wmk2020-social-nav">
    <a href="#-kontakt" class="wmk2020-social-button wmk2020-social-mail">
      <i class="fas fa-envelope-square"></i>
    </a>
    <a href="https://www.facebook.com/wmkchicago" class="wmk2020-social-button wmk2020-social-fb">
      <i class="fab fa-facebook-square"></i>
    </a>
    <a href="https://www.youtube.com/channel/UCh-Jyq4OHN5DoQk_cOt5fFw" class="wmk2020-social-button wmk2020-social-yt">
      <i class="fab fa-youtube-square"></i>
    </a>
  </nav>
  <?php get_template_part('part', 'menu'); ?>
</header>
<div class="wmk2020-main wmk2020-front-page" id="main-content">
  <section class="wmk2020-front-section wmk2020-front-news">
    <h2 class="wmk2020-front-section-title wmk2020t-header-1" id="-aktualnosci">Aktualności</h2>
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
          <h3 class="wmk2020-front-post-title wmk2020t-header-2"><?php the_title(); ?></h3>
        </a>
        <p class="wmk2020-front-post-excerpt wmk2020t-paragraph"><?php echo get_the_excerpt(); ?></p>
      </li>
      <?php
      endwhile;
      ?>
    </ul>
    <p class="wmk2020-front-posts-more wmk2020t-paragraph">Wszystkie aktualności dostępne są w <a href="https://wmkchicago.org/aktualnosci/" data-type="page" data-id="7">archiwum</a>.</p>
  </section>
  <section class="wmk2020-front-section wmk2020-front-section-support">
    <h2 class="wmk2020-front-section-title wmk2020t-header-1" id="-wesprzyj-nas">Wesprzyj nas</h2>
    <header class="wmk2020-front-section-support-caption wmk2020t-paragraph">
      Dzięki Twojemu wsparciu możemy działać i&nbsp;się&nbsp;rozwijać.
      Jest wiele form w&nbsp;które można się&nbsp;zaangażować.
      WMK to&nbsp;nasza wspólnota, i&nbsp;też od&nbsp;Ciebie zależy jak&nbsp;będzie ona wyglądała w&nbsp;przyszłości.
    </header>
    <ul class="wmk2020-support-list">
      <li class="wmk2020-support-item">
        <img
          class="wmk2020-support-item-img"
          loading="lazy"
          src="<?php echo get_template_directory_uri() . '/images/pray.png'; ?>"
          />
        <h3 class="wmk2020t-header-2">Pomódl się</h3>
      </li>
      <li class="wmk2020-support-item">
        <img
          class="wmk2020-support-item-img"
          loading="lazy"
          src="<?php echo get_template_directory_uri() . '/images/volunteer.png'; ?>"
          />
        <h3 class="wmk2020t-header-2">Zostań wolontariuszem</h3>
      </li>
      <li class="wmk2020-support-item">
        <img
          class="wmk2020-support-item-img"
          loading="lazy"
          src="<?php echo get_template_directory_uri() . '/images/donate.png'; ?>"
          />
        <h3 class="wmk2020t-header-2">Złóż dotację</h3>
      </li>
    </ul>
  </section>
  <section class="wmk2020-front-section wmk2020-front-section-contact">
    <h2 class="wmk2020-contact-title wmk2020-front-section-title wmk2020t-header-1" id="-kontakt">Kontakt</h2>
    <form class="wmk2020-contact-form" action="https://docs.google.com/forms/d/e/1FAIpQLSfZPfGhWlf5rvOPuZi8iVRYrOZ-QMHAYXEGxDXSgqJqT9ILtA/formResponse">
      <h3 class="wmk2020-contact-subheader wmk2020t-header-2">Napisz do nas</h3>
      <div class="wmk2020-form-field">
        <div class="wmk2020-form-field-control">
          <input name="entry.1662281564" id="contact-name" type="text" class="wmk2020-form-field-text wmk2020-form-field-input" value="" placeholder=" " />
          <label for="contact-name" class="wmk2020-form-field-label">Imię</label>
          <div class="wmk2020-form-field-bar"></div>
        </div>
      </div>
      <div class="wmk2020-form-field">
        <div class="wmk2020-form-field-control">
          <input name="entry.629075100" id="contact-email" type="email" class="wmk2020-form-field-text wmk2020-form-field-input" value="" placeholder=" " />
          <label for="contact-email" class="wmk2020-form-field-label">E-mail</label>
          <div class="wmk2020-form-field-bar"></div>
        </div>
      </div>
      <div class="wmk2020-form-field">
        <div class="wmk2020-form-field-control">
          <textarea name="entry.1554727497" id="contact-message" class="wmk2020-form-field-text wmk2020-form-field-textarea" placeholder=" "></textarea>
          <label for="contact-message" class="wmk2020-form-field-label">Treść</label>
          <div class="wmk2020-form-field-bar"></div>
        </div>
      </div>
      <div class="wmk2020-form-field">
        <div class="wmk2020-form-field-control">
          <input id="contact-email" type="submit" class="wmk2020-form-submit" value="Wyślij" placeholder="" />
        </div>
      </div>
    </form>
    <div class="wmk2020-contact-paragraph">
      <i class="wmk2020-contact-paragraph-logo"></i>
      <p class="wmk2020-contact-paragraph-text wmk2020t-paragraph">
        Serdecznie dziękujemy za&nbsp;zainteresowanie naszą wspólnotą.
        Chętnie nawiążemy kontakt lub&nbsp;odpowiemy na&nbsp;pytania jakie możecie mieć o&nbsp;naszej wspólnocie, sposobie naszej działalności, lub&nbsp;nadchodzących i&nbsp;planowanych wydarzeniach.
      </p>
      <i class="fas fa-at wmk2020-contact-paragraph-logo"></i>
      <p class="wmk2020-contact-paragraph-text wmk2020t-paragraph">
        <a href="mailto:kontakt@wmkchicago.org">kontakt@wmkchicago.org</a>
      </p>
      <i class="fab fa-facebook-f wmk2020-contact-paragraph-logo"></i>
      <p class="wmk2020-contact-paragraph-text wmk2020t-paragraph">
        <a href="https://www.facebook.com/wmkchicago">Facebook</a>
      </p>
      <i class="fab fa-youtube wmk2020-contact-paragraph-logo"></i>
      <p class="wmk2020-contact-paragraph-text wmk2020t-paragraph">
        <a href="https://www.youtube.com/channel/UCh-Jyq4OHN5DoQk_cOt5fFw">YouTube</a>
      </p>
    </div>
  </section>
<?php get_footer(); ?>