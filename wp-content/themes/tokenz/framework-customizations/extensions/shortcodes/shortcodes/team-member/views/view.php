<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
    $image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
    $image = $atts['image']['url'];
}
?>
<div class="team <?php if ( ! empty( $atts['is_compact'] ) ) { esc_attr_e(" team__compact"); } ?>">
    <div class="team_header">
        <div class="team_image-holder">
            <img class="team_image" src="<?php esc_attr_e($image); ?>" alt="<?php esc_attr_e($atts['name']); ?>"/>
        </div>
        <div class="team_meta">
            <div class="team_name">
                <h3><?php esc_html_e($atts['name'], 'tokenz'); ?></h3>
                <span class="team_job"><?php esc_html_e($atts['job'], 'tokenz'); ?></span>
            </div>
            <div class="team_social-wrapper">
                <?php if ( ! empty( $atts['linkedin'] ) ) { ?>
                    <a href="<?php esc_attr_e($atts['linkedin'], 'tokenz') ?>" class="team_social team_social__linkedin">linkedin</a>
                <?php } ?>
                <?php if ( ! empty( $atts['facebook'] ) ) { ?>
                    <a href="<?php esc_attr_e($atts['facebook'], 'tokenz') ?>" class="team_social team_social__facebook">facebook</a>
                <?php } ?>
                <?php if ( ! empty( $atts['twitter'] ) ) { ?>
                    <a href="<?php esc_attr_e($atts['twitter'], 'tokenz') ?>" class="team_social team_social__twitter">twitter</a>
                <?php } ?>
                <?php if ( ! empty( $atts['medium'] ) ) { ?>
                    <a href="<?php esc_attr_e($atts['medium'], 'tokenz') ?>" class="team_social team_social__medium">medium</a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="team_text">
        <p><?php esc_html_e($atts['desc'], 'tokenz'); ?></p>
    </div>
</div>
