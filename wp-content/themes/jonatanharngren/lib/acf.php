<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_blocks',
		'title' => 'Blocks',
		'fields' => array (
			array (
				'key' => 'field_58a83e2b6f6b4',
				'label' => 'Block',
				'name' => 'block',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_58a83e466f6b5',
						'label' => 'Content',
						'name' => 'content',
						'type' => 'flexible_content',
						'column_width' => '',
						'layouts' => array (
							array (
								'label' => 'Fullbredd bild/video',
								'name' => 'header',
								'display' => 'row',
								'min' => '',
								'max' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_58a83ebc6f6b6',
										'label' => 'Background-image',
										'name' => 'background-image',
										'type' => 'image',
										'column_width' => '',
										'save_format' => 'id',
										'preview_size' => 'thumbnail',
										'library' => 'all',
									),
									array (
										'key' => 'field_5a1b05df552d1',
										'label' => 'Text',
										'name' => 'background-image-text',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'formatting' => 'html',
										'maxlength' => '',
									),
									array (
										'key' => 'field_5a1b08ff6f090',
										'label' => 'Text-color',
										'name' => 'background-image-text-color',
										'type' => 'color_picker',
										'column_width' => '',
										'default_value' => '',
									),
								),
							),
							array (
								'label' => 'Två kolumn',
								'name' => 'two_column',
								'display' => 'row',
								'min' => '',
								'max' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_58b2b5ea3aa38',
										'label' => 'Bakgrundsfärg',
										'name' => 'background-color',
										'type' => 'color_picker',
										'column_width' => '',
										'default_value' => '',
									),
									array (
										'key' => 'field_58bf19550babb',
										'label' => 'Textfärg',
										'name' => 'text-color',
										'type' => 'color_picker',
										'column_width' => '',
										'default_value' => '',
									),
									array (
										'key' => 'field_58b2b4e4c7039',
										'label' => 'Sidinfo',
										'name' => 'siteinfo',
										'type' => 'wysiwyg',
										'column_width' => '',
										'default_value' => '',
										'toolbar' => 'full',
										'media_upload' => 'yes',
									),
									array (
										'key' => 'field_58b2b3bd31069',
										'label' => 'Kolumn 1 - bilder',
										'name' => 'pictures-column-one',
										'type' => 'repeater',
										'column_width' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_58b2c68383b85',
												'label' => 'Padding',
												'name' => 'padding',
												'type' => 'true_false',
												'column_width' => '',
												'message' => '',
												'default_value' => 0,
											),
											array (
												'key' => 'field_58b2b41f3106b',
												'label' => 'Bild',
												'name' => 'image',
												'type' => 'image',
												'column_width' => '',
												'save_format' => 'id',
												'preview_size' => 'thumbnail',
												'library' => 'all',
											),
											array (
												'key' => 'field_58b2b42e3106c',
												'label' => 'Bildtext',
												'name' => 'bylinetext',
												'type' => 'text',
												'column_width' => '',
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'formatting' => 'html',
												'maxlength' => '',
											),
											array (
												'key' => 'field_5a1b0ae915211',
												'label' => 'Använda bildspel',
												'name' => 'use_slider',
												'type' => 'true_false',
												'column_width' => '',
												'message' => '',
												'default_value' => 0,
											),
											array (
												'key' => 'field_5a1b0ad715210',
												'label' => 'Bildspel',
												'name' => 'slider',
												'type' => 'repeater',
												'conditional_logic' => array (
													'status' => 1,
													'rules' => array (
														array (
															'field' => 'field_5a1b0ae915211',
															'operator' => '==',
															'value' => '1',
														),
													),
													'allorany' => 'all',
												),
												'column_width' => '',
												'sub_fields' => array (
													array (
														'key' => 'field_5a1b0b1615212',
														'label' => 'Bild',
														'name' => 'slider-image',
														'type' => 'image',
														'column_width' => '',
														'save_format' => 'id',
														'preview_size' => 'thumbnail',
														'library' => 'all',
													),
												),
												'row_min' => '',
												'row_limit' => '',
												'layout' => 'table',
												'button_label' => 'Add Row',
											),
										),
										'row_min' => '',
										'row_limit' => '',
										'layout' => 'row',
										'button_label' => 'Add Row',
									),
									array (
										'key' => 'field_58b2b4043106a',
										'label' => 'Kolumn 2 - bilder',
										'name' => 'pictures-column-two',
										'type' => 'repeater',
										'column_width' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_58b2c69883b86',
												'label' => 'Padding',
												'name' => 'padding',
												'type' => 'true_false',
												'column_width' => '',
												'message' => '',
												'default_value' => 0,
											),
											array (
												'key' => 'field_58b2b44e3106d',
												'label' => 'Bild',
												'name' => 'image',
												'type' => 'image',
												'column_width' => '',
												'save_format' => 'id',
												'preview_size' => 'thumbnail',
												'library' => 'all',
											),
											array (
												'key' => 'field_58b2b45b3106e',
												'label' => 'Bildtext',
												'name' => 'bylinetext',
												'type' => 'text',
												'column_width' => '',
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'formatting' => 'html',
												'maxlength' => '',
											),
											array (
												'key' => 'field_5a1b14e30cd15',
												'label' => 'Använda bildspel',
												'name' => 'use_slider',
												'type' => 'true_false',
												'column_width' => '',
												'message' => '',
												'default_value' => 0,
											),
											array (
												'key' => 'field_5a1b14f20cd16',
												'label' => 'Bildspel',
												'name' => 'slider',
												'type' => 'repeater',
												'conditional_logic' => array (
													'status' => 1,
													'rules' => array (
														array (
															'field' => 'field_5a1b14e30cd15',
															'operator' => '==',
															'value' => '1',
														),
													),
													'allorany' => 'all',
												),
												'column_width' => '',
												'sub_fields' => array (
													array (
														'key' => 'field_5a1b14fe0cd17',
														'label' => 'Bild',
														'name' => 'slider-image',
														'type' => 'image',
														'column_width' => '',
														'save_format' => 'id',
														'preview_size' => 'thumbnail',
														'library' => 'all',
													),
												),
												'row_min' => '',
												'row_limit' => '',
												'layout' => 'table',
												'button_label' => 'Add Row',
											),
										),
										'row_min' => '',
										'row_limit' => '',
										'layout' => 'row',
										'button_label' => 'Add Row',
									),
								),
							),
						),
						'button_label' => 'Add Row',
						'min' => '',
						'max' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-main.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_options',
		'title' => 'Options',
		'fields' => array (
			array (
				'key' => 'field_58ced719bed64',
				'label' => 'Popup',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_58cae81676049',
				'label' => 'Bakgrundsfärg',
				'name' => 'background-color',
				'type' => 'color_picker',
				'default_value' => '',
			),
			array (
				'key' => 'field_58cae8237604a',
				'label' => 'Textfärg',
				'name' => 'text-color',
				'type' => 'color_picker',
				'default_value' => '',
			),
			array (
				'key' => 'field_58cae70728d52',
				'label' => 'Titel',
				'name' => 'title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58caec696ddb4',
				'label' => 'E-mail adresser',
				'name' => 'emails',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_58caec836ddb5',
						'label' => 'link',
						'name' => 'link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_58cae6b9152e1',
				'label' => 'Text',
				'name' => 'text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_58ced727bed65',
				'label' => 'Ljud',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_58ced732bed66',
				'label' => 'sound',
				'name' => 'sound',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'all',
			),
			array (
				'key' => 'field_58d418d13e449',
				'label' => 'Sociala fasoner',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_58d418ea3e44a',
				'label' => 'Instagram',
				'name' => 'instagram',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58d418ff3e44b',
				'label' => 'Facebook',
				'name' => 'facebook',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_page',
		'title' => 'Page',
		'fields' => array (
			array (
				'key' => 'field_58cadcac18c58',
				'label' => 'Bakgrundbild',
				'name' => 'background-image',
				'type' => 'image',
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58caf95bc483d',
				'label' => 'Bakgrundsfärg',
				'name' => 'background-color',
				'type' => 'color_picker',
				'default_value' => '',
			),
			array (
				'key' => 'field_58cae250ddb9e',
				'label' => 'Textfärg',
				'name' => 'text-color',
				'type' => 'color_picker',
				'default_value' => '',
			),
			array (
				'key' => 'field_58cadfb5bbb48',
				'label' => 'Profilbild',
				'name' => 'profile-image',
				'type' => 'image',
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_start-page',
		'title' => 'Start page',
		'fields' => array (
			array (
				'key' => 'field_58d41a30b6102',
				'label' => 'Logotyp',
				'name' => 'logotyp',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58d409b9d931c',
				'label' => 'Bakgrundsbild',
				'name' => 'background-image',
				'type' => 'image',
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58d409ccd931d',
				'label' => 'Bakgrundsfärg',
				'name' => 'background-color',
				'type' => 'color_picker',
				'default_value' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-start.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
}

