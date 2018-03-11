<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'label'  => array(
        'label' => __( 'Button Label', 'tokenz' ),
        'desc'  => __( 'This is the text that appears on your button', 'tokenz' ),
        'type'  => 'text',
        'value' => 'Submit'
    ),
    'link'   => array(
        'label' => __( 'Button Link', 'tokenz' ),
        'desc'  => __( 'Where should your button link to', 'tokenz' ),
        'type'  => 'text',
        'value' => '#'
    ),
    'target' => array(
        'type'  => 'switch',
        'label'   => __( 'Open Link in New Window', 'tokenz' ),
        'desc'    => __( 'Select here if you want to open the linked page in a new window', 'tokenz' ),
        'right-choice' => array(
            'value' => '_blank',
            'label' => __('Yes', 'tokenz'),
        ),
        'left-choice' => array(
            'value' => '_self',
            'label' => __('No', 'tokenz'),
        ),
    ),
    'color'  => array(
        'label'   => __( 'Button Color', 'tokenz' ),
        'desc'    => __( 'Choose a color for your button', 'tokenz' ),
        'type'    => 'select',
        'choices' => array(
            ''      => __('Default', 'tokenz'),
            'white' => __( 'White', 'tokenz' ),
            'yellow'  => __( 'Yellow', 'tokenz' ),
            'blue'  => __( 'Blue', 'tokenz' ),
            'big'  => __( 'Big button', 'tokenz' ),
            'big-yellow'  => __( 'Big yellow', 'tokenz' ),
            'big-white'  => __( 'Big white', 'tokenz' ),
        )
    ),
);
