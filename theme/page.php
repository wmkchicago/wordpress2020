<?php 
get_header();
if (have_posts()) {
	while (have_posts()) {
    the_post();
    ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php 
    the_content();
	}
} else {
    esc_html_e('Jeszcze nic tu nie ma.');
}
get_footer();
?>