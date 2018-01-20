<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}
?>
<div class="team <?php if ( ! empty( $atts['is_compact'] ) ) { echo " team__compact"; } ?>">
	<div class="team_image-holder">
		<img class="team_image" src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($atts['name']); ?>"/>
	</div>
	<div class="team_inner">
		<div class="team_name">
			<h3><?php echo $atts['name']; ?></h3>
			<span class="team_job"><?php echo $atts['job']; ?></span>
		</div>
		<div class="team_text">
			<p><?php echo $atts['desc']; ?></p>
		</div>
		<?php if ( ! empty( $atts['linkedin'] ) ) { ?>
			<a href="<?php echo $atts['linkedin'] ?>" class="team_social team_social__linkedin">linkedin</a>
		<?php } ?>
		<?php if ( ! empty( $atts['facebook'] ) ) { ?>
			<a href="<?php echo $atts['facebook'] ?>" class="team_social team_social__facebook">facebook</a>
		<?php } ?>
		<?php if ( ! empty( $atts['twitter'] ) ) { ?>
			<a href="<?php echo $atts['twitter'] ?>" class="team_social team_social__twitter">twitter</a>
		<?php } ?>
		<?php if ( ! empty( $atts['medium'] ) ) { ?>
			<a href="<?php echo $atts['medium'] ?>" class="team_social team_social__medium">medium</a>
		<?php } ?>
	</div>
</div>