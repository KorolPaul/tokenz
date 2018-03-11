<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'custom_class' => array(
        'label' => __('Custom class', 'tokenz'),
        'desc'  => __('Cusom CSS class fot column', 'tokenz'),
        'type'  => 'text',
    ),
    'anchor' => array(
        'label' => __('Anchor', 'tokenz'),
        'desc'  => __('Anchor for menu items', 'tokenz'),
        'type'  => 'text',
    ),
    'slide' => array(
        'label' => __('Slider item', 'tokenz'),
        'desc'  => __('Use element as slider item', 'tokenz'),
        'type'  => 'checkbox',
    )
);
