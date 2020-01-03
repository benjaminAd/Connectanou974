$(function() {
	$('#Formations').hide();
	$('#EcoleAjout').hide();
	$('#FormationAjout').hide();
	$('#DiplomeAjout').hide();
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
			$('#Formations').show();
		} else {
			$('#ecole').hide();
			$('#Formations').hide();
		}
	});
	$("select[name='Formation']").change(function() {
		var val = $(this).val();
		if (val == 'Autre') {
			$('#FormationAjout').show();
		} else {
			$('#FormationAjout').hide();
		}
	});
	$("select[name='Diplome']").change(function() {
		var val = $(this).val();
		if (val == 'Autre') {
			$('#DiplomeAjout').show();
		} else {
			$('#DiplomeAjout').hide();
		}
	});
});
