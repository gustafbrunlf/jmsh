<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5cc8858042de6',
	'title' => 'Start 2.0',
	'fields' => array(
		array(
			'key' => 'field_5cc88592e4d1a',
			'label' => 'Project',
			'name' => 'project',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'projects',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'template-new-start.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5cc1eb7239fbd',
	'title' => 'Project',
	'fields' => array(
		array(
			'key' => 'field_5cffe0761d6e2',
			'label' => 'Meny namn',
			'name' => 'menu_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '30',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5de6246f2ce76',
			'label' => 'Meny färg',
			'name' => 'menu_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5cc1ef1fe1b39',
			'label' => 'Video/image full width',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5cc1ef74e1b3a',
			'label' => 'Image',
			'name' => 'fullwidth_media',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5ced8e7df580e',
			'label' => 'Video',
			'name' => 'fullwidth_video',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5cc881799a7a2',
			'label' => 'Full width layout',
			'name' => 'full_width_layout',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5cc1f06a8d5e7',
			'label' => 'Text',
			'name' => 'fullwidth_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5cc1f04f8d5e6',
			'label' => 'Text color',
			'name' => 'fullwidth_text_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5cc88ea22c5ef',
			'label' => 'Background color',
			'name' => 'fullwidth_background_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5cc1f00be1b3c',
			'label' => 'Grid layout',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5cc1eb7b35d49',
			'label' => 'Grid',
			'name' => 'grid',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5cc1ec5cdf12e',
					'label' => 'Marginal topp och ner mellan grids',
					'name' => 'margin_top_bottom',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'lg' => 'Large',
						'sm' => 'Small',
					),
					'default_value' => array(
						0 => 'lg',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_5cd1725ab7847',
					'label' => 'Marginal mellan bilder',
					'name' => 'margin_images',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'lg' => 'Large',
						'sm' => 'Small',
					),
					'default_value' => array(
						0 => 'lg',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_5cd300e13ca18',
					'label' => 'Fullbredd',
					'name' => 'fullwidth_grid',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_5cd1718fb7843',
					'label' => 'Row',
					'name' => 'row',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => '',
					'sub_fields' => array(
						array(
							'key' => 'field_5cd171b2b7844',
							'label' => 'Bild',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'id',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5cd171c1b7845',
							'label' => 'Bildtext',
							'name' => 'image_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5cd171d1b7846',
							'label' => 'Bredd',
							'name' => 'width',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								12 => '100%',
								6 => '50%',
								4 => '33%',
								3 => '25%',
								2 => '20%',
							),
							'default_value' => array(
								0 => 12,
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'return_format' => 'value',
							'ajax' => 0,
							'placeholder' => '',
						),
					),
				),
			),
		),
		array(
			'key' => 'field_5cc1f6d923b92',
			'label' => 'Styling',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5cc1f8b823b94',
			'label' => 'Text color',
			'name' => 'text_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5cc1f6e123b93',
			'label' => 'Background color',
			'name' => 'background_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'projects',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5cbe08210edfa',
	'title' => 'Options',
	'fields' => array(
		array(
			'key' => 'field_58ced719bed64',
			'label' => 'Popup',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_58cae81676049',
			'label' => 'Bakgrundsfärg',
			'name' => 'background-color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_58cae8237604a',
			'label' => 'Textfärg',
			'name' => 'text-color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_58cae70728d52',
			'label' => 'Titel',
			'name' => 'title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
		),
		array(
			'key' => 'field_58caec696ddb4',
			'label' => 'E-mail adresser',
			'name' => 'emails',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'row_min' => '',
			'row_limit' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5cd17aba3e8e8',
					'label' => 'label',
					'name' => 'label',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_58caec836ddb5',
					'label' => 'link',
					'name' => 'link',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
			),
		),
		array(
			'key' => 'field_58cae6b9152e1',
			'label' => 'Text',
			'name' => 'text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'toolbar' => 'full',
			'media_upload' => 1,
			'tabs' => 'all',
			'delay' => 0,
		),
		array(
			'key' => 'field_58ced727bed65',
			'label' => 'Ljud',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_58ced732bed66',
			'label' => 'sound',
			'name' => 'sound',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'library' => 'all',
			'return_format' => 'url',
			'min_size' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array(
			'key' => 'field_58d418d13e449',
			'label' => 'Sociala fasoner',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_58d418ea3e44a',
			'label' => 'Instagram',
			'name' => 'instagram',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
		),
		array(
			'key' => 'field_58d418ff3e44b',
			'label' => 'Facebook',
			'name' => 'facebook',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5cbe082120f10',
	'title' => 'Page',
	'fields' => array(
		array(
			'key' => 'field_58cadcac18c58',
			'label' => 'Bakgrundbild',
			'name' => 'background-image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'return_format' => 'id',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array(
			'key' => 'field_58caf95bc483d',
			'label' => 'Bakgrundsfärg',
			'name' => 'background-color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_58cae250ddb9e',
			'label' => 'Textfärg',
			'name' => 'text-color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_58cadfb5bbb48',
			'label' => 'Profilbild',
			'name' => 'profile-image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'return_format' => 'id',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
	),
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5cbe082128444',
	'title' => 'Start page',
	'fields' => array(
		array(
			'key' => 'field_58d41a30b6102',
			'label' => 'Logotyp',
			'name' => 'logotyp',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'return_format' => 'url',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array(
			'key' => 'field_58d409b9d931c',
			'label' => 'Bakgrundsbild',
			'name' => 'background-image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'return_format' => 'id',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array(
			'key' => 'field_58d409ccd931d',
			'label' => 'Bakgrundsfärg',
			'name' => 'background-color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-start.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5cbe0820e17a3',
	'title' => 'Blocks',
	'fields' => array(
		array(
			'key' => 'field_58a83e2b6f6b4',
			'label' => 'Block',
			'name' => 'block',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'row_min' => '',
			'row_limit' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_58a83e466f6b5',
					'label' => 'Content',
					'name' => 'content',
					'type' => 'flexible_content',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layouts' => array(
						array(
							'key' => 'layout_5cbe0820e627b',
							'name' => 'header',
							'label' => 'Fullbredd bild/video',
							'display' => 'row',
							'sub_fields' => array(
								array(
									'key' => 'field_58a83ebc6f6b6',
									'label' => 'Background-image',
									'name' => 'background-image',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'preview_size' => 'thumbnail',
									'library' => 'all',
									'return_format' => 'id',
									'min_width' => 0,
									'min_height' => 0,
									'min_size' => 0,
									'max_width' => 0,
									'max_height' => 0,
									'max_size' => 0,
									'mime_types' => '',
								),
								array(
									'key' => 'field_5a1b05df552d1',
									'label' => 'Text',
									'name' => 'background-image-text',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'formatting' => 'html',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5a1b08ff6f090',
									'label' => 'Text-color',
									'name' => 'background-image-text-color',
									'type' => 'color_picker',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
						array(
							'key' => 'layout_5cbe0820e629d',
							'name' => 'two_column',
							'label' => 'Två kolumn',
							'display' => 'row',
							'sub_fields' => array(
								array(
									'key' => 'field_58b2b5ea3aa38',
									'label' => 'Bakgrundsfärg',
									'name' => 'background-color',
									'type' => 'color_picker',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
								),
								array(
									'key' => 'field_58bf19550babb',
									'label' => 'Textfärg',
									'name' => 'text-color',
									'type' => 'color_picker',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
								),
								array(
									'key' => 'field_58b2b4e4c7039',
									'label' => 'Sidinfo',
									'name' => 'siteinfo',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'toolbar' => 'full',
									'media_upload' => 1,
									'tabs' => 'all',
									'delay' => 0,
								),
								array(
									'key' => 'field_58b2b3bd31069',
									'label' => 'Kolumn 1 - bilder',
									'name' => 'pictures-column-one',
									'type' => 'repeater',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'row_min' => '',
									'row_limit' => '',
									'layout' => 'row',
									'button_label' => 'Add Row',
									'min' => 0,
									'max' => 0,
									'collapsed' => '',
									'sub_fields' => array(
										array(
											'key' => 'field_58b2c68383b85',
											'label' => 'Padding',
											'name' => 'padding',
											'type' => 'true_false',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'message' => '',
											'default_value' => 0,
											'ui' => 0,
											'ui_on_text' => '',
											'ui_off_text' => '',
										),
										array(
											'key' => 'field_58b2b41f3106b',
											'label' => 'Bild',
											'name' => 'image',
											'type' => 'image',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'preview_size' => 'thumbnail',
											'library' => 'all',
											'return_format' => 'id',
											'min_width' => 0,
											'min_height' => 0,
											'min_size' => 0,
											'max_width' => 0,
											'max_height' => 0,
											'max_size' => 0,
											'mime_types' => '',
										),
										array(
											'key' => 'field_58b2b42e3106c',
											'label' => 'Bildtext',
											'name' => 'bylinetext',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'formatting' => 'html',
											'maxlength' => '',
										),
										array(
											'key' => 'field_5a1b0ae915211',
											'label' => 'Använda bildspel',
											'name' => 'use_slider',
											'type' => 'true_false',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'message' => '',
											'default_value' => 0,
											'ui' => 0,
											'ui_on_text' => '',
											'ui_off_text' => '',
										),
										array(
											'key' => 'field_5a1b0ad715210',
											'label' => 'Bildspel',
											'name' => 'slider',
											'type' => 'repeater',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => array(
												array(
													array(
														'field' => 'field_5a1b0ae915211',
														'operator' => '==',
														'value' => '1',
													),
												),
											),
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'row_min' => '',
											'row_limit' => '',
											'layout' => 'table',
											'button_label' => 'Add Row',
											'min' => 0,
											'max' => 0,
											'collapsed' => '',
											'sub_fields' => array(
												array(
													'key' => 'field_5a1b0b1615212',
													'label' => 'Bild',
													'name' => 'slider-image',
													'type' => 'image',
													'instructions' => '',
													'required' => 0,
													'conditional_logic' => 0,
													'wrapper' => array(
														'width' => '',
														'class' => '',
														'id' => '',
													),
													'preview_size' => 'thumbnail',
													'library' => 'all',
													'return_format' => 'id',
													'min_width' => 0,
													'min_height' => 0,
													'min_size' => 0,
													'max_width' => 0,
													'max_height' => 0,
													'max_size' => 0,
													'mime_types' => '',
												),
											),
										),
									),
								),
								array(
									'key' => 'field_58b2b4043106a',
									'label' => 'Kolumn 2 - bilder',
									'name' => 'pictures-column-two',
									'type' => 'repeater',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'row_min' => '',
									'row_limit' => '',
									'layout' => 'row',
									'button_label' => 'Add Row',
									'min' => 0,
									'max' => 0,
									'collapsed' => '',
									'sub_fields' => array(
										array(
											'key' => 'field_58b2c69883b86',
											'label' => 'Padding',
											'name' => 'padding',
											'type' => 'true_false',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'message' => '',
											'default_value' => 0,
											'ui' => 0,
											'ui_on_text' => '',
											'ui_off_text' => '',
										),
										array(
											'key' => 'field_58b2b44e3106d',
											'label' => 'Bild',
											'name' => 'image',
											'type' => 'image',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'preview_size' => 'thumbnail',
											'library' => 'all',
											'return_format' => 'id',
											'min_width' => 0,
											'min_height' => 0,
											'min_size' => 0,
											'max_width' => 0,
											'max_height' => 0,
											'max_size' => 0,
											'mime_types' => '',
										),
										array(
											'key' => 'field_58b2b45b3106e',
											'label' => 'Bildtext',
											'name' => 'bylinetext',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'formatting' => 'html',
											'maxlength' => '',
										),
										array(
											'key' => 'field_5a1b14e30cd15',
											'label' => 'Använda bildspel',
											'name' => 'use_slider',
											'type' => 'true_false',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'message' => '',
											'default_value' => 0,
											'ui' => 0,
											'ui_on_text' => '',
											'ui_off_text' => '',
										),
										array(
											'key' => 'field_5a1b14f20cd16',
											'label' => 'Bildspel',
											'name' => 'slider',
											'type' => 'repeater',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => array(
												array(
													array(
														'field' => 'field_5a1b14e30cd15',
														'operator' => '==',
														'value' => '1',
													),
												),
											),
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'row_min' => '',
											'row_limit' => '',
											'layout' => 'table',
											'button_label' => 'Add Row',
											'min' => 0,
											'max' => 0,
											'collapsed' => '',
											'sub_fields' => array(
												array(
													'key' => 'field_5a1b14fe0cd17',
													'label' => 'Bild',
													'name' => 'slider-image',
													'type' => 'image',
													'instructions' => '',
													'required' => 0,
													'conditional_logic' => 0,
													'wrapper' => array(
														'width' => '',
														'class' => '',
														'id' => '',
													),
													'preview_size' => 'thumbnail',
													'library' => 'all',
													'return_format' => 'id',
													'min_width' => 0,
													'min_height' => 0,
													'min_size' => 0,
													'max_width' => 0,
													'max_height' => 0,
													'max_size' => 0,
													'mime_types' => '',
												),
											),
										),
									),
								),
							),
							'min' => '',
							'max' => '',
						),
					),
					'button_label' => 'Add Row',
					'min' => '',
					'max' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-main.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

endif;
