<?php

    new \Kirki\Panel(
        'IEG_Page_Panel',
        [
            'priority'    => 9900,
            'title'       => esc_html__( 'IEG Page', 'kirki' ),
            'description' => esc_html__( 'IEG Page Sections.', 'kirki' ),
        ]
    );

    new \Kirki\Section(
        'IEG_Main_Section',
        [
            'title'       => esc_html__( 'IEG Main Section', 'kirki' ),
            'description' => esc_html__( 'IEG Main Section', 'kirki' ),
            'panel'       => 'IEG_Page_Panel',
            'priority'    => 100,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'ieg_main_image',
            'label'       => esc_html__( 'IEG Image', 'kirki' ),
            'section'     => 'IEG_Main_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'ieg_explained_description',
            'label'       => esc_html__( 'IEG Explained Description', 'kirki' ),
            'section'     => 'IEG_Main_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Section(
        'IEG_Connected_System_Section',
        [
            'title'       => esc_html__( 'IEG Connected System Section', 'kirki' ),
            'description' => esc_html__( 'IEG Connected System Section', 'kirki' ),
            'panel'       => 'IEG_Page_Panel',
            'priority'    => 200,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'bam_description',
            'label'       => esc_html__( 'BAM Description', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'bam_image',
            'label'       => esc_html__( 'BAM Image', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'thermal_grid_description',
            'label'       => esc_html__( 'Thermal Grid Description', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'thermal_grid_image',
            'label'       => esc_html__( 'Thermal Grid Image', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'nano_grid_description',
            'label'       => esc_html__( 'Nano Grid Description', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'nano_grid_image',
            'label'       => esc_html__( 'Nano Grid Image', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'battery_energy_description',
            'label'       => esc_html__( 'Battery Energy Storage Systems Description', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'battery_energy_image',
            'label'       => esc_html__( 'Battery Energy Storage Systems Image', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'renewable_energy_description',
            'label'       => esc_html__( 'Renewable Energy Sources Description', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'renewable_energy_image',
            'label'       => esc_html__( 'Renewable Energy Sources Image', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'micro_chp_description',
            'label'       => esc_html__( 'Micro-CHP Description', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'micro_chp_image',
            'label'       => esc_html__( 'Micro-CHP Image', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'traditional_generators_image',
            'label'       => esc_html__( 'Traditional Generators Image', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'micro_chp_2_image',
            'label'       => esc_html__( 'Micro CHP Image 2', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'generator_description',
            'label'       => esc_html__( 'Generator Description', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'generator_image',
            'label'       => esc_html__( 'Generator Image', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'public_utility_description',
            'label'       => esc_html__( 'Public Utility Description', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'public_utility_image',
            'label'       => esc_html__( 'Public Utility Image', 'kirki' ),
            'section'     => 'IEG_Connected_System_Section',
            'default'     => '',
        ]
    );
    new \Kirki\Section(
        'In_Summary_Section',
        [
            'title'       => esc_html__( 'In Summary Section', 'kirki' ),
            'description' => esc_html__( 'In Summary Section', 'kirki' ),
            'panel'       => 'IEG_Page_Panel',
            'priority'    => 400,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'in_summary_description',
            'label'       => esc_html__( 'In Summary Description', 'kirki' ),
            'section'     => 'In_Summary_Section',
            'default'     => '',
        ]
    );
?>