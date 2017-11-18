<?php
/**
 * Template Name: Form
 **/
?>
<?php while (have_posts()) : the_post(); ?>

<div class="form-wrapper">
	<div class="form">
		<!-- <div class="form-list">
			<div class="form-header">
				<div class="form-title form-title-info"></div>
				<div class="form-title form-title-size">size</div>
				<div class="form-title form-title-qty">qty</div>
				<div class="form-title form-title-price">price</div>
			</div>
			<div class="form-body">
				<div class="form-container">
					<div class="form-data form-data-info">
						<img class="form-data-image" src="http://via.placeholder.com/150x150" alt="">
						<div class="form-data-wrapper">
							<h4>Produkttitel</h4>
							<p>produktinfo</p>
							<span>1400 sek</span>
						</div>
					</div>
					<div class="form-data form-data-size">
						<div class="form-data-size-item"><span>s</span></div>
						<div class="form-data-size-item"><span>m</span></div>
						<div class="form-data-size-item"><span>L</span></div>
					</div>
					<div class="form-data form-data-qty">
						<div class="form-data-qty-input">
							<input type="number">
						</div>
						<div class="form-data-qty-input">
							<input type="number">
						</div>
						<div class="form-data-qty-input">
							<input type="number">
						</div>
					</div>
					<div class="form-data form-data-price">
						<div class="form-data-price-container">
							<span></span>
						</div>
						<div class="form-data-price-container">
							<span></span>
						</div>
						<div class="form-data-price-container">
							<span></span>
						</div>
					</div>
				</div>
				<div class="form-container">
					<div class="form-data form-data-info">
						<img class="form-data-image" src="http://via.placeholder.com/150x150" alt="">
						<div class="form-data-wrapper">
							<h4>Produkttitel</h4>
							<p>produktinfo</p>
							<span>1700 sek</span>
						</div>
					</div>
					<div class="form-data form-data-size">
						<div class="form-data-size-item"><span>s</span></div>
						<div class="form-data-size-item"><span>m</span></div>
						<div class="form-data-size-item"><span>L</span></div>
					</div>
					<div class="form-data form-data-qty">
						<div class="form-data-qty-input">
							<input type="number">
						</div>
						<div class="form-data-qty-input">
							<input type="number">
						</div>
						<div class="form-data-qty-input">
							<input type="number">
						</div>
					</div>
					<div class="form-data form-data-price">
						<div class="form-data-price-container">
							<span></span>
						</div>
						<div class="form-data-price-container">
							<span></span>
						</div>
						<div class="form-data-price-container">
							<span></span>
						</div>
					</div>
				</div>
			</div>
			<div class="form-total">
				<div class="form-title form-title-info"></div>
				<div class="form-title form-title-size">order total:</div>
				<div class="form-title form-title-qty">
					<div class="form-total-title">qty</div>
					<div class="form-total-qty-sum"><input type="number"></div>
				</div>
				<div class="form-title form-title-price">
					<div class="form-total-title">price</div>
					<div class="form-total-price-sum"><input type="number"></div>
				</div>
			</div>
		</div> -->
		<?= do_shortcode('[contact-form-7 id="39" title="Customer form"]'); ?>
	</div>
</div>

<?php endwhile; ?>