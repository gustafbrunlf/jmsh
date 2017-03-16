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
					echo '<span style="color: ' . get_field('text-color', 'option') . ';">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </span>';
				endforeach;
			endif; 
		?>
		</div>
		<?php the_field('text', 'option'); ?>
	</div>
</div>