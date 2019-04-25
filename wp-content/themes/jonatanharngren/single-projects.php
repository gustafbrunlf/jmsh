<?php while (have_posts()) : the_post(); ?>
<?php
$style = "";
if( $background_color = get_field('background_color') ) :
    $style .= 'background-color:' . $background_color . ';';
endif;
if( $text_color = get_field('text_color') ) :
    $style .= 'color:' . $text_color . ';';
endif;
?>
<div class="c-project" style="<?= $style; ?>">
    <div class="c-project__header">
        <?php get_template_part('templates/projects/project-header'); ?>
    </div>

    <?php if(false): ?>
    <div class="sidebar">
    	<ul class="sidebar__wrapper">
    	<?php foreach($blocks as $key => $block) : ?>
    		<?php $key++; ?>
    		<li data-block="<?= $key; ?>" class="sidebar__item<?= ( $key == 1 ) ? ' sidebar__item--active' : ''; ?>">0<?= $key; ?></li>
    	<?php endforeach; ?>
    	</ul>
    </div>
    <?php endif; ?>
    <div class="o-width-limiter">
        <h2 class="c-project__subheader"><?= get_the_title(); ?></h2>
        <?= the_content(); ?>

        <?php get_template_part('templates/projects/project-grid'); ?>
    </div>
</div>
<?php endwhile; ?>
