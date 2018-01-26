<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>


<div class="dividend">
	<h2 class="heading-2"><?php echo $atts['title'] ?></h2>
	<?php echo $atts['description'] ?>
	<div class="dividend_data">
		<div class="dividend_range">
			<p class="heading-3">Invest</p>
			<p class="dividend_invest-sum">$<span id="invest-sum"><?php echo $atts['max_invest']/2 ?></span></p>
			<input class="dividend_input" type="range" id="dividend_input" min="<?php echo $atts['min_invest'] ?>" max="<?php echo $atts['max_invest'] ?>" value="<?php echo $atts['max_invest']/2 ?>" step="1000">
		</div>
		<div class="dividend_output">
			<div class="dividend_amounts">
				<p class="dividend_amounts-title">Projected token profit:</p>
				<table>
					<tr>
						<td>$<span id="divident-amount-1"></span></td>
						<td>Year 1</td>
					</tr>
					<tr>
						<td>$<span id="divident-amount-2"></span></td>
						<td>Year 2</td>
					</tr>
					<tr>
						<td>$<span id="divident-amount-3"></span></td>
						<td>Year 3</td>
					</tr>
					<tr>
						<td>$<span id="divident-amount-4"></span></td>
						<td>Year 4</td>
					</tr>
					<tr>
						<td>$<span id="divident-amount-5"></span></td>
						<td>Year 5</td>
					</tr>
					<tr>
						<td>$<span id="divident-amount-total"></span></td>
						<td>Total</td>
					</tr>
				</table>
			</div>
			<div class="dividend_legend">
				<p>
					<span class="heading-3">Get </span>
					(Projected profit)
				</p>
				<p class="dividend_legend-description">
					<span class="dividend_legend-icon"></span>
					Reinvestment
				</p>
			</div>
			<div class="dividend_graph">
				<div class="dividend_graph-item">
					<div class="dividend_graph-item-column" id="dividend-graph-1">
						<div class="dividend_graph-item-subcolumn"></div>
					</div>
					<span class="dividend_graph-item-title">Y1</span>
				</div>
				<div class="dividend_graph-item">
					<div class="dividend_graph-item-column" id="dividend-graph-2">
						<div class="dividend_graph-item-subcolumn"></div>
					</div>
					<span class="dividend_graph-item-title">Y2</span>
				</div>
				<div class="dividend_graph-item">
					<div class="dividend_graph-item-column" id="dividend-graph-3">
						<div class="dividend_graph-item-subcolumn"></div>
					</div>
					<span class="dividend_graph-item-title">Y3</span>
				</div>
				<div class="dividend_graph-item">
					<div class="dividend_graph-item-column" id="dividend-graph-4">
						<div class="dividend_graph-item-subcolumn"></div>
					</div>
					<span class="dividend_graph-item-title">Y4</span>
				</div>
				<div class="dividend_graph-item">
					<div class="dividend_graph-item-column" id="dividend-graph-5">
						<div class="dividend_graph-item-subcolumn"></div>
					</div>
					<span class="dividend_graph-item-title">Y5</span>
				</div>
			</div>
		</div>
	</div>
	<h3 class="heading-3">Return on Investment: <span class="dividend_percent" id="return-percent"><?php echo $atts['return_percent'] ?>%</span> per year</h3>
	<p>Annual token profit projection based on investment.</p>
	<a href="#" class="button">Invest</a>
</div>
