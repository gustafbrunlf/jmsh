<?php
/**
 * Template Name: Form
 **/
?>
<?php while (have_posts()) : the_post(); ?>

<div class="form-wrapper">
	<div class="form">
		<div class="form-list">
			<div class="form-header">
				<div class="form-title form-title-info"></div>
				<div class="form-title form-title-size">size</div>
				<div class="form-title form-title-qty">qty</div>
				<div class="form-title form-title-price">price</div>
			</div>
			<div class="form-body">
				<div class="form-data form-data-info">
					<img class="form-data-image" src="http://via.placeholder.com/150x150" alt="">
					<div class="form-data-wrapper">
						<h3>Produkttitel</h3>
						<p>produktinfo</p>
						<span>1400 sek</span>
					</div>
				</div>
				<div class="form-data form-data-size">
					<span class="form-data-size-item">s</span>
					<span class="form-data-size-item">m</span>
					<span class="form-data-size-item">L</span>
				</div>
				<div class="form-data form-data-qty">
					<input type="number">
					<input type="number">
					<input type="number">
				</div>
				<div class="form-data form-data-price">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<?= do_shortcode('[contact-form-7 id="39" title="Customer form"]'); ?>
	</div>
</div>

<?php endwhile; ?>