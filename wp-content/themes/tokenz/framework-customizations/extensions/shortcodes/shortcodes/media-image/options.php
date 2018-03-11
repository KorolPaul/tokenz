<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'image'            => array(
        'type'  => 'upload',
        'label' => __( 'Choose Image', 'tokenz' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'tokenz' )
    ),
    'size'             => array(
        'type'    => 'group',
        'options' => array(
            'width'  => array(
                'type'  => 'text',
                'label' => __( 'Width', 'tokenz' ),
                'desc'  => __( 'Set image width', 'tokenz' ),
                'value' => 300
            ),
            'height' => array(
                'type'  => 'text',
                'label' => __( 'Height', 'tokenz' ),
                'desc'  => __( 'Set image height', 'tokenz' ),
                'value' => 200
            ),
            'is_fullscreen' => array(
                'type'  => 'checkbox',
                'label' => __( 'Full screen', 'tokenz' ),
                'desc'  => __( '', 'tokenz' )
            )
        )
    ),
    'image-link-group' => array(
        'type'    => 'group',
        'options' => array(
            'link'   => array(
                'type'  => 'text',
                'label' => __( 'Image Link', 'tokenz' ),
                'desc'  => __( 'Where should your image link to?', 'tokenz' )
            ),
            'target' => array(
                'type'         => 'switch',
                'label'        => __( 'Open Link in New Window', 'tokenz' ),
                'desc'         => __( 'Select here if you want to open the linked page in a new window', 'tokenz' ),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __( 'Yes', 'tokenz' ),
                ),
                'left-choice'  => array(
                    'value' => '_self',
                    'label' => __( 'No', 'tokenz' ),
                ),
            ),
        )
    )
);

