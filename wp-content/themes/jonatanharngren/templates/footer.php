<?php if ( get_field('sound', 'option') && is_page_template('template-main.php') ) : ?>
	<div id="sound-button">Sound</div>

	<audio id="sound" loop autoplay>
		 <source src="<?= get_field('sound', 'option'); ?>" type="audio/mpeg">
	</audio>
<?php endif; ?>

<footer class="footer">
  	<?php wp_nav_menu(); ?>
</footer>

<div class="popup">
	<div class="popup__wrapper" style="background-color: <?= get_field('background-color', 'option'); ?>; color: <?= get_field('text-color', 'option'); ?>;">
		<div class="popup__close"></div>
		<h4><?= get_field('title', 'option'); ?></h4>
		<div class="popup__email">
		<?php 
			if ( $emails = get_field('emails', 'option') ) : 
				foreach ($emails as $email) :
					echo '<a href="mailto:' . $email['link'] . '" style="color: ' . get_field('text-color', 'option') . ';border-bottom: 1px solid ' . get_field('text-color', 'option') . ';">' . $email['link'] . '</a>';
				endforeach;
			endif; 

			if( $instagram = get_field('instagram', 'option') ) : 
				echo '<a href="' . $instagram . '" target="_blank" style="color: ' . get_field('text-color', 'option') . ';border-bottom: 1px solid ' . get_field('text-color', 'option') . ';">Instagram</a>';
			endif;

			if( $facebook = get_field('facebook', 'option') ) : 
				echo '<a href="' . $facebook . '" target="_blank" style="color: ' . get_field('text-color', 'option') . ';border-bottom: 1px solid ' . get_field('text-color', 'option') . ';">Facebook</a>';
			endif;
		?>
		</div>
		<div class="popup__text">
			<?php the_field('text', 'option'); ?>
		</div>
	</div>
</div>

<div class="form__popup">
	<div class="form__wrapper">
		<div class="form__header">
    		<img src="">
		</div>
		<div class="form__close"></div>
		<?= do_shortcode('[contact-form-7 id="39" title="Customer form"]'); ?>
	</div>
</div>