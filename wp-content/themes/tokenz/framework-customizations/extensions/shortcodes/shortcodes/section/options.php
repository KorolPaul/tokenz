<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'is_fullwidth' => array(
        'label'        => __('Full Width', 'tokenz'),
        'type'         => 'switch',
    ),
    'background_color' => array(
        'label' => __('Background Color', 'tokenz'),
        'desc'  => __('Please select the background color', 'tokenz'),
        'type'  => 'color-picker',
    ),
    'background_image' => array(
        'label'   => __('Background Image', 'tokenz'),
        'desc'    => __('Please select the background image', 'tokenz'),
        'type'    => 'background-image',
        'choices' => array(//	in future may will set predefined images
        )
    ),
    'video' => array(
        'label' => __('Background Video', 'tokenz'),
        'desc'  => __('Insert Video URL to embed this video', 'tokenz'),
        'type'  => 'text',
    ),
    'custom_class' => array(
        'label' => __('Custom class', 'tokenz'),
        'desc'  => __('Cusom CSS class fot section', 'tokenz'),
        'type'  => 'text',
    )
);
