<?php

    new \Kirki\Panel(
        'Services_Panel',
        [
            'priority'    => 1200,
            'title'       => esc_html__( 'Services Page', 'kirki' ),
            'description' => esc_html__( 'Services Sections.', 'kirki' ),
        ]
    );

    new \Kirki\Section(
        'Services_Section',
        [
            'title'       => esc_html__( 'Our Services Section', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 100,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'services_main_description',
            'label'       => esc_html__( 'Our Services Description', 'kirki' ),
            'section'     => 'Services_Section',
            'default'     => '',
        ]
    );
    
    new \Kirki\Field\Image(
        [
            'settings'    => 'services_main_image',
            'label'       => esc_html__( 'Our Services Image', 'kirki' ),
            'description' => '(Please use 510x340px images)',
            'section'     => 'Services_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Services_Box_List_Section',
        [
            'title'       => esc_html__( 'Services Box Section', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 110,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'project_planing_icon',
            'label'       => esc_html__( 'Project Planing Box Icon', 'kirki' ),
            'description' => '(Please use 50x50px images)',
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'project_planing_title',
            'label'       => esc_html__( 'Project Planing Box Title', 'kirki' ),
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'project_planing_description',
            'label'       => esc_html__( 'Project Planing Box Description', 'kirki' ),
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'design_&_engineering_icon',
            'label'       => esc_html__( 'Design & Engineering Box Icon', 'kirki' ),
            'description' => '(Please use 50x50px images)',
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'design_&_engineering_title',
            'label'       => esc_html__( 'Design & Engineering Box Title', 'kirki' ),
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'design_&_engineering_description',
            'label'       => esc_html__( 'Design & Engineering Box Description', 'kirki' ),
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'project_implementation_icon',
            'label'       => esc_html__( 'Project Implementation Box Icon', 'kirki' ),
            'description' => '(Please use 50x50px images)',
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'project_implementation_title',
            'label'       => esc_html__( 'Project Implementation Box Title', 'kirki' ),
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'project_implementation_description',
            'label'       => esc_html__( 'Project Implementation Box Description', 'kirki' ),
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'post_project_support_icon',
            'label'       => esc_html__( 'Post-Project Support Box Icon', 'kirki' ),
            'description' => '(Please use 50x50px images)',
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'post_project_support_title',
            'label'       => esc_html__( 'Post-Project Support Box Title', 'kirki' ),
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'post_project_support_description',
            'label'       => esc_html__( 'Post-Project Support Box Description', 'kirki' ),
            'section'     => 'Services_Box_List_Section',
            'default'     => '',
        ]
    );

    /* Project Planning */
    new \Kirki\Section(
        'Project_Planning_Section',
        [
            'title'       => esc_html__( 'Project Planning Section Top', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 120,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'project_planning_description',
            'label'       => esc_html__( 'Project Planning Description', 'kirki' ),
            'section'     => 'Project_Planning_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Project_Planning_Section_Main_Services',
        [
            'title'       => esc_html__( 'Project Planning Main Services', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 130,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pp_main_services_heading',
            'label'       => esc_html__( 'Main Services Heading', 'kirki' ),
            'section'     => 'Project_Planning_Section_Main_Services',
            'default'     => '',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pp_main_services_box_1_heading',
            'label'       => esc_html__( 'Box 1 Heading', 'kirki' ),
            'section'     => 'Project_Planning_Section_Main_Services',
            'default'     => '',
            'priority'    => 100,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pp_main_services_box_1_list',
            'label'        => esc_html__( 'Box 1 List', 'kirki' ),
            'section'      => 'Project_Planning_Section_Main_Services',
            'priority'    => 101,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pp_main_services_box_2_heading',
            'label'       => esc_html__( 'Box 2 Heading', 'kirki' ),
            'section'     => 'Project_Planning_Section_Main_Services',
            'default'     => '',
            'priority'    => 102,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pp_main_services_box_2_list',
            'label'        => esc_html__( 'Box 2 List', 'kirki' ),
            'section'      => 'Project_Planning_Section_Main_Services',
            'priority'    => 103,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pp_main_services_box_3_heading',
            'label'       => esc_html__( 'Box 3 Heading', 'kirki' ),
            'section'     => 'Project_Planning_Section_Main_Services',
            'default'     => '',
            'priority'    => 104,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pp_main_services_box_3_list',
            'label'        => esc_html__( 'Box 3 List', 'kirki' ),
            'section'      => 'Project_Planning_Section_Main_Services',
            'priority'    => 105,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );


    new \Kirki\Section(
        'Project_Planning_Section_Work_Flow',
        [
            'title'       => esc_html__( 'Project Planning Work Flow', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 140,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pp_workflow_heading',
            'label'       => esc_html__( 'Work Flow Heading', 'kirki' ),
            'section'     => 'Project_Planning_Section_Work_Flow',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pp_workflow_image',
            'label'       => esc_html__( 'Work Flow Image', 'kirki' ),
            'section'     => 'Project_Planning_Section_Work_Flow',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Project_Planning_Section_ESI',
        [
            'title'       => esc_html__( 'Project Planning ESI Team', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 150,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pp_esi_heading',
            'label'       => esc_html__( 'ESI Team Heading', 'kirki' ),
            'section'     => 'Project_Planning_Section_ESI',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pp_esi_box_1_image',
            'label'       => esc_html__( 'Box 1 Image', 'kirki' ),
            'section'     => 'Project_Planning_Section_ESI',
            'default'     => '',
            'priority'    => 100,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pp_esi_box_1_heading',
            'label'       => esc_html__( 'Box 1 Heading', 'kirki' ),
            'section'     => 'Project_Planning_Section_ESI',
            'default'     => '',
            'priority'    => 101,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pp_esi_box_1_list',
            'label'        => esc_html__( 'Box 1 List', 'kirki' ),
            'section'      => 'Project_Planning_Section_ESI',
            'priority'    => 102,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pp_esi_box_2_image',
            'label'       => esc_html__( 'Box 2 Image', 'kirki' ),
            'section'     => 'Project_Planning_Section_ESI',
            'default'     => '',
            'priority'    => 103,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pp_esi_box_2_heading',
            'label'       => esc_html__( 'Box 2 Heading', 'kirki' ),
            'section'     => 'Project_Planning_Section_ESI',
            'default'     => '',
            'priority'    => 104,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pp_esi_box_2_list',
            'label'        => esc_html__( 'Box 2 List', 'kirki' ),
            'section'      => 'Project_Planning_Section_ESI',
            'priority'    => 105,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pp_esi_box_3_image',
            'label'       => esc_html__( 'Box 3 Image', 'kirki' ),
            'section'     => 'Project_Planning_Section_ESI',
            'default'     => '',
            'priority'    => 106,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pp_esi_box_3_heading',
            'label'       => esc_html__( 'Box 3 Heading', 'kirki' ),
            'section'     => 'Project_Planning_Section_ESI',
            'default'     => '',
            'priority'    => 107,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pp_esi_box_3_list',
            'label'        => esc_html__( 'Box 3 List', 'kirki' ),
            'section'      => 'Project_Planning_Section_ESI',
            'priority'    => 108,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    /* design and engineering  */
    new \Kirki\Section(
        'Design_Engineering_Section',
        [
            'title'       => esc_html__( 'Design & Engineering Section Top', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 220,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'design_engineering_description',
            'label'       => esc_html__( 'Design & Engineering Description', 'kirki' ),
            'section'     => 'Design_Engineering_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Design_Engineering_Section_Main_Services',
        [
            'title'       => esc_html__( 'Design & Engineering Main Services', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 230,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_main_services_heading',
            'label'       => esc_html__( 'Main Services Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Main_Services',
            'default'     => '',
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_main_services_box_1_heading',
            'label'       => esc_html__( 'Box 1 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Main_Services',
            'default'     => '',
            'priority'     => 100,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_main_services_box_1_list',
            'label'        => esc_html__( 'Box 1 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_Main_Services',
            'priority'     => 101,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_main_services_box_2_heading',
            'label'       => esc_html__( 'Box 2 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Main_Services',
            'default'     => '',
            'priority'     => 102,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_main_services_box_2_list',
            'label'        => esc_html__( 'Box 2 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_Main_Services',
            'priority'     => 103,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_main_services_box_3_heading',
            'label'       => esc_html__( 'Box 3 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Main_Services',
            'default'     => '',
            'priority'     => 104,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_main_services_box_3_list',
            'label'        => esc_html__( 'Box 3 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_Main_Services',
            'priority'     => 105,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_main_services_box_4_heading',
            'label'       => esc_html__( 'Box 4 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Main_Services',
            'default'     => '',
            'priority'     => 106,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_main_services_box_4_list',
            'label'        => esc_html__( 'Box 4 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_Main_Services',
            'priority'     => 107,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_main_services_box_5_heading',
            'label'       => esc_html__( 'Box 5 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Main_Services',
            'default'     => '',
            'priority'     => 108,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_main_services_box_5_list',
            'label'        => esc_html__( 'Box 5 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_Main_Services',
            'priority'     => 109,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_main_services_box_6_heading',
            'label'       => esc_html__( 'Box 6 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Main_Services',
            'default'     => '',
            'priority'     => 110,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_main_services_box_6_list',
            'label'        => esc_html__( 'Box 6 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_Main_Services',
            'priority'     => 111,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_main_services_box_7_heading',
            'label'       => esc_html__( 'Box 7 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Main_Services',
            'default'     => '',
            'priority'     => 112,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_main_services_box_7_list',
            'label'        => esc_html__( 'Box 7 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_Main_Services',
            'priority'     => 113,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_main_services_box_8_heading',
            'label'       => esc_html__( 'Box 8 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Main_Services',
            'default'     => '',
            'priority'     => 114,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_main_services_box_8_list',
            'label'        => esc_html__( 'Box 8 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_Main_Services',
            'priority'     => 115,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'Design_Engineering_Section_Work_Flow',
        [
            'title'       => esc_html__( 'Design & Engineering Work Flow', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 240,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_workflow_heading',
            'label'       => esc_html__( 'Work Flow Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Work_Flow',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'design_engineering_workflow_image',
            'label'       => esc_html__( 'Work Flow Image', 'kirki' ),
            'section'     => 'Design_Engineering_Section_Work_Flow',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Design_Engineering_Section_ESI',
        [
            'title'       => esc_html__( 'Design & Engineering ESI Team', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 250,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_esi_heading',
            'label'       => esc_html__( 'ESI Team Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_ESI',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'design_engineering_esi_box_1_image',
            'label'       => esc_html__( 'Box 1 Image', 'kirki' ),
            'section'     => 'Design_Engineering_Section_ESI',
            'default'     => '',
            'priority'    => 100,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_esi_box_1_heading',
            'label'       => esc_html__( 'Box 1 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_ESI',
            'default'     => '',
            'priority'    => 101,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_esi_box_1_list',
            'label'        => esc_html__( 'Box 1 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_ESI',
            'priority'    => 102,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'design_engineering_esi_box_2_image',
            'label'       => esc_html__( 'Box 2 Image', 'kirki' ),
            'section'     => 'Design_Engineering_Section_ESI',
            'default'     => '',
            'priority'    => 103,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_esi_box_2_heading',
            'label'       => esc_html__( 'Box 2 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_ESI',
            'default'     => '',
            'priority'    => 104,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_esi_box_2_list',
            'label'        => esc_html__( 'Box 2 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_ESI',
            'priority'    => 105,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'design_engineering_esi_box_3_image',
            'label'       => esc_html__( 'Box 3 Image', 'kirki' ),
            'section'     => 'Design_Engineering_Section_ESI',
            'default'     => '',
            'priority'    => 106,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'design_engineering_esi_box_3_heading',
            'label'       => esc_html__( 'Box 3 Heading', 'kirki' ),
            'section'     => 'Design_Engineering_Section_ESI',
            'default'     => '',
            'priority'    => 107,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'design_engineering_esi_box_3_list',
            'label'        => esc_html__( 'Box 3 List', 'kirki' ),
            'section'      => 'Design_Engineering_Section_ESI',
            'priority'    => 108,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    /* project implementation */
    new \Kirki\Section(
        'Project_Implementation_Section',
        [
            'title'       => esc_html__( 'Project Implementation Section Top', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 330,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'pi_description',
            'label'       => esc_html__( 'Project Implementation Description', 'kirki' ),
            'section'     => 'Project_Implementation_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Project_Implementation_Section_Main_Services',
        [
            'title'       => esc_html__( 'Project Implementation Main Services', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 330,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_main_services_heading',
            'label'       => esc_html__( 'Main Services Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_Main_Services',
            'default'     => '',
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_main_services_box_1_heading',
            'label'       => esc_html__( 'Box 1 Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_Main_Services',
            'default'     => '',
            'priority'    => 100,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pi_main_services_box_1_list',
            'label'        => esc_html__( 'Box 1 List', 'kirki' ),
            'section'      => 'Project_Implementation_Section_Main_Services',
            'priority'    => 101,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_main_services_box_2_heading',
            'label'       => esc_html__( 'Box 2 Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_Main_Services',
            'default'     => '',
            'priority'    => 102,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pi_main_services_box_2_list',
            'label'        => esc_html__( 'Box 2 List', 'kirki' ),
            'section'      => 'Project_Implementation_Section_Main_Services',
            'priority'    => 103,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_main_services_box_3_heading',
            'label'       => esc_html__( 'Box 3 Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_Main_Services',
            'default'     => '',
            'priority'    => 104,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pi_main_services_box_3_list',
            'label'        => esc_html__( 'Box 3 List', 'kirki' ),
            'section'      => 'Project_Implementation_Section_Main_Services',
            'priority'    => 105,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'Project_Implementation_Section_Work_Flow',
        [
            'title'       => esc_html__( 'Project Implementation Work Flow', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 340,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_workflow_heading',
            'label'       => esc_html__( 'Work Flow Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_Work_Flow',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pi_workflow_image',
            'label'       => esc_html__( 'Work Flow Image', 'kirki' ),
            'section'     => 'Project_Implementation_Section_Work_Flow',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Project_Implementation_Section_ESI',
        [
            'title'       => esc_html__( 'Project Implementation ESI Team', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 350,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_esi_heading',
            'label'       => esc_html__( 'ESI Team Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_ESI',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pi_esi_box_1_image',
            'label'       => esc_html__( 'Box 1 Image', 'kirki' ),
            'section'     => 'Project_Implementation_Section_ESI',
            'default'     => '',
            'priority'    => 200,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_esi_box_1_heading',
            'label'       => esc_html__( 'Box 1 Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_ESI',
            'default'     => '',
            'priority'    => 201,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pi_esi_box_1_list',
            'label'        => esc_html__( 'Box 1 List', 'kirki' ),
            'section'      => 'Project_Implementation_Section_ESI',
            'priority'    => 202,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pi_esi_box_2_image',
            'label'       => esc_html__( 'Box 2 Image', 'kirki' ),
            'section'     => 'Project_Implementation_Section_ESI',
            'default'     => '',
            'priority'    => 203,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_esi_box_2_heading',
            'label'       => esc_html__( 'Box 2 Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_ESI',
            'default'     => '',
            'priority'    => 204,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pi_esi_box_2_list',
            'label'        => esc_html__( 'Box 2 List', 'kirki' ),
            'section'      => 'Project_Implementation_Section_ESI',
            'priority'    => 205,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pi_esi_box_3_image',
            'label'       => esc_html__( 'Box 3 Image', 'kirki' ),
            'section'     => 'Project_Implementation_Section_ESI',
            'default'     => '',
            'priority'    => 206,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_esi_box_3_heading',
            'label'       => esc_html__( 'Box 3 Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_ESI',
            'default'     => '',
            'priority'    => 207,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pi_esi_box_3_list',
            'label'        => esc_html__( 'Box 3 List', 'kirki' ),
            'section'      => 'Project_Implementation_Section_ESI',
            'priority'    => 208,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pi_esi_box_4_image',
            'label'       => esc_html__( 'Box 4 Image', 'kirki' ),
            'section'     => 'Project_Implementation_Section_ESI',
            'default'     => '',
            'priority'    => 210,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pi_esi_box_4_heading',
            'label'       => esc_html__( 'Box 4 Heading', 'kirki' ),
            'section'     => 'Project_Implementation_Section_ESI',
            'default'     => '',
            'priority'    => 211,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pi_esi_box_4_list',
            'label'        => esc_html__( 'Box 4 List', 'kirki' ),
            'section'      => 'Project_Implementation_Section_ESI',
            'priority'    => 212,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    /* post project support */
    new \Kirki\Section(
        'Post_Project_Support_Section',
        [
            'title'       => esc_html__( 'Post Project Support Section Top', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 430,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'pps_description',
            'label'       => esc_html__( 'Post Project Support Description', 'kirki' ),
            'section'     => 'Post_Project_Support_Section',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Post_Project_Support_Section_Main_Services',
        [
            'title'       => esc_html__( 'Post Project Support Main Services', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 440,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pps_main_services_heading',
            'label'       => esc_html__( 'Main Services Heading', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_Main_Services',
            'default'     => '',
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings'    => 'pps_main_services_box_1_heading',
            'label'       => esc_html__( 'Box 1 Heading', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_Main_Services',
            'default'     => '',
            'priority'    => 100,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pps_main_services_box_1_list',
            'label'        => esc_html__( 'Box 1 List', 'kirki' ),
            'section'      => 'Post_Project_Support_Section_Main_Services',
            'priority'    => 101,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pps_main_services_box_2_heading',
            'label'       => esc_html__( 'Box 2 Heading', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_Main_Services',
            'default'     => '',
            'priority'    => 102,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pps_main_services_box_2_list',
            'label'        => esc_html__( 'Box 2 List', 'kirki' ),
            'section'      => 'Post_Project_Support_Section_Main_Services',
            'priority'    => 103,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings'    => 'pps_main_services_box_3_heading',
            'label'       => esc_html__( 'Box 3 Heading', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_Main_Services',
            'default'     => '',
            'priority'    => 104,
        ]
    );

    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pps_main_services_box_3_list',
            'label'        => esc_html__( 'Box 3 List', 'kirki' ),
            'section'      => 'Post_Project_Support_Section_Main_Services',
            'priority'    => 105,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );

    new \Kirki\Section(
        'Post_Project_Support_Section_Work_Flow',
        [
            'title'       => esc_html__( 'Post Project Support Work Flow', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 450,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pps_workflow_heading',
            'label'       => esc_html__( 'Work Flow Heading', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_Work_Flow',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pps_workflow_image',
            'label'       => esc_html__( 'Work Flow Image', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_Work_Flow',
            'default'     => '',
        ]
    );

    new \Kirki\Section(
        'Post_Project_Support_Section_ESI',
        [
            'title'       => esc_html__( 'Post Project Support ESI Team', 'kirki' ),
            'panel'       => 'Services_Panel',
            'priority'    => 550,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pps_esi_heading',
            'label'       => esc_html__( 'ESI Team Heading', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_ESI',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pps_esi_box_1_image',
            'label'       => esc_html__( 'Box 1 Image', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_ESI',
            'default'     => '',
            'priority'    => 100,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pps_esi_box_1_heading',
            'label'       => esc_html__( 'Box 1 Heading', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_ESI',
            'default'     => '',
            'priority'    => 101,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pps_esi_box_1_list',
            'label'        => esc_html__( 'Box 1 List', 'kirki' ),
            'section'      => 'Post_Project_Support_Section_ESI',
            'priority'    => 102,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'pps_esi_box_2_image',
            'label'       => esc_html__( 'Box 2 Image', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_ESI',
            'default'     => '',
            'priority'    => 103,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'pps_esi_box_2_heading',
            'label'       => esc_html__( 'Box 2 Heading', 'kirki' ),
            'section'     => 'Post_Project_Support_Section_ESI',
            'default'     => '',
            'priority'    => 104,
        ]
    );
    new \Kirki\Field\Repeater(
        [
            'settings'     => 'pps_esi_box_2_list',
            'label'        => esc_html__( 'Box 2 List', 'kirki' ),
            'section'      => 'Post_Project_Support_Section_ESI',
            'priority'    => 105,
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'Your Custom Value', 'kirki' ),
                'field' => 'item',
            ],
            'button_label' => esc_html__( 'Add new', 'kirki' ),
            'default'      => [
                [
                    'item'   => esc_html__( 'Kirki Site', 'kirki' ),
                ],
            ],
            'fields'       => [
                'item'   => [
                    'type'        => 'text',
                    'label'       => 'List Item',
                    'default'     => '',
                ],
            ],
        ]
    );
?>