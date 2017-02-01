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

<a href="<?= get_permalink($pages[0]->ID); ?>" class="start-logo">
	<img src="<?=get_template_directory_uri()?>/dist/images/logowelcome.svg">
</a>