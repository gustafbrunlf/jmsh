<?php
/**
 * Template Name: Main
 **/
?>

<?php while (have_posts()) : the_post(); ?>

<?php $blocks = get_field('block'); ?>

<div class="block__wrapper">
	<?php 
	foreach($blocks as $key => $block) : 
		$key++; ?>
		<div class="block__container<?= ( $key == 1 ) ? ' block__container--active' : ''; ?>" data-block="<?= $key; ?>">
		<?php foreach($block['content'] as $block) : 
			$style = "";
			if( $block['background-image'] ) : 
				$style = 'background-image: url(' . wp_get_attachment_image_src( $block['background-image'], 'large' )[0] . ');';
			elseif( $block['background-color'] ) :
				$style .= 'background-color:' . $block['background-color'] . ';';
			endif; 

			?>

			<section class="block" style="<?= $style; ?>">
				<h1><?= $key; ?></h1>
			</section>
		<?php endforeach; ?>
		</div>
	<?php endforeach; ?>
</div>

<div class="sidebar">
	<ul class="sidebar__wrapper">
	<?php foreach($blocks as $key => $block) : ?>
		<?php $key++; ?>
		<li data-block="<?= $key; ?>" class="sidebar__item<?= ( $key == 1 ) ? ' sidebar__item--active' : ''; ?>">0<?= $key; ?></li>
	<?php endforeach; ?>
	</ul>
</div>

<?php endwhile; ?>