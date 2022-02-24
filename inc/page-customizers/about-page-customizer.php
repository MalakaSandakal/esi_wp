<?php

    new \Kirki\Panel(
        'About_Page_Panel',
        [
            'priority'    => 1500,
            'title'       => esc_html__( 'About Page', 'kirki' ),
            'description' => esc_html__( 'About Page.', 'kirki' ),
        ]
    );

    new \Kirki\Section(
        'We_Are_ES',
        [
            'title'       => esc_html__( 'We Are Energy Security', 'kirki' ),
            'panel'       => 'About_Page_Panel',
            'priority'    => 100,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'we_are_ES_description',
            'label'       => esc_html__( 'We Are Energy Security Description', 'kirki' ),
            'section'     => 'We_Are_ES',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'we_are_ES_image',
            'label'       => esc_html__( 'We Are Energy Security Image', 'kirki' ),
            'section'     => 'We_Are_ES',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Mission_Vision_Section',
        [
            'title'       => esc_html__( 'Vision & Mission Section', 'kirki' ),
            'panel'       => 'About_Page_Panel',
            'priority'    => 200,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'vision_mission_image',
            'label'       => esc_html__( 'Logo Image', 'kirki' ),
            'section'     => 'Mission_Vision_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'mission_description',
            'label'       => esc_html__( 'Our Mission Description', 'kirki' ),
            'section'     => 'Mission_Vision_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'vision_description',
            'label'       => esc_html__( 'Our Vision Description', 'kirki' ),
            'section'     => 'Mission_Vision_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'founder_message',
            'label'       => esc_html__( 'Message From Founder', 'kirki' ),
            'section'     => 'Mission_Vision_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'founder_image',
            'label'       => esc_html__( 'Founder Image', 'kirki' ),
            'section'     => 'Mission_Vision_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'founder_name',
            'label'       => esc_html__( "Founder's Name", 'kirki' ),
            'section'     => 'Mission_Vision_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'founder_rank',
            'label'       => esc_html__( "Founder's Rank", 'kirki' ),
            'section'     => 'Mission_Vision_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Meet_The_E-Team_Section',
        [
            'title'       => esc_html__( 'Meet The E-Team Section', 'kirki' ),
            'panel'       => 'About_Page_Panel',
            'priority'    => 300,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'meet_the_e_team_description',
            'label'       => esc_html__( "Meet The E-Team Description", 'kirki' ),
            'section'     => 'Meet_The_E-Team_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'meet_the_e_team_carousal',
            'label'        => esc_html__( 'Meet The E-Team Carousal', 'kirki' ),
            'section'      => 'Meet_The_E-Team_Section',
            'priority'     => 450,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'member_name',
            ],
            'button_label' => esc_html__( 'Add New Member ', 'kirki' ),
            'default'      => [
                [
                    'member_image'   => esc_html__( 'Kirki Site', 'kirki' ),
                    'member_name'    => 'https://kirki.org/',
                    'member_rank'    => 'https://kirki.org/',
                ],
            ],
            'fields'       => [
                'member_image'    => [
                    'type'        => 'image',
                    'label'       => esc_html__( "Member's Image", 'kirki' ),
                    'default'     => '',
                ],
                'member_name'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( "Member's Name", 'kirki' ),
                    'default'     => '',
                ],
                'member_rank'    => [
                    'type'        => 'text',
                    'label'       => esc_html__( "Member's Rank", 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'ESI_Support_Section',
        [
            'title'       => esc_html__( 'ESI Support Section', 'kirki' ),
            'panel'       => 'About_Page_Panel',
            'priority'    => 400,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'esi_support_team_carousal',
            'label'        => esc_html__( 'ESI Support Carousal', 'kirki' ),
            'section'      => 'ESI_Support_Section',
            'priority'     => 450,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'member_name',
            ],
            'button_label' => esc_html__( 'Add New Member ', 'kirki' ),
            'default'      => [
                [
                    'esi_support_member_image'   => esc_html__( 'Kirki Site', 'kirki' ),
                    'esi_support_member_name'    => 'https://kirki.org/',
                    'esi_support_member_rank'    => 'https://kirki.org/',
                ],
            ],
            'fields'       => [
                'esi_support_member_image'    => [
                    'type'        => 'image',
                    'label'       => esc_html__( "Member's Image", 'kirki' ),
                    'default'     => '',
                ],
                'esi_support_member_name'   => [
                    'type'        => 'text',
                    'label'       => esc_html__( "Member's Name", 'kirki' ),
                    'default'     => '',
                ],
                'esi_support_member_rank'    => [
                    'type'        => 'text',
                    'label'       => esc_html__( "Member's Rank", 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );

?>