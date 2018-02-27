(function($) {

    "use strict";
    var rangeElement,
        percent;

    var calculate = function() {
        var maxValue = rangeElement.attr('max'),
            rangeValue = rangeElement.val(),
            dividendValue = [],
            dividendTotal = 0,
            yearsCount = 5;

        $('#invest-sum').text(rangeValue);

        for(var i = 0; i < yearsCount; i++) {
            dividendValue.push(parseInt(parseInt(rangeValue) * (i+1) * parseFloat(percent)));
            dividendTotal += dividendValue[i];

            $('#divident-amount-' + (i + 1)).text(dividendValue[i]);
            $('#dividend-graph-' + (i + 1)).css('height', ((yearsCount - 1) / ( yearsCount - i + 1) * (rangeValue * 50 / maxValue) + '%' ));
        }

        $('#divident-amount-total').text(dividendTotal);
    }

    $(document).ready(function(){
        rangeElement = $('#dividend_input');
        percent = parseInt($('#return-percent').text()) / 100;

        calculate();
        rangeElement.on('input change', calculate);

        $('.dividend_graph-item-subcolumn').css('height', parseInt($('#return-percent').text()) - 100 + '%');
    });

}(jQuery));
