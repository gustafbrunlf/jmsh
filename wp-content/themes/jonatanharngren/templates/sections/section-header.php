<?php 
	$style = "";
	if( $background_image = get_sub_field('background-image') ) : 
		$style = 'background-image: url(' . wp_get_attachment_image_src( $background_image, 'large' )[0] . ');';
	elseif( $background_color = get_sub_field('background-color') ) :
		$style .= 'background-color:' . $background_color . ';';
	endif;
?>
<section class="block" style="<?= $style; ?>"></section>