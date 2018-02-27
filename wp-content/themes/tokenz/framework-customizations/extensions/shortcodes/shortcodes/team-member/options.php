<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'image' => array(
        'label' => __( 'Team Member Image', 'fw' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
        'type'  => 'upload'
    ),
    'name'  => array(
        'label' => __( 'Team Member Name', 'fw' ),
        'desc'  => __( 'Name of the person', 'fw' ),
        'type'  => 'text',
        'value' => ''
    ),
    'job'   => array(
        'label' => __( 'Team Member Job Title', 'fw' ),
        'desc'  => __( 'Job title of the person.', 'fw' ),
        'type'  => 'text',
        'value' => ''
    ),
    'desc'  => array(
        'label' => __( 'Team Member Description', 'fw' ),
        'desc'  => __( 'Enter a few words that describe the person', 'fw' ),
        'type'  => 'textarea',
        'value' => ''
    ),
    'linkedin'  => array(
        'label' => __( 'Linkedin account', 'fw' ),
        'desc'  => __( 'Enter linkedin account link', 'fw' ),
        'type'  => 'text',
        'value' => ''
    ),
    'facebook'  => array(
        'label' => __( 'Facebook account', 'fw' ),
        'desc'  => __( 'Enter facebook account link', 'fw' ),
        'type'  => 'text',
        'value' => ''
    ),
    'twitter'  => array(
        'label' => __( 'Twitter account', 'fw' ),
        'desc'  => __( 'Enter twitter account link', 'fw' ),
        'type'  => 'text',
        'value' => ''
    ),
    'medium'  => array(
        'label' => __( 'Medium account', 'fw' ),
        'desc'  => __( 'Enter medium account link', 'fw' ),
        'type'  => 'text',
        'value' => ''
    ),
    'is_compact'  => array(
        'label' => __( 'Compact view', 'fw' ),
        'desc'  => __( '', 'fw' ),
        'type'  => 'checkbox',
        'value' => ''
    )
);
