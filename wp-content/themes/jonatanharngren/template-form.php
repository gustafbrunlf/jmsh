<?php
/**
 * Template Name: Form
 **/
?>
<?php while (have_posts()) : the_post(); ?>

<div class="form-wrapper">
	<?= do_shortcode('[contact-form-7 id="39" title="Customer form"]'); ?>
</div>

<?php endwhile; ?>