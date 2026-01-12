<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_theme_settings',
	'title' => 'Theme General Settings',
	'fields' => array(
		/* Tab: General Info */
		array(
			'key' => 'field_tab_general',
			'label' => 'General Info',
			'name' => '',
			'type' => 'tab',
		),
		array(
			'key' => 'field_logo',
			'label' => 'Website Logo',
			'name' => 'logo',
			'type' => 'image',
			'return_format' => 'url',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_contact_phone',
			'label' => 'Contact Phone',
			'name' => 'contact_phone',
			'type' => 'text',
		),
		array(
			'key' => 'field_contact_email',
			'label' => 'Contact Email',
			'name' => 'contact_email',
			'type' => 'email',
		),
		array(
			'key' => 'field_social_links',
			'label' => 'Social Media Links',
			'name' => 'social_links',
			'type' => 'repeater',
			'button_label' => 'Add Social Link',
			'sub_fields' => array(
				array(
					'key' => 'field_social_icon',
					'label' => 'Icon Class (FontAwesome)',
					'name' => 'icon_class',
					'type' => 'text',
					'placeholder' => 'fa fa-facebook',
				),
				array(
					'key' => 'field_social_url',
					'label' => 'URL',
					'name' => 'url',
					'type' => 'url',
				),
			),
		),

		/* Tab: Hero Section (Moved from Home Page) */
		array(
			'key' => 'field_tab_hero',
			'label' => 'Home: Hero Section',
			'name' => '',
			'type' => 'tab',
		),
		array(
			'key' => 'field_hero_slider',
			'label' => 'Hero Slider',
			'name' => 'hero_slider',
			'type' => 'repeater',
			'button_label' => 'Add Slide',
			'sub_fields' => array(
				array(
					'key' => 'field_hero_image',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'url',
					'preview_size' => 'medium',
				),
				array(
					'key' => 'field_hero_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
				),
				array(
					'key' => 'field_hero_subtitle',
					'label' => 'Subtitle',
					'name' => 'subtitle',
					'type' => 'textarea',
					'rows' => 3,
				),
				array(
					'key' => 'field_hero_btn_text',
					'label' => 'Button Text',
					'name' => 'button_text',
					'type' => 'text',
				),
				array(
					'key' => 'field_hero_btn_link',
					'label' => 'Button Link',
					'name' => 'button_link',
					'type' => 'url',
				),
			),
		),

		/* Tab: About Section (Moved from Home Page) */
		array(
			'key' => 'field_tab_about',
			'label' => 'Home: About Section',
			'name' => '',
			'type' => 'tab',
		),
		array(
			'key' => 'field_about_group',
			'label' => 'About Content',
			'name' => 'about_section',
			'type' => 'group',
			'sub_fields' => array(
				array(
					'key' => 'field_about_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
				),
				array(
					'key' => 'field_about_content',
					'label' => 'Content',
					'name' => 'content',
					'type' => 'wysiwyg',
				),
				array(
					'key' => 'field_about_image',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'url',
				),
			),
		),

		/* Tab: Partners Section (Global/Home) */
		array(
			'key' => 'field_tab_partners',
			'label' => 'Home: Partners Section',
			'name' => '',
			'type' => 'tab',
		),
		array(
			'key' => 'field_partners_logos',
			'label' => 'Partners Logos',
			'name' => 'partners_logos',
			'type' => 'repeater',
			'button_label' => 'Add Partner',
			'sub_fields' => array(
				array(
					'key' => 'field_partner_logo',
					'label' => 'Logo',
					'name' => 'logo',
					'type' => 'image',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_partner_url',
					'label' => 'URL',
					'name' => 'url',
					'type' => 'url',
				),
			),
		),

		/* Tab: Footer Settings */
		array(
			'key' => 'field_tab_footer',
			'label' => 'Footer Settings',
			'name' => '',
			'type' => 'tab',
		),
		array(
			'key' => 'field_footer_about_text',
			'label' => 'Footer About Text',
			'name' => 'footer_about_text',
			'type' => 'textarea',
			'rows' => 4,
		),
		array(
			'key' => 'field_footer_copyright',
			'label' => 'Copyright Text',
			'name' => 'footer_copyright',
			'type' => 'text',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
));

endif;
