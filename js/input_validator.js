$(document).ready(function () {
	$('form').validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			message: {
				minlength: 6,
				required: true
			}
		},
		highlight: function (element) {
			var id_attr = '#' + $(element).attr("id") + "1";
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			$(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');
		},

		unhighlight: function (element) {
			var id_attr = '#' + $(element).attr("id") + "1";
			$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			$(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');
		},
		errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.length) {
                error.insertAfter(element);
            } else {
            error.insertAfter(element);
            }
        } 
	});

});