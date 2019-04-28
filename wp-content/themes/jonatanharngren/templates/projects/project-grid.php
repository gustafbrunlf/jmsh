<?php if($grid = get_field('grid')): ?>
    <div class="o-grid">
        <?php foreach($grid as $component) : ?>
            <div class="o-grid__column c-project__image-wrapper" data-size="<?= $component['width']; ?>">
                <a href="<?= wp_get_attachment_image_src($component['image'], 'full')[0]; ?>" class="c-project__image">
                    <img src="<?= wp_get_attachment_image_src($component['image'], 'large')[0]; ?>" alt="<?= $component['image_text']; ?>">
                </a>
                <?php if($component['image_text']): ?>
                    <h3 class="c-project__image-title"><?= $component['image_text']; ?></h3>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
