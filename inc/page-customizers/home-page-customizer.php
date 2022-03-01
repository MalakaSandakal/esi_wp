<?php

    /* begin : Homepage Customizing Section */
    new \Kirki\Panel(
        'Homepage_Panel',
        [
            'priority'    => 1000,
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
            'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
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
                    'news_background'    => 'https://kirki.org/',
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
                    'default'     => '',
                ],
            ],
        ]
    );
    // end : News & Blogs Section

    // begin : Customer Testimonials
    new \Kirki\Section(
        'Customer_Testimonials_Section',
        [
            'title'       => esc_html__( 'Customer Testimonials Section', 'kirki' ),
            'description' => esc_html__( 'Customer Testimonials Section.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 200,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'customer_testimonials_description',
            'label'       => esc_html__( 'Customer Testimonials Description', 'kirki' ),
            'section'     => 'Customer_Testimonials_Section',
            'default'     => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,', 'kirki' ),
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'testimonial_setting',
            'label'        => esc_html__( 'Single Testimonial', 'kirki' ),
            'section'      => 'Customer_Testimonials_Section',
            'priority'     => 300,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Customer Name', 'kirki' ),
                'field' => 'customer_name',
            ],
            'button_label' => esc_html__( 'Add new testimonial', 'kirki' ),
            'default'      => [
                [
                    'preview_image'   => esc_html__( 'Kirki Site', 'kirki' ),
                    'profile_image'   => esc_html__( 'Kirki Site', 'kirki' ), 
                    'customer_name'   => esc_html__( 'Kirki Site', 'kirki' ),                      
                    'customer_feeling'   => esc_html__( 'Kirki Site', 'kirki' ),  
                    'customer_comment'   => esc_html__( 'Kirki Site', 'kirki' ),     
                ],
            ],
            'fields'       => [
                'preview_image'   => [
                    'type'        => 'image',
                    'label'       => esc_html__( 'Preview Image', 'kirki' ),
                    'default'     => '',
                ],
                'profile_image'   => [
                    'type'        => 'image',
                    'label'       => esc_html__( 'Customer Profile Image', 'kirki' ),
                    'default'     => '',
                ],
                'customer_name'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( "Customer's Name", 'kirki' ),
                    'default'     => '',
                ],
                'customer_feeling'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( "Customer's Idea", 'kirki' ),
                    'default'     => '',
                ],
                'customer_comment'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( "Customer's Comment", 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );
    // end : Customer Testimonials

    // begin : Partners Section
    new \Kirki\Section(
        'Partners_Section',
        [
            'title'       => esc_html__( 'Partners Section', 'kirki' ),
            'description' => esc_html__( 'Partners Section.', 'kirki' ),
            'panel'       => 'Homepage_Panel',
            'priority'    => 260,
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
            'settings'    => 'slider_image_1',
            'label'       => esc_html__( 'Slider Image 1', 'kirki' ),
            'section'     => 'Main_Slider_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_heading_1',
            'label'    => esc_html__( 'Slider 1 Main Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_sub_heading_1',
            'label'    => esc_html__( 'Slider 1 Sub Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 11,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_heading_1',
            'label'    => esc_html__( 'Secondary Box Heading 1', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 12,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_description_1',
            'label'    => esc_html__( 'Secondary Box Description 1', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 13,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'slider_image_2',
            'label'       => esc_html__( 'Slider Image 2', 'kirki' ),
            'section'     => 'Main_Slider_Section',
            'default'     => '',
            'priority' => 19,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_heading_2',
            'label'    => esc_html__( 'Slider 2 Main Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 20,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_sub_heading_2',
            'label'    => esc_html__( 'Slider 2 Sub Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 21,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_heading_2',
            'label'    => esc_html__( 'Secondary Box Heading 2', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 22,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_description_2',
            'label'    => esc_html__( 'Secondary Box Description 2', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 23,
        ]
    );


    new \Kirki\Field\Image(
        [
            'settings'    => 'slider_image_3',
            'label'       => esc_html__( 'Slider Image 3', 'kirki' ),
            'section'     => 'Main_Slider_Section',
            'default'     => '',
            'priority' => 29,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_heading_3',
            'label'    => esc_html__( 'Slider 3 Main Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 30,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_sub_heading_3',
            'label'    => esc_html__( 'Slider 3 Sub Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 31,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_heading_3',
            'label'    => esc_html__( 'Secondary Box Heading 3', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 32,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_description_3',
            'label'    => esc_html__( 'Secondary Box Description 3', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 33,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'slider_image_4',
            'label'       => esc_html__( 'Slider Image 4', 'kirki' ),
            'section'     => 'Main_Slider_Section',
            'default'     => '',
            'priority' => 39,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_heading_4',
            'label'    => esc_html__( 'Slider 4 Main Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 40,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'slider_sub_heading_4',
            'label'    => esc_html__( 'Slider 4 Sub Heading', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 41,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_heading_4',
            'label'    => esc_html__( 'Secondary Box Heading 4', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 42,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'box_description_4',
            'label'    => esc_html__( 'Secondary Box Description 4', 'kirki' ),
            'section'  => 'Main_Slider_Section',
            'default'  => esc_html__( 'This is a default value', 'kirki' ),
            'priority' => 43,
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
            'priority'    => 135,
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
            'priority'    => 135,
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
                    'product_image'              => 'https://kirki.org/',
                    'product_title'              => esc_html__( 'Kirki Site', 'kirki' ),
                    'product_description'        => esc_html__( 'Kirki Site', 'kirki' ),
                    'how_it_works_url'           =>'https://kirki.org/',
                    'read_more_url'              =>'https://kirki.org/',
                    'product_specifications_url' => 'https://kirki.org/',
                    'ask_a_pro_url'              => 'https://kirki.org/',                        
                ],
            ],
            'fields'       => [
                'product_image'   => [
                    'type'        => 'image',
                    'label'       => esc_html__( 'Product image', 'kirki' ),
                    'default'     => '',
                ],
                'product_title'   => [
                    'type'        => 'textarea',
                    'label'       => esc_html__( 'Product Name', 'kirki' ),
                    'default'     => '',
                ],
                'product_description'   => [
                    'type'        => 'textarea',
                    'label'       => esc_html__( 'Product Description', 'kirki' ),
                    'default'     => '',
                ],
                'how_it_works_url'   => [
                    'type'        => 'url',
                    'label'       => esc_html__( 'How it works link', 'kirki' ),
                    'default'     => '',
                ],
                'read_more_url'   => [
                    'type'        => 'url',
                    'label'       => esc_html__( 'Readmore link', 'kirki' ),
                    'default'     => '',
                ],
                
                'product_specifications_url'   => [
                    'type'        => 'url',
                    'label'       => esc_html__( ' Product specifications link', 'kirki' ),
                    'default'     => '',
                    'priority'    => 300,
                ],
                'ask_a_pro_url'   => [
                    'type'        => 'url',
                    'label'       => esc_html__( ' Ask a pro link', 'kirki' ),
                    'default'     => '',
                    'priority'    => 350,
                ],
            ],
        ]
    );
    // end : Products Section

    // begin : custom Section
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'repeater_setting_2',
            'label'        => esc_html__( 'Repeater Control', 'kirki' ),
            'section'      => 'Main_Slider_Section',
            'priority'     => 900,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'link_text',
            ],
            'button_label' => esc_html__( '"Add new" button label (optional) ', 'kirki' ),
            'default'      => [
                [
                    'video_url'   => 'https://kirki.org/',
                ],
            ],
            'fields'       => [
                'video_url'   => [
                    'type'        => 'url',
                    'label'       => esc_html__( 'Link Text', 'kirki' ),
                    'description' => esc_html__( 'Description', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );
    
    // end : Custom Section
    
?>