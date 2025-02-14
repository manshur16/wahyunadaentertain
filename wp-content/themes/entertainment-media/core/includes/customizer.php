<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'entertainment_media_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'entertainment-media' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'entertainment_media_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'entertainment-media' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'entertainment-media' ),
			'off' => esc_html__( 'Disable', 'entertainment-media' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'entertainment_media_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'entertainment-media' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'entertainment-media' ),
			'off' => esc_html__( 'Disable', 'entertainment-media' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'entertainment_media_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'entertainment-media' ),
	) );

	Kirki::add_section( 'entertainment_media_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'entertainment-media' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_all_headings_typography',
		'section'     => 'entertainment_media_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'entertainment_media_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'entertainment-media' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'entertainment-media' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'entertainment-media' ),
		'section'     => 'entertainment_media_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_body_content_typography',
		'section'     => 'entertainment_media_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'entertainment_media_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'entertainment-media' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'entertainment-media' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'entertainment-media' ),
		'section'     => 'entertainment_media_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'entertainment_media_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'entertainment-media' ),
	) );

	// Additional Settings

	Kirki::add_section( 'entertainment_media_section_addtional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'entertainment-media' ),
	    'description'    => esc_html__( 'Scroll To Top', 'entertainment-media' ),
	    'panel'          => 'entertainment_media_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'entertainment_media_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'entertainment-media' ),
		'section'     => 'entertainment_media_section_addtional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_entertainment_media',
		'label'       => esc_html__( 'Menus Text Transform', 'entertainment-media' ),
		'section'     => 'entertainment_media_section_addtional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'entertainment-media' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'entertainment-media' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'entertainment-media' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'entertainment-media' ),

		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'entertainment_media_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'entertainment-media' ),
		'section'     => 'entertainment_media_section_addtional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// Woocommerce Settings

	Kirki::add_section( 'entertainment_media_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'entertainment-media' ),
			'description'    => esc_html__( 'Shop Page', 'entertainment-media' ),
			'panel'          => 'entertainment_media_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'entertainment_media_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'entertainment-media' ),
		'section'     => 'entertainment_media_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'entertainment_media_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'entertainment-media' ),
		'section'     => 'entertainment_media_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'entertainment_media_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'entertainment-media' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'entertainment-media' ),
	    'panel'          => 'entertainment_media_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_enable_post_heading',
		'section'     => 'entertainment_media_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'entertainment_media_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'entertainment-media' ),
		'section'     => 'entertainment_media_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'entertainment-media' ),
			'off' => esc_html__( 'Disable', 'entertainment-media' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'entertainment_media_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'entertainment-media' ),
		'section'     => 'entertainment_media_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'entertainment-media' ),
			'off' => esc_html__( 'Disable', 'entertainment-media' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'entertainment_media_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'entertainment-media' ),
		'section'     => 'entertainment_media_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'entertainment_media_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'entertainment-media' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'entertainment-media' ),
	    'panel'          => 'entertainment_media_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_phone_number_heading',
		'section'     => 'entertainment_media_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sign In Button', 'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'entertainment-media' ),
		'settings' => 'entertainment_media_sign_in_btn_text',
		'section'  => 'entertainment_media_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    => esc_html__( 'Button Link', 'entertainment-media' ),
		'settings' => 'entertainment_media_sign_in_btn_link',
		'section'  => 'entertainment_media_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_enable_search',
		'section'     => 'entertainment_media_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'entertainment_media_search_box_enable',
		'section'     => 'entertainment_media_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'entertainment-media' ),
			'off' => esc_html__( 'Disable', 'entertainment-media' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_enable_google_translator',
		'section'     => 'entertainment_media_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Google Translator', 'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'entertainment_media_header_google_translator',
		'section'     => 'entertainment_media_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'entertainment-media' ),
			'off' => esc_html__( 'Disable', 'entertainment-media' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_enable_socail_link',
		'section'     => 'entertainment_media_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'entertainment_media_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'entertainment-media' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'entertainment-media' ),
		'settings'     => 'entertainment_media_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'entertainment-media' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'entertainment-media' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'entertainment-media' ),
				'description' => esc_html__( 'Add the social icon url here.', 'entertainment-media' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'entertainment_media_slider_section', array(
	    'title'          => esc_html__( 'Slider Settings', 'entertainment-media' ),
	    'description'    => esc_html__( 'Our Slider Settings','entertainment-media' ),
	    'panel'          => 'entertainment_media_panel_id',
	    'priority'       => 160,
	) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_enable_heading1',
		'section'     => 'entertainment_media_slider_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider',  'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'entertainment_media_slider_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'entertainment-media' ),
		'section'     => 'entertainment_media_slider_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'entertainment-media' ),
			'off' => esc_html__( 'Disable',  'entertainment-media' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_slider_heading',
		'section'     => 'entertainment_media_slider_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Section ',  'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'entertainment_media_slider_counter',
        'label'       => esc_html__( 'Slider Counter Section',  'entertainment-media' ),
        'section'     => 'entertainment_media_slider_section',
        'default'     => '',
        'choices'     => [
            'min'  => 0,
            'max'  => 3,
            'step' => 1,
        ],
    ] );

    $entertainment_media_slider_image = get_theme_mod('entertainment_media_slider_counter','');
        for ( $i = 1; $i <= $entertainment_media_slider_image; $i++ ) :

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'image',
        'settings'    => 'entertainment_media_slider_image'.$i,
        'label'       => esc_html__( 'Slider Image ', 'entertainment-media' ).$i,
        'description' => esc_html__( 'Image Dimension (1400 x 650)', 'entertainment-media' ),
        'section'     => 'entertainment_media_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'entertainment_media_slider_sub_heading' .$i,
        'label'       => esc_html__( 'Sub Heading ', 'entertainment-media' ).$i,
        'section'     => 'entertainment_media_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'entertainment_media_slider_main_heading' .$i,
        'label'       => esc_html__( 'Main Heading ', 'entertainment-media' ).$i,
        'section'     => 'entertainment_media_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'entertainment_media_slider_text' .$i,
        'label'       => esc_html__( 'Content ', 'entertainment-media' ).$i,
        'section'     => 'entertainment_media_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'entertainment_media_slider_button_text' .$i,
        'label'       => esc_html__( 'Button Text ', 'entertainment-media' ).$i,
        'section'     => 'entertainment_media_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'entertainment_media_slider_button_url' .$i,
        'label'       => esc_html__( 'Button Url ', 'entertainment-media' ).$i,
        'section'     => 'entertainment_media_slider_section',
        'default'     => '',
    ] );

	endfor;

	new \Kirki\Field\Select(
[
	'settings'    => 'entertainment_media_slider_content_alignment',
	'label'       => esc_html__( 'Slider Content Alignment', 'entertainment-media' ),
	'section'     => 'entertainment_media_slider_section',
	'default'     => 'LEFT-ALIGN',
	'placeholder' => esc_html__( 'Choose an option', 'entertainment-media' ),
	'choices'     => [
		'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'entertainment-media' ),
		'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'entertainment-media' ),
		'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'entertainment-media' ),

	],
] );


	//FEATURED MOVIES SECTION

	Kirki::add_section( 'entertainment_media_featured_movies_section', array(
	    'title'          => esc_html__( 'Our Featured Movies Settings', 'entertainment-media' ),
	    'description'    => esc_html__( 'Here you can add different type of featured movies.', 'entertainment-media' ),
	    'panel'          => 'entertainment_media_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_enable_heading',
		'section'     => 'entertainment_media_featured_movies_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Featured Movies',  'entertainment-media' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'entertainment_media_featured_movies_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'entertainment-media' ),
		'section'     => 'entertainment_media_featured_movies_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'entertainment-media' ),
			'off' => esc_html__( 'Disable',  'entertainment-media' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_featured_movies_text_heading',
		'section'     => 'entertainment_media_featured_movies_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Featured Movies', 'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'entertainment-media' ),
		'settings' => 'entertainment_media_featured_movies_heading',
		'section'  => 'entertainment_media_featured_movies_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'entertainment_media_featured_movies_category',
		'label'       => esc_html__( 'Select the category to show featured movies ', 'entertainment-media' ),
		'section'     => 'entertainment_media_featured_movies_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'entertainment-media' ),
		'priority'    => 10,
		'choices'     => entertainment_media_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'entertainment_media_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'entertainment-media' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'entertainment-media' ),
        'panel'          => 'entertainment_media_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_footer_text_heading',
		'section'     => 'entertainment_media_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'entertainment_media_footer_text',
		'section'  => 'entertainment_media_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'entertainment_media_footer_enable_heading',
		'section'     => 'entertainment_media_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'entertainment-media' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'entertainment_media_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'entertainment-media' ),
		'section'     => 'entertainment_media_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'entertainment-media' ),
			'off' => esc_html__( 'Disable', 'entertainment-media' ),
		],
	] );
}
