<?php

    new \Kirki\Panel(
        'Logo_Panel',
        [
            'priority'    => 1100,
            'title'       => esc_html__( 'Main Logo', 'kirki' ),
            'description' => esc_html__( 'Main Logo Sections.', 'kirki' ),
        ]
    );

    new \Kirki\Section(
        'Logo_Section',
        [
            'title'       => esc_html__( 'Main Menu Logo', 'kirki' ),
            'panel'       => 'Logo_Panel',
            'priority'    => 100,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'main_logo_url',
            'label'       => esc_html__( 'Logo', 'kirki' ),
            'section'     => 'Logo_Section',
            'default'     => '',
        ]
    );

?>