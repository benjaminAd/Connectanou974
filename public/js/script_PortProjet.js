$(function() {
	$('select[name="typeOrganisation"]').val('organisation');
	$('#nomorganisation').show();
	$('#nomentreprise').hide();
	$('#nomassociation').hide();
	$('select[name="typeOrganisation"]').change(function() {
		// lorsqu'on change de valeur dans la liste
		var valeur = $(this).val(); // valeur sélectionnée
		if (valeur == 'particulier') {
			console.log('je suis un ' + valeur);
			$('.importSelect').show();
			$('#posteEntreprise').prop('required', true);
			$('#nomorganisation').show();
			$('#nomentreprise').hide();
			$('#nomassociation').hide();
		} else if (valeur == 'entreprise') {
			console.log('je suis une ' + valeur);
			$('.importSelect').hide();
			$('#nomassociation').hide();
			$('#nomorganisation').hide();
			$('#posteEntreprise').prop('required', false);
			$('#nomentreprise').show();
		} else if (valeur == 'association') {
			console.log('je suis une ' + valeur);
			$('.importSelect').hide();
			$('#posteEntreprise').prop('required', false);
			$('#nomentreprise').hide();
			$('#nomorganisation').hide();
			$('#nomassociation').show();
		} else if (valeur == 'organisation') {
			console.log('je suis une organisation');
			$('.importSelect').show();
			$('#nomassociation').hide();
			$('#nomentreprise').hide();
			$('#posteEntreprise').prop('required', true);
			$('#nomorganisation').show();
		}
		$("select[name='NomAssociation']").change(function() {
			var val2 = $(this).val();
			if (val2 == 'ajouter') {
				console.log('ajouter');
				window.location = 'SubscribeOrga';
			}
		});
		$("select[name='NomEntreprise']").change(function() {
			var val2 = $(this).val();
			if (val2 == 'ajouter') {
				console.log('ajouter');
				window.location = 'SubscribeOrga';
			}
		});
	});
});
/*(function () {
    'use strict';
    window.addEventListener(
        'load',
        function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener(
                    'submit',
                    function (event) {
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
})();*/
