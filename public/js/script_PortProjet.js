$(function () {
  var valeur = ($('select[name="type_organisation"]').val());

  if (valeur == 'particulier') {
    $('.importSelect').show();
    $('#nomorganisation').show();
    $('#nomentreprise').hide();
    $('#nomassociation').hide();
  } else if (valeur == 'entreprise') {
    $('.importSelect').hide();
    $('#nomassociation').hide();
    $('#nomorganisation').hide();
    $('#posteEntreprise').prop('required', false);
    $('#nomentreprise').show();
  } else if (valeur == 'association') {
    $('.importSelect').hide();
    $('#posteEntreprise').prop('required', false);
    $('#nomentreprise').hide();
    $('#nomorganisation').hide();
    $('#nomassociation').show();
  } else {
    $('#nomorganisation').show();
    $('#nomentreprise').hide();
    $('#nomassociation').hide();
  }

  $('select[name="type_organisation"]').change(function () {
    // lorsqu'on change de valeur dans la liste
    var valeur = $(this).val(); // valeur sélectionnée
    if (valeur == 'particulier') {
      $('.importSelect').show();
      $('#nomorganisation').show();
      $('#nomentreprise').hide();
      $('#nomassociation').hide();
    } else if (valeur == 'entreprise') {
      $('.importSelect').hide();
      $('#nomassociation').hide();
      $('#nomorganisation').hide();
      $('#posteEntreprise').prop('required', false);
      $('#nomentreprise').show();
    } else if (valeur == 'association') {
      $('.importSelect').hide();
      $('#posteEntreprise').prop('required', false);
      $('#nomentreprise').hide();
      $('#nomorganisation').hide();
      $('#nomassociation').show();
    } else if (valeur == 'organisation') {
      $('.importSelect').show();
      $('#nomassociation').hide();
      $('#nomentreprise').hide();
      $('#posteEntreprise').prop('required', true);
      $('#nomorganisation').show();
    }
    $("select[name='NomAssociation']").change(function () {
      var val2 = $(this).val();
      if (val2 == 'ajouter') {
        console.log('ajouter');
        window.location = 'SubscribeOrga';
      }
    });
    $("select[name='NomEntreprise']").change(function () {
      var val2 = $(this).val();
      if (val2 == 'ajouter') {
        console.log('ajouter');
        window.location = 'SubscribeOrga';
      }
    });
  });
});