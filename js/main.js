(function ($, window, document) {
	$(function () {

		$("#slProvincia").change(function() {
			var idProvincia = $(this).val();
			$.ajax({
                type: 'GET',
                url: 'backend.php',
                dataType: 'JSON',
                data: {idProvincia: idProvincia},
                success: function (pSuccessData) {
                	var cantones = pSuccessData;
                	console.log(JSON.stringify(pSuccessData));

                	$('#slCanton').html("");

                	$.each(cantones, function( index, value ) {
					  $('#slCanton').append($('<option>', { 
					        value: index,
					        text : value
					  }));
					});
                }
            });
		});

	});
}(window.jQuery, window, document));