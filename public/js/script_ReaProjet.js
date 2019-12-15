$(function() {
	$('#EcoleAjout').hide();
	$("select[name='Ecole']").change(function() {
		var val = $(this).val();
		if (val == 'autre') {
			$('#EcoleAjout').show();
		} else {
			$('#EcoleAjout').hide();
		}
	});
	$('#ecole').hide();
	$("select[name='statut']").change(function() {
		var val = $(this).val();
		if (val == 1) {
			$('#ecole').show();
		} else {
			$('#ecole').hide();
		}
	});
});
(function() {
	'use strict';
	window.addEventListener(
		'load',
		function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener(
					'submit',
					function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					},
					false
				);
			});
		},
		false
	);
})();
