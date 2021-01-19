<?php get_header(); ?>
<?php
if (have_posts()) {
    the_content();
} else {
    esc_html_e('Jeszcze nic tu nie ma.');
}
?>
<?php get_footer(); ?>