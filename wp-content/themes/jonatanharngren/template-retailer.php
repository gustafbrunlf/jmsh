<?php
/**
 * Template Name: Retailer
 **/
?>
<?php while (have_posts()) : the_post(); ?>

<div class="retailer__wrapper">
	<div class="retailer__header">
		<img src="<?=get_template_directory_uri()?>/dist/images/logoform.svg">
	</div>
	<?php the_content(); ?>
</div>

<?php endwhile; ?>