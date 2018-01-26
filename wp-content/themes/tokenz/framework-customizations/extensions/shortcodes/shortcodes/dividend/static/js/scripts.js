(function($) {

	"use strict";
	var calculate = function() {
		
		var percent = parseInt($('#return-percent').text()) / 100,
			maxValue = $(this).attr('max'),
			rangeValue = $(this).val(),
			dividendValue = [],
			dividendTotal = 0;

		$('#invest-sum').text(rangeValue);

		for(var i = 1; i < 6; i++) {
			dividendValue.push(parseInt(parseInt(rangeValue) * i * parseFloat(percent)));
			dividendTotal += dividendValue[i-1];

			$('#divident-amount-' + i).text(dividendValue[i-1]);
			$('#dividend-graph-' + i).css('height', (50 + (rangeValue * 100 / maxValue) / (6 - i) + '%' ));
		}

		$('#divident-amount-total').text(dividendTotal);
	}

	$(document).ready(function(){
		$('#dividend_input').on('input change', calculate);
		calculate();

		$('.dividend_graph-item-subcolumn').css('height', parseInt($('#return-percent').text()) - 100 + '%');
	});

}(jQuery));