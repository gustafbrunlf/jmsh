<?php
	$style = "";
	if( $background_image = get_field('fullwidth_media') ) :
		$style = 'background-image: url(' . wp_get_attachment_image_src( $background_image, 'full-size' )[0] . ');';
    endif;

	if($background_image_text = get_field('fullwidth_text') ) :
		$color = get_field('fullwidth_text_color');
        $title = $background_image_text;
    else :
        $title = '<span class="t-visually-hidden">' . get_the_title() . '</span>';
        $color = '#000';
	endif;

    $text = '<h1 class="c-project-header__title" style="color:' . $color . '">' . $title . '</h1>';

?>
<div class="c-project-header__content" style="<?= $style; ?>"><?= $text; ?></div>
