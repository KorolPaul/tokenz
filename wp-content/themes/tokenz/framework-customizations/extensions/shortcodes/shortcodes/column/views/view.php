<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
$column_extra_classes = '';

if ( ! empty( $atts['custom_class'] ) ) {
	$column_extra_classes .= ' ' . $atts['custom_class'];
}
?>
<div class="<?php echo esc_attr($class) . $column_extra_classes; ?>">
	<?php echo do_shortcode($content); ?>
</div>
