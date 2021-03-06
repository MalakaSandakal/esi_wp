<?php

    /* begin : Homepage Customizing Section */
    new \Kirki\Panel(
        'Homepage_Panel',
        [
            'priority'    => 1300,
            'title'       => esc_html__( 'Homepage', 'kirki' ),
            'description' => esc_html__( 'Homepage Sections.', 'kirki' ),
        ]
    );

    // begin : Who Are We Section
    new \Kirki\Section(
        'Who_We_Are_Section',
        [
            'title'       => esc_html__( 'Who Are We Description', 'kirki' ),
            'description' => esc_html__( 'Who Are We Description.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 100,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'who_we_are_description',
            'label'       => esc_html__( 'Who We Are Description', 'kirki' ),
            'section'     => 'Who_We_Are_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'meet_the_team_url',
            'label'    => esc_html__( 'Meet The Team Button URL', 'kirki' ),
            'section'  => 'Who_We_Are_Section',
            'default'  => '#',
            'priority' => 10,
        ]
    );
    // end : Who Are We Section

    // begin : Our Service Section
    new \Kirki\Section(
        'Our_Service_Section',
        [
            'title'       => esc_html__( 'Our Service Section', 'kirki' ),
            'description' => esc_html__( 'Our Service Section.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 130,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'our_service_description',
            'label'       => esc_html__( 'Our Service Description', 'kirki' ),
            'section'     => 'Our_Service_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'our_service_readmore_url',
            'label'    => esc_html__( 'Meet The Team Button URL', 'kirki' ),
            'section'  => 'Our_Service_Section',
            'default'  => '#',
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'our_service_image',
            'label'       => esc_html__( 'Image Control (URL)', 'kirki' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
            'section'     => 'Our_Service_Section',
            'default'     => '',
        ]
    );
    // end : Our Service Section

    // begin : What We Do Section
    new \Kirki\Section(
        'What_We_Do_Section',
        [
            'title'       => esc_html__( 'What We Do Section', 'kirki' ),
            'description' => esc_html__( 'What We Do Section.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 110,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'what_we_do_section_image',
            'label'       => esc_html__( 'What We Do Image', 'kirki' ),
            'section'     => 'What_We_Do_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'what_we_do_section_carousal_item',
            'label'        => esc_html__( 'Carousal Section', 'kirki' ),
            'section'      => 'What_We_Do_Section',
            'priority'     => 100,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Carousal Item', 'kirki' ),
                'field' => 'title',
            ],
            'button_label' => esc_html__( 'Add new description section', 'kirki' ),
            'default'      => [
                [
                    'title'   => esc_html__( 'Lorem Ipsum is simply dummy text', 'kirki' ),
                    'description'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
                ],
            ],
            'fields'       => [
                'title'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Title', 'kirki' ),
                    'description' => esc_html__( 'Title Of The Description', 'kirki' ),
                    'default'     => '',
                ],
                'description'    => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Description', 'kirki' ),
                    'description' => esc_html__( 'Description', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );

    // end : What We Do Section

    // begin : News & Blogs Section
    new \Kirki\Section(
        'News_&_Blog_Section',
        [
            'title'       => esc_html__( 'News & Blogs Section', 'kirki' ),
            'description' => esc_html__( 'News & Blogs Section.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'news_&_blog_description',
            'label'       => esc_html__( 'News & Blogs Description', 'kirki' ),
            'section'     => 'News_&_Blog_Section',
            'default'     => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,', 'kirki' ),
        ]
    );
    new \Kirki\Field\URL(
        [
            'settings'    => 'news_read_more_url',
            'label'       => esc_html__( 'Read More Link', 'kirki' ),
            'section'     => 'News_&_Blog_Section',
            'default'     => '#',
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'news_&_blog_settings',
            'label'        => esc_html__( 'Single News', 'kirki' ),
            'section'      => 'News_&_Blog_Section',
            'priority'     => 300,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'news_title',
            ],
            'button_label' => esc_html__( '"Add new" button label (optional) ', 'kirki' ),
            'default'      => [
                [
                    'news_title'   => esc_html__( 'Kirki Site', 'kirki' ),
                    'news_background'    => '#',
                ],
            ],
            'fields'       => [
                'news_title'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'News Title', 'kirki' ),
                    'default'     => '',
                ],
                'news_background'    => [
                    'type'        => 'image',
                    'label'       => esc_html__( 'Background Image', 'kirki' ),
                    'default'     => '#',
                ],
            ],
        ]
    );
    // end : News & Blogs Section

    
    // begin : Partners Section
    new \Kirki\Section(
        'Partners_Section',
        [
            'title'       => esc_html__( 'Partners Section', 'kirki' ),
            'description' => esc_html__( 'Partners Section.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 150,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'partners_description',
            'label'       => esc_html__( 'Partners Description', 'kirki' ),
            'section'     => 'Partners_Section',
            'default'     => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,', 'kirki' ),
        ]
    );
    new \Kirki\Field\URL(
        [
            'settings' => 'become_a_partner_URL',
            'label'    => esc_html__( 'Become a partner URL', 'kirki' ),
            'section'  => 'Partners_Section',
            'default'  => '#',
            'priority' => 100,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'partners_images',
            'label'        => esc_html__( 'Partners Logos', 'kirki' ),
            'section'      => 'Partners_Section',
            'priority'     => 150,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'Partner Logo',
            ],
            'button_label' => esc_html__( 'Add new partner logo', 'kirki' ),
            'default'      => [
                [
                    'image'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'image'   => [
                    'type'        => 'image',
                    'label'       => esc_html__( 'Partner logo', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );
    // end : Partners Section

    // begin : Main Carousal
    new \Kirki\Section(
        'Main_Slider_Section',
        [
            'title'       => esc_html__( 'Homepage Main Carousal', 'kirki' ),
            'description' => esc_html__( 'Homepage Main Carousal.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 7,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'slider_image_0',
            'label'       => esc_html__( 'Slider Image 1', 'kirki' ),
            'description' => '(Please use 1920x700px images)',
            'section'     => 'Main_Slider_Section',
            'default'     => '',
            'priority' => 2,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_heading_0',
            'label'    => esc_html__( 'Slider 1 Main Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 3,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_sub_heading_0',
            'label'    => esc_html__( 'Slider 1 Sub Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 4,
        ]
    );
    
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_heading_0',
            'label'    => esc_html__( 'Secondary Box Heading 1', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 5,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_description_0',
            'label'    => esc_html__( 'Secondary Box Description 1', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 6,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'slider_image_1',
            'label'       => esc_html__( 'Slider Image 2', 'kirki' ),
            'description' => '(Please use 1920x700px images)',
            'section'     => 'Main_Slider_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_heading_1',
            'label'    => esc_html__( 'Slider 2 Main Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_sub_heading_1',
            'label'    => esc_html__( 'Slider 2 Sub Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 11,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_heading_1',
            'label'    => esc_html__( 'Secondary Box Heading 2', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 13,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_description_1',
            'label'    => esc_html__( 'Secondary Box Description 2', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 13,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'slider_image_2',
            'label'       => esc_html__( 'Slider Image 3', 'kirki' ),
            'description' => '(Please use 1920x700px images)',
            'section'     => 'Main_Slider_Section',
            'default'     => '',
            'priority' => 19,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_heading_2',
            'label'    => esc_html__( 'Slider 3 Main Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 20,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_sub_heading_2',
            'label'    => esc_html__( 'Slider 3 Sub Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 21,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_heading_2',
            'label'    => esc_html__( 'Secondary Box Heading 3', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 22,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_description_2',
            'label'    => esc_html__( 'Secondary Box Description 3', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 23,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'slider_image_3',
            'label'       => esc_html__( 'Slider Image 4', 'kirki' ),
            'description' => '(Please use 1920x700px images)',
            'section'     => 'Main_Slider_Section',
            'default'     => '',
            'priority' => 29,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_heading_3',
            'label'    => esc_html__( 'Slider 4 Main Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 30,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_sub_heading_3',
            'label'    => esc_html__( 'Slider 4 Sub Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 31,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_heading_3',
            'label'    => esc_html__( 'Secondary Box Heading 4', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 32,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_description_3',
            'label'    => esc_html__( 'Secondary Box Description 4', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 33,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'slider_image_4',
            'label'       => esc_html__( 'Slider Image 5', 'kirki' ),
            'description' => '(Please use 1920x700px images)',
            'section'     => 'Main_Slider_Section',
            'default'     => '',
            'priority' => 39,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_heading_4',
            'label'    => esc_html__( 'Slider 5 Main Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 40,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_sub_heading_4',
            'label'    => esc_html__( 'Slider 5 Sub Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 41,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_heading_4',
            'label'    => esc_html__( 'Secondary Box Heading 5', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 42,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_description_4',
            'label'    => esc_html__( 'Secondary Box Description 5', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 43,
        ]
    );    
    new \Kirki\Field\Text(
        [
            'settings' => 'ask_a_pro_link',
            'label'    => esc_html__( 'Ask A Pro Link', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 45,
        ]
    );
    new \Kirki\Field\URL(
        [
            'settings' => 'carousal_video',
            'label'    => esc_html__( 'Video url', 'kirki' ),
            'description' => 'Upload your video to media library and paste the link here',
            'section'  => 'Main_Slider_Section',
            'default'  => 'http://localhost/wordpress/wp-content/uploads/2022/03/Marazzo-Drone-Footage-1.mp4',
            'priority' => 50,
        ]
    );
    // end : Main Carousal 

    // begin : Subscribe Section
    new \Kirki\Section(
        'Subscribe_Section',
        [
            'title'       => esc_html__( 'Subscribe Section', 'kirki' ),
            'description' => esc_html__( 'Subscribe Section.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 200,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'subscribe_description',
            'label'       => esc_html__( 'Last Industry Updates Description', 'kirki' ),
            'section'     => 'Subscribe_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );
    // end : Subscribe Section

    // begin : Products Section
    new \Kirki\Section(
        'Products_Section',
        [
            'title'       => esc_html__( 'Products Section', 'kirki' ),
            'description' => esc_html__( 'Products Section.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 120,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'product_settings',
            'label'        => esc_html__( 'Single Product', 'kirki' ),
            'section'      => 'Products_Section',
            'priority'     => 100,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'product_title',
            ],
            'button_label' => esc_html__( 'Add new product details ', 'kirki' ),
            'default'      => [
                [
                    'product_image'              => '#',
                    'product_title'              => esc_html__( 'Kirki Site', 'kirki' ),
                    'product_description'        => esc_html__( 'Kirki Site', 'kirki' ),
                    'how_it_works_url'           =>'#',
                    'read_more_url'              =>'#',
                    'product_specifications_url' => '#',
                    'ask_a_pro_url'              => '#',                        
                ],
            ],
            'fields'       => [
                'product_image'   => [
                    'type'        => 'image',
                    'label'       => esc_html__( 'Image', 'kirki' ),
                    'description' => '(Please use 600x530px images)',
                    'default'     => '#',
                ],
                'product_title'   => [
                    'type'        => 'textarea',
                    'label'       => esc_html__( 'Title', 'kirki' ),
                    'default'     => '#',
                ],
                'product_description'   => [
                    'type'        => 'textarea',
                    'label'       => esc_html__( 'Description', 'kirki' ),
                    'default'     => '#',
                ],
                'how_it_works_btn_control'   => [
                    'type'        => 'checkbox',
                    'label'       => esc_html__( 'Enable How It Works button', 'kirki' ),
                    'default'     => 'true',
                ],
                'how_it_works_url'   => [
                    'type'        => 'url',
                    'label'       => esc_html__( 'How it works link', 'kirki' ),
                    'default'     => '#',
                ],
                'read_more_btn_control'   => [
                    'type'        => 'checkbox',
                    'label'       => esc_html__( 'Enable Readmore button', 'kirki' ),
                    'default'     => 'true',
                ],
                'read_more_url'   => [
                    'type'        => 'url',
                    'label'       => esc_html__( 'Readmore link', 'kirki' ),
                    'default'     => '#',
                ],
                'product_specification_btn_control'   => [
                    'type'        => 'checkbox',
                    'label'       => esc_html__( 'Enable Product Specification button', 'kirki' ),
                    'default'     => 'true',
                ],
                'ask_a_pro_btn_control'   => [
                    'type'        => 'checkbox',
                    'label'       => esc_html__( 'Enable Ask A Pro button', 'kirki' ),
                    'default'     => 'true',
                ],
            ],
        ]
    );
    // end : Products Section
    
?>