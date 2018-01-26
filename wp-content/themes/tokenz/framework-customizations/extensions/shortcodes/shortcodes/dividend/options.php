<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'label' => __('Title', 'fw'),
		'desc'  => __('Block title', 'fw'),
		'type'  => 'text',
	),
	'description' => array(
		'label' => __('Description', 'fw'),
		'desc'  => __('Block intro text', 'fw'),
		'type'  => 'wp-editor',
	),
	'min_invest' => array(
		'label' => __('Minimum invest amount', 'fw'),
		'desc'  => __('Minimum invest amount', 'fw'),
		'type'  => 'text',
	),
	'max_invest' => array(
		'label' => __('Maximum invest amount', 'fw'),
		'desc'  => __('Maximum invest amount', 'fw'),
		'type'  => 'text',
	),
	'return_percent' => array(
		'label' => __('Return percent', 'fw'),
		'desc'  => __('Return percent', 'fw'),
		'type'  => 'text',
	),
);