<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'custom_class' => array(
		'label' => __('Custom class', 'fw'),
		'desc'  => __('Cusom CSS class fot column', 'fw'),
		'type'  => 'text',
	),
	'anchor' => array(
		'label' => __('Anchor', 'fw'),
		'desc'  => __('Anchor for menu items', 'fw'),
		'type'  => 'text',
	),
	'slide' => array(
		'label' => __('Slider item', 'fw'),
		'desc'  => __('Use element as slider item', 'fw'),
		'type'  => 'checkbox',
	)
);
