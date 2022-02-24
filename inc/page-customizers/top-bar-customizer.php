<?php

    new \Kirki\Panel(
        'TopBar_Panel',
        [
            'priority'    => 1100,
            'title'       => esc_html__( 'Topbar', 'kirki' ),
            'description' => esc_html__( 'Topbar Sections.', 'kirki' ),
        ]
    );

    new \Kirki\Section(
        'Contact_Details_Section',
        [
            'title'       => esc_html__( 'Contact Details', 'kirki' ),
            'description' => esc_html__( 'Contact Details.', 'kirki' ),
            'panel'       => 'TopBar_Panel',
            'priority'    => 100,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'telephone_number',
            'label'       => esc_html__( 'Contact Number', 'kirki' ),
            'section'     => 'Contact_Details_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'contact_mail',
            'label'       => esc_html__( 'Contact Email', 'kirki' ),
            'section'     => 'Contact_Details_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'working_time',
            'label'       => esc_html__( 'Working Hours (From To)', 'kirki' ),
            'section'     => 'Contact_Details_Section',
            'default'     => esc_html__( 'This is a default value', 'kirki' ),
        ]
    );
    

    new \Kirki\Section(
        'Social_Links_Section',
        [
            'title'       => esc_html__( 'Social Media Links', 'kirki' ),
            'description' => esc_html__( 'Social Media Links.', 'kirki' ),
            'panel'       => 'TopBar_Panel',
            'priority'    => 200,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'top_bar_social_links',
            'label'        => esc_html__( 'Social Links', 'kirki' ),
            'section'      => 'Social_Links_Section',
            'priority'     => 10,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'link_text',
            ],
            'button_label' => esc_html__( '"Add new" button label (optional) ', 'kirki' ),
            'default'      => [
                [
                    'social_link'   => esc_html__( 'Kirki Site', 'kirki' ),
                    'fa_icon' => 'fas fa-envelope',
                ],
            ],
            'fields'       => [
                'fa_icon'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Font-awesome v5 Icon', 'kirki' ),
                    'description' => esc_html__( "Copy and paste icon's class here (Ex:'fas fa-envelope')", 'kirki' ),
                    'default'     => '',
                ],
                'social_link'   => [
                    'type'        => 'url',
                    'label'       => esc_html__( 'Social Media Link', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );


?>