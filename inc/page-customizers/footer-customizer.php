<?php

    new \Kirki\Panel(
        'Footer_Panel',
        [
            'priority'    => 10000,
            'title'       => esc_html__( 'Footer', 'kirki' ),
            'description' => esc_html__( 'Footer.', 'kirki' ),
        ]
    );

    new \Kirki\Section(
        'Footer_Section',
        [
            'title'       => esc_html__( "Footer Section", 'kirki' ),
            'description' => esc_html__( "Footer Section.", 'kirki' ),
            'panel'       => 'Footer_Panel',
            'priority'    => 100,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'footer-logo',
            'label'       => esc_html__( 'Footer Logo', 'kirki' ),
            'section'     => 'Footer_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'footer-description',
            'label'       => esc_html__( 'Footer Description', 'kirki' ),
            'section'     => 'Footer_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pages_lists',
            'label'        => esc_html__( 'Pages', 'kirki' ),
            'section'      => 'Footer_Section',
            'priority'     => 10,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'page',
            ],
            'button_label' => esc_html__( 'Add New', 'kirki' ),
            'default'      => [
                [
                    'page'         => '',
                    'page_link'    => '',
                ],
            ],
            'fields'       => [
                'page'    => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Page', 'kirki' ),
                    'default'     => '',
                ],
                'page_link'    => [
                    'type'        => 'link',
                    'label'       => esc_html__( 'Page Link', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'services_lists',
            'label'        => esc_html__( 'Services', 'kirki' ),
            'section'      => 'Footer_Section',
            'priority'     => 20,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'page',
            ],
            'button_label' => esc_html__( 'Add New', 'kirki' ),
            'default'      => [
                [
                    'page'         => '',
                    'page_link'    => '',
                ],
            ],
            'fields'       => [
                'page'    => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Page', 'kirki' ),
                    'default'     => '',
                ],
                'page_link'    => [
                    'type'        => 'link',
                    'label'       => esc_html__( 'Services Link', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'link_lists',
            'label'        => esc_html__( 'Links', 'kirki' ),
            'section'      => 'Footer_Section',
            'priority'     => 30,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'page',
            ],
            'button_label' => esc_html__( 'Add New', 'kirki' ),
            'default'      => [
                [
                    'page'         => '',
                    'page_link'    => '',
                ],
            ],
            'fields'       => [
                'page'    => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Page', 'kirki' ),
                    'default'     => '',
                ],
                'page_link'    => [
                    'type'        => 'link',
                    'label'       => esc_html__( 'Link', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );

?>