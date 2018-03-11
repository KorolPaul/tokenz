<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'title' => array(
        'label' => __('Title', 'tokenz'),
        'desc'  => __('Block title', 'tokenz'),
        'type'  => 'text',
    ),
    'description' => array(
        'label' => __('Description', 'tokenz'),
        'desc'  => __('Block intro text', 'tokenz'),
        'type'  => 'wp-editor',
    ),
    'min_invest' => array(
        'label' => __('Minimum invest amount', 'tokenz'),
        'desc'  => __('Minimum invest amount', 'tokenz'),
        'type'  => 'text',
    ),
    'max_invest' => array(
        'label' => __('Maximum invest amount', 'tokenz'),
        'desc'  => __('Maximum invest amount', 'tokenz'),
        'type'  => 'text',
    ),
    'return_percent' => array(
        'label' => __('Return percent', 'tokenz'),
        'desc'  => __('Return percent', 'tokenz'),
        'type'  => 'text',
    ),
);
