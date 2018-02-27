<?php
/**
 * Template part for displaying social buttons
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tokenz
 */

?>

<div class="social">
    <?php if ( get_option('instagram_url') ) : ?>
        <a href="<?php echo esc_url(get_option('instagram_url')) ?>" class="social_link social_link__instagram">instagram</a>
    <?php endif; ?>
    <?php if ( get_option('facebook_url') ) : ?>
        <a href="<?php echo esc_url(get_option('facebook_url')) ?>" class="social_link social_link__facebook">facebook</a>
    <?php endif; ?>
    <?php if ( get_option('twitter_url') ) : ?>
        <a href="<?php echo esc_url(get_option('twitter_url')) ?>" class="social_link social_link__twitter">twitter</a>
    <?php endif; ?>
    <?php if ( get_option('skype_url') ) : ?>
        <a href="<?php echo esc_url(get_option('skype_url')) ?>" class="social_link social_link__skype">skype</a>
    <?php endif; ?>
    <?php if ( get_option('slack_url') ) : ?>
        <a href="<?php echo esc_url(get_option('slack_url')) ?>" class="social_link social_link__slack">slack</a>
    <?php endif; ?>
    <?php if ( get_option('snapchat_url') ) : ?>
        <a href="<?php echo esc_url(get_option('snapchat_url')) ?>" class="social_link social_link__snapchat">snapchat</a>
    <?php endif; ?>
    <?php if ( get_option('medium_url') ) : ?>
        <a href="<?php echo esc_url(get_option('medium_url')) ?>" class="social_link social_link__medium">medium</a>
    <?php endif; ?>
    <?php if ( get_option('linkedin_url') ) : ?>
        <a href="<?php echo esc_url(get_option('linkedin_url')) ?>" class="social_link social_link__linkedin">linkedin</a>
    <?php endif; ?>
    <?php if ( get_option('youtube_url') ) : ?>
        <a href="<?php echo esc_url(get_option('youtube_url')) ?>" class="social_link social_link__youtube">youtube</a>
    <?php endif; ?>
</div>
