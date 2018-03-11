<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'image' => array(
        'label' => __( 'Team Member Image', 'tokenz' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'tokenz' ),
        'type'  => 'upload'
    ),
    'name'  => array(
        'label' => __( 'Team Member Name', 'tokenz' ),
        'desc'  => __( 'Name of the person', 'tokenz' ),
        'type'  => 'text',
        'value' => ''
    ),
    'job'   => array(
        'label' => __( 'Team Member Job Title', 'tokenz' ),
        'desc'  => __( 'Job title of the person.', 'tokenz' ),
        'type'  => 'text',
        'value' => ''
    ),
    'desc'  => array(
        'label' => __( 'Team Member Description', 'tokenz' ),
        'desc'  => __( 'Enter a few words that describe the person', 'tokenz' ),
        'type'  => 'textarea',
        'value' => ''
    ),
    'linkedin'  => array(
        'label' => __( 'Linkedin account', 'tokenz' ),
        'desc'  => __( 'Enter linkedin account link', 'tokenz' ),
        'type'  => 'text',
        'value' => ''
    ),
    'facebook'  => array(
        'label' => __( 'Facebook account', 'tokenz' ),
        'desc'  => __( 'Enter facebook account link', 'tokenz' ),
        'type'  => 'text',
        'value' => ''
    ),
    'twitter'  => array(
        'label' => __( 'Twitter account', 'tokenz' ),
        'desc'  => __( 'Enter twitter account link', 'tokenz' ),
        'type'  => 'text',
        'value' => ''
    ),
    'medium'  => array(
        'label' => __( 'Medium account', 'tokenz' ),
        'desc'  => __( 'Enter medium account link', 'tokenz' ),
        'type'  => 'text',
        'value' => ''
    ),
    'is_compact'  => array(
        'label' => __( 'Compact view', 'tokenz' ),
        'desc'  => __( '', 'tokenz' ),
        'type'  => 'checkbox',
        'value' => ''
    )
);
