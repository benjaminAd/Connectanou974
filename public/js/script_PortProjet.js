$(function() {
	$('select[name="type_organisation"]').val();
	$('#nomorganisation').show();
	$('#nomentreprise').hide();
	$('#nomassociation').hide();
	$('select[name="type_organisation"]').change(function() {
		// lorsqu'on change de valeur dans la liste
		var valeur = $(this).val(); // valeur sélectionnée
		if (valeur == 'particulier') {
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
