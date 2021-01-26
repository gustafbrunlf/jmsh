<?php while (have_posts()) : the_post(); ?>
<?php
	$style = "";
	if( $background_image = get_field('background-image') ) :
		$style = 'background-image: url(' . wp_get_attachment_image_src( $background_image, 'large' )[0] . ');';
	elseif( $background_color = get_field('background-color') ) :
		$style .= 'background-color:' . $background_color . ';';
	endif;

	$profile_image = get_field('profile-image');

	$color = get_field('menu_color', get_the_id()) ? ' style="color:' . get_field('menu_color', get_the_id()) . ';"' : '';
?>
<header class="f-header" role="banner">
    <div class="f-header__logo-wrapper">
    	<div class="f-header__close-logo"></div>
        <a href="<?= get_home_url(); ?>" class="f-header__logo">
            <?php if(get_field('logo', get_the_id())) : ?>
                <img src="<?= wp_get_attachment_image_src(get_field('logo', get_the_id()), 'full')[0]; ?>">
            <?php else : ?>
               <img src="<?=get_template_directory_uri()?>/dist/images/logo-jonatan.png">
            <?php endif; ?>
        </a>
    </div>
    <?php if($color): ?>
        <div class="f-header__menu"<?= $color; ?>>
    <?php endif; ?>
        <?php wp_nav_menu(); ?>
    <?php if($color): ?>
        </div>
    <?php endif; ?>
</header>
<section class="block" style="<?= $style; ?>">

	<div class="about-block">

		<?php if( $profile_image ) : ?>
			<div class="about-block__row">
		<?php endif; ?>

			<?php if( $profile_image ) : ?>
				<div class="about-block__image">
					<div class="about-block__close"></div>
					<img src="<?= wp_get_attachment_image_src( $profile_image, 'large' )[0]; ?>" alt="">
				</div>
			<?php endif; ?>

			<div class="about-block__text<?= (( $profile_image ) ? ' about-block__textcol' : ''); ?>"<?= (( $text = get_field('text-color') ) ? 'style="color:' . $text . '"' : ''); ?>>
				<?php the_content(); ?>
			</div>

		<?php if( $profile_image ) : ?>
			</div>
		<?php endif; ?>
	</div>

</section>
<?php endwhile; ?>
