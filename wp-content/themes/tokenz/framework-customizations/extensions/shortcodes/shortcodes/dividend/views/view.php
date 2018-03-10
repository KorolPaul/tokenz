<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>


<div class="dividend">
    <h2 class="heading-2"><?php esc_html_e($atts['title'], 'tokenz') ?></h2>
    <p><?php echo(wp_kses($atts['description'], 'tokenz' )) ?></p>
    <div class="dividend_data">
        <div class="dividend_range">
            <p class="dividend_range-title"><?php _e('Invest', 'tokenz') ?></p>
            <p class="dividend_invest-sum">
                $<span id="invest-sum"><?php esc_html_e($atts['max_invest']/2, 'tokenz') ?></span>
            </p>
            <div class="dividend_input-wrapper">
                <input class="dividend_input" type="range" id="dividend_input" min="<?php esc_attr_e($atts['min_invest'], 'tokenz') ?>" max="<?php esc_attr_e($atts['max_invest'], 'tokenz') ?>" value="<?php esc_attr_e($atts['max_invest']/2, 'tokenz') ?>" step="1000">
            </div>
        </div>
        <div class="dividend_output">
            <div class="dividend_amounts">
                <p class="dividend_amounts-title"><?php _e('Projected token profit', 'tokenz') ?>:</p>
                <table>
                    <tr>
                        <td>$<span id="divident-amount-1"></span></td>
                        <td><?php _e('Year 1', 'tokenz') ?></td>
                    </tr>
                    <tr>
                        <td>$<span id="divident-amount-2"></span></td>
                        <td><?php _e('Year 2', 'tokenz') ?></td>
                    </tr>
                    <tr>
                        <td>$<span id="divident-amount-3"></span></td>
                        <td><?php _e('Year 3', 'tokenz') ?></td>
                    </tr>
                    <tr>
                        <td>$<span id="divident-amount-4"></span></td>
                        <td><?php _e('Year 4', 'tokenz') ?></td>
                    </tr>
                    <tr>
                        <td>$<span id="divident-amount-5"></span></td>
                        <td><?php _e('Year 5', 'tokenz') ?></td>
                    </tr>
                    <tr>
                        <td>$<span id="divident-amount-total"></span></td>
                        <td><?php _e('Total', 'tokenz') ?></td>
                    </tr>
                </table>
            </div>
            <div class="dividend_legend">
                <p>
                    <span class="dividend_legend-title"><?php _e('Get', 'tokenz') ?></span>
                    <?php _e('(Projected profit)', 'tokenz') ?>
                </p>
                <p class="dividend_legend-description">
                    <span class="dividend_legend-icon"></span>
                    <?php _e('Reinvestment', 'tokenz') ?>
                </p>
            </div>
            <div class="dividend_graph">
                <div class="dividend_graph-item">
                    <div class="dividend_graph-item-column" id="dividend-graph-1">
                        <div class="dividend_graph-item-subcolumn"></div>
                    </div>
                    <span class="dividend_graph-item-title"><?php _e('Y1', 'tokenz') ?></span>
                </div>
                <div class="dividend_graph-item">
                    <div class="dividend_graph-item-column" id="dividend-graph-2">
                        <div class="dividend_graph-item-subcolumn"></div>
                    </div>
                    <span class="dividend_graph-item-title"><?php _e('Y2', 'tokenz') ?></span>
                </div>
                <div class="dividend_graph-item">
                    <div class="dividend_graph-item-column" id="dividend-graph-3">
                        <div class="dividend_graph-item-subcolumn"></div>
                    </div>
                    <span class="dividend_graph-item-title"><?php _e('Y3', 'tokenz') ?></span>
                </div>
                <div class="dividend_graph-item">
                    <div class="dividend_graph-item-column" id="dividend-graph-4">
                        <div class="dividend_graph-item-subcolumn"></div>
                    </div>
                    <span class="dividend_graph-item-title"><?php _e('Y4', 'tokenz') ?></span>
                </div>
                <div class="dividend_graph-item">
                    <div class="dividend_graph-item-column" id="dividend-graph-5">
                        <div class="dividend_graph-item-subcolumn"></div>
                    </div>
                    <span class="dividend_graph-item-title"><?php _e('Y5', 'tokenz') ?></span>
                </div>
            </div>
        </div>
    </div>
    <h3 class="dividend_sum">
        <?php _e('Return on Investment', 'tokenz') ?>:
        <span class="dividend_percent" id="return-percent"><?php esc_html_e($atts['return_percent'], 'tokenz') ?>%</span> <?php _e('per year', 'tokenz') ?>
    </h3>
    <p><?php _e('Annual token profit projection based on investment', 'tokenz') ?>.</p>
    <a href="#" class="button fw-btn-big"><?php _e('Invest', 'tokenz') ?></a>
</div>
