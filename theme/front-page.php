<?php get_header(); ?>
<?php
if (have_posts()) {
	$i = 0;
	while (have_posts()) {
		the_post();
		?>
		<div <?php echo post_class(array("wmk2020-card", "wmk2020-card-" . $i)); ?>>
			<header class="wmk2020-card-image-container">
				<?php the_post_thumbnail('full', array('class' => 'wmk2020-card-image')); ?>
			</header>
			<section class="wmk2020-card-content">
				<h2 class="wmk2020-card-title"><?php the_title(); ?></h2>
				<p class="wmk2020-card-excerpt"><?php echo(get_the_excerpt()); ?></p>
			</section>
		</div>
		<?php
		$i++;
	}
} else {
    esc_html_e('Jeszcze nic tu nie ma.');
}
?>
<?php get_footer(); ?>