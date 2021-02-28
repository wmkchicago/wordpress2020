</div>
<footer class="wmk2020-footer">
  <nav class="wmk2020-footer-nav">
    <?php wp_nav_menu( array( "theme_location" => "footer-menu" ) ); ?>
  </nav>
  <address class="wmk2020-footer-contact-info">
    <p>
      Serdecznie dziękujemy za&nbsp;zainteresowanie naszą wspólnotą.
      Chętnie nawiążemy kontakt lub&nbsp;odpowiemy na&nbsp;pytania jakie możecie mieć o&nbsp;naszej wspólnocie, sposobie naszej działalności, lub&nbsp;nadchodzących i&nbsp;planowanych wydarzeniach.
    </p>
    <a href="mailto:kontakt@wmkchicago.org">kontakt@wmkchicago.org</a>
  </address>
  <div class="wmk2020-footer-logo">
    <img class="wmk2020-footer-logo-img" src="<?php echo wp_get_attachment_image_src(58, 'medium')[0]; ?>"/>
    <p>&copy; 2021 All Rights Reserved</p>
  </div>
</footer>
<? wp_footer(); ?>
</body>
</html>