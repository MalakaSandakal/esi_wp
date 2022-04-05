<?php

    new \Kirki\Panel(
        'Technology_Page_Panel',
        [
            'priority'    => 1600,
            'title'       => esc_html__( 'Technology Page', 'kirki' ),
            'description' => esc_html__( 'Technology Page Sections.', 'kirki' ),
        ]
    );

    new \Kirki\Section(
        'Technology_Page_Main_Section',
        [
            'title'       => esc_html__( 'Technology Main Section', 'kirki' ),
            'description' => esc_html__( 'Technology Main Section', 'kirki' ),
            'panel'       => 'Technology_Page_Panel',
            'priority'    => 100,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'interactive-flexible-title',
            'label'    => esc_html__( 'Interactive, Flexible, Secure Section Title', 'kirki' ),
            'section'  => 'Technology_Page_Main_Section',
            'default'  => esc_html__( '', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'interactive-flexible-description',
            'label'    => esc_html__( 'Interactive, Flexible, Secure Section Description', 'kirki' ),
            'section'  => 'Technology_Page_Main_Section',
            'default'  => esc_html__( '', 'kirki' ),
            'priority' => 20,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'interactive-energy-grid-title',
            'label'    => esc_html__( 'Interactive Energy Grid Section Title', 'kirki' ),
            'section'  => 'Technology_Page_Main_Section',
            'default'  => esc_html__( '', 'kirki' ),
            'priority' => 30,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings' => 'interactive-energy-grid-description',
            'label'    => esc_html__( 'Interactive Energy Grid Section Section Description', 'kirki' ),
            'section'  => 'Technology_Page_Main_Section',
            'default'  => esc_html__( '', 'kirki' ),
            'priority' => 40,
        ]
    );
    new \Kirki\Field\URL(
        [
            'settings' => 'ieg_link',
            'label'    => esc_html__( 'IEG Button Link', 'kirki' ),
            'section'  => 'Technology_Page_Main_Section',
            'default'  => '#',
            'priority' => 50,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'page_main_gif',
            'label'       => esc_html__( 'Technology Main Image', 'kirki' ),
            'description' => esc_html__( 'Technology Main Image', 'kirki' ),
            'section'     => 'Technology_Page_Main_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Flexible_System_Design',
        [
            'title'       => esc_html__( 'Flexible System Design Section', 'kirki' ),
            'description' => esc_html__( 'Flexible System Design Section', 'kirki' ),
            'panel'       => 'Technology_Page_Panel',
            'priority'    => 200,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'flexible_system_design_list',
            'label'        => esc_html__( 'Flexible System Design List', 'kirki' ),
            'section'      => 'Flexible_System_Design',
            'priority'     => 10,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'list_item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'list_item'    => '',
                ],
            ],
            'fields'       => [
                'list_item'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'List Item', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'Unrivaled_System_Features',
        [
            'title'       => esc_html__( 'Unrivaled System Features Section', 'kirki' ),
            'description' => esc_html__( 'Unrivaled System Features Section', 'kirki' ),
            'panel'       => 'Technology_Page_Panel',
            'priority'    => 300,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'usf_list',
            'label'        => esc_html__( 'Unrivaled System Features List ', 'kirki' ),
            'section'      => 'Unrivaled_System_Features',
            'priority'     => 150,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'title',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'title'   => '',
                    'description'   => '',
                ],
            ],
            'fields'       => [
                'title'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Heading', 'kirki' ),
                    'default'     => '',
                ],
                'description'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Description', 'kirki' ),
                    'default'     => '',
                ]
            ],
        ]
    );

?>