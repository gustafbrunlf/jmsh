<?php
/**
 * Template Name: Start
 **/
?>

<?php 
	$pages = get_pages(array(
	    'meta_key' => '_wp_page_template',
	    'meta_value' => 'template-main.php'
	));
?>

<div class="start__logo-wrapper">
	<div class="start__close-logo"></div>
	<a href="<?= get_permalink($pages[0]->ID); ?>">
		<img src="<?=get_template_directory_uri()?>/dist/images/logofirstpage.png" class="start__logo">
	</a>
</div>