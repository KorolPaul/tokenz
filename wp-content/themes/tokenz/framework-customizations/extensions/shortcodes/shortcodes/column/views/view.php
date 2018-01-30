<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
$column_extra_classes = '';

if ( ! empty( $atts['custom_class'] ) ) {
	$column_extra_classes .= ' ' . $atts['custom_class'];
}

if ( ! empty( $atts['slide'] ) ) {
	$column_extra_classes .= ' slider_item';
}
?>

<?php if ( ! empty( $atts['anchor'] ) ) { ?>
	<a name="<?php echo $atts['anchor'] ?>" class="anchor"></a>
<?php } ?>
<div class="<?php echo esc_attr($class) . $column_extra_classes; ?>">
	<?php echo do_shortcode($content); ?>
</div>
