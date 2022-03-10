<?php

    new \Kirki\Panel(
        'Contact_Page_Panel',
        [
            'priority'    => 1500,
            'title'       => esc_html__( 'Contact Page', 'kirki' ),
            'description' => esc_html__( 'Contact Page.', 'kirki' ),
        ]
    );

    new \Kirki\Section(
        'Lets_Talk_Section',
        [
            'title'       => esc_html__( "Lets's Talk Section", 'kirki' ),
            'description' => esc_html__( "Lets's Talk Section.", 'kirki' ),
            'panel'       => 'Contact_Page_Panel',
            'priority'    => 100,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'lets_talk_description',
            'label'       => esc_html__( "Let's Talk Description", 'kirki' ),
            'section'     => 'Lets_Talk_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'lets_talk_details_list',
            'label'        => esc_html__( 'Contact Information List', 'kirki' ),
            'section'      => 'Lets_Talk_Section',
            'priority'     => 100,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'information',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'information'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'information'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Contact Detail', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'lets_talk_social_list',
            'label'        => esc_html__( 'Social Media List', 'kirki' ),
            'section'      => 'Lets_Talk_Section',
            'priority'     => 120,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'link',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'link'   => esc_html__( 'Kirki Site', 'kirki' ),
                    'icon'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'link'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Social Media Link', 'kirki' ),
                    'default'     => '',
                ],
                'icon'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Font-awesome Icon Class', 'kirki' ),
                    'description' => "Paste Fontawesome(v5) icon's classname (Ex : fab fa-facebook )",
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'FAQ_Section',
        [
            'title'       => esc_html__( "General FAQ Section", 'kirki' ),
            'description' => esc_html__( "General FAQ Section.", 'kirki' ),
            'panel'       => 'Contact_Page_Panel',
            'priority'    => 140,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'faq_description',
            'label'       => esc_html__( "FAQ Description", 'kirki' ),
            'section'     => 'FAQ_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'faq_list',
            'label'        => esc_html__( 'General FAQ List', 'kirki' ),
            'section'      => 'FAQ_Section',
            'priority'     => 150,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'question',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'question'   => null,
                    'answer'   => null,
                ],
            ],
            'fields'       => [
                'question'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Question', 'kirki' ),
                    'default'     => '',
                ],
                'answer'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Answer', 'kirki' ),
                    'default'     => '',
                ]
            ],
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'faq_list_2',
            'label'        => esc_html__( 'Questions Asking List', 'kirki' ),
            'section'      => 'FAQ_Section',
            'priority'     => 160,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'question',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'question'   => null,
                    'answer'   => null,
                ],
            ],
            'fields'       => [
                'question'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Question', 'kirki' ),
                    'default'     => '',
                ],
                'answer'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Answer', 'kirki' ),
                    'default'     => '',
                ]
            ],
        ]
    );

    new \Kirki\Section(
        'Bottom_Dark_Section',
        [
            'title'       => esc_html__( "Bottom Contact Section", 'kirki' ),
            'description' => esc_html__( "Bottom Dark Section.", 'kirki' ),
            'panel'       => 'Contact_Page_Panel',
            'priority'    => 180,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'call_us_number',
            'label'       => esc_html__( "Call Us Number", 'kirki' ),
            'section'     => 'Bottom_Dark_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'email_us_mail',
            'label'       => esc_html__( "Email Us", 'kirki' ),
            'section'     => 'Bottom_Dark_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );
?>