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
					echo '<a style="color: ' . get_field('text-color', 'option') . ';" href="mailto:' . $email['link'] . '">' . $email['link'] . '</a>';
				endforeach;
			endif; 

			if( $instagram = get_field('instagram', 'option') ) : 
				echo '<a href="' . $instagram . '" target="_blank">Instagram</a>';
			endif;

			if( $facebook = get_field('facebook', 'option') ) : 
				echo '<a href="' . $facebook . '" target="_blank">Facebook</a>';
			endif;
		?>
		</div>
		<div class="popup__text">
			<?php the_field('text', 'option'); ?>
		</div>
	</div>
</div>