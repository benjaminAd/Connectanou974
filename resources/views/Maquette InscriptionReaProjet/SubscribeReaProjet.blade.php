@extends('layout')
@section('title')
    <title>Inscription De Réalisateur de Projet</title>
@endsection
@section('link')
    <link rel="stylesheet" href="./css/style_ReaProjet.css" />
@endsection
@section('body')
@include('navbar')
     <div class="d-flex justify-content-center align-items-center divCon mt-5">
     <form class="border border-light p-5 divConnect needs-validation" action="{{{url("Realisateur")}}}" method="POST" enctype="multipart/form-data">
       {{csrf_field()}}
      <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo" />
      <p class="h4 mb-4 text-center">Inscrivez-vous en tant que Réalisateur de Projet</p>
      @if ($errors->has('Diffmdp')) <div class="alert alert-danger">{{ $errors->first('Diffmdp') }}</div> @endif
      @if ($errors->has('MailUsed')) <div class="alert alert-danger">{{ $errors->first('MailUsed') }}</div> @endif
      @if ($errors->has('LoginUsed')) <div class="alert alert-danger">{{ $errors->first('LoginUsed') }}</div> @endif
      <div class="row">
        <div class="form-group col">
          <label for="nom">Nom<span id="important">*</span></label>
          <input type="text" name="nom" class="form-control" id="nom" value="{{{old("nom")}}}" placeholder="ex : Payet"  />
           @if ($errors->has('nom')) <div class="alert alert-danger">{{ $errors->first('nom') }}</div> @endif
        </div>
        &nbsp;&nbsp;&nbsp;
        <div class="form-group col">
          <label for="prenom">Prénom<span id="important">*</span></label>
          <input type="text" name="prenom" class="form-control" id="prenom" value="{{{old("prenom")}}}" placeholder="ex : Marc"  />
           @if ($errors->has('prenom')) <div class="alert alert-danger">{{ $errors->first('prenom') }}</div> @endif
        </div>
      </div>
      <div class="form-group">
        <label for="naissance">Date de Naissance<span id="important">*</span></label>
        <input class="form-control" name="naissance" type="date" value="" id="naissance" value="{{{old("naissance")}}}" />
         @if ($errors->has('naissance')) <div class="alert alert-danger">{{ $errors->first('naissance') }}</div> @endif
      </div>
       <div class="form-group">
                <label for="tel">Numéro de Téléphone<span id="important">*</span></label>
                <input type="tel" name="tel" id="telephone" class="form-control" placeholder="ex : 0692 xx xx xx" value="{{old('tel')}}"/>
                @if ($errors->has('tel')) <div class="alert alert-danger">{{ $errors->first('tel') }}</div> @endif
            </div>
      <div class="form-group">
        <label>Statut<span id="important">*</span></label>
        <select name="statut" class="custom-select" id="statut">
          <option value="" selected>Statut</option>
          @foreach ($Statuts as $Statut)
        <option value="{{{$Statut->id}}}">{{{$Statut->Statut}}}</option>
          @endforeach
        </select>
      </div>
      <div id="ecole" class="form-group">
        <label>École<span id="important">*</span></label>
        <select name="Ecole" class="custom-select" id="Ecole">
          <option value="" selected>Ecoles</option>
          @foreach ($Ecoles as $Ecole)
            <option value="{{{$Ecole->Id}}}">{{{$Ecole->RaisonSociale}}}</option>
          @endforeach
          <option value="autre">Autre</option>
        </select>
      </div>
      <div class="form-group" id="EcoleAjout">
        <label>Nom de votre Ecole<span id="important">*</span></label>
        <input type="text" class="form-control" placeholder="ex : Université de La Réunion" value="{{{old("ecoleNom")}}}" name="EcoleNom" id="EcoleNom"/>
      </div>
       <div class="form-group" id="Formations">
        <label>Formation en cours<span id="important">*</span></label>
        <select name="Formation" id="Formation" class="custom-select">
          <option value="" selected>Formation<span id="important">*</span></option>
          @foreach ($Formations as $Formation)
            <option value="{{{$Formation->Id}}}">{{{$Formation->Formations}}}</option>
          @endforeach
          <option value="Autre">Autre</option>
        </select>
      </div>
      <div class="form-group" id="FormationAjout">
        <label>Nom de votre Formation<span id="important">*</span></label>
        <input type="text" class="form-control" placeholder="ex : Licence Informatique" value="{{{old("NomFormation")}}}" name="NomFormation">
      </div>
      <div class="form-group">
        <label for="domaine">Domaine<span id="important">*</span></label>
        <select name="Domains" id="Domaines" class="custom-select">
          <option value="" selected>Domaine</option>
          @foreach ($Domaines as $Domaine)
            <option value="{{{$Domaine->Id}}}">{{{$Domaine->Domaines}}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label>Niveau d'études<span id="important">*</span></label>
        <select name="NiveauEtude" class="custom-select col" id="Niveau">
          <option value="" selected>Niveau</option>
          @foreach ($NiveauxEtude as $niveau)
            <option value="{{{$niveau->id}}}">{{{$niveau->NiveauEtude}}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group" id="Formations">
        <label>Diplome<span id="important">*</span></label>
        <select name="Diplome" id="Diplome" class="custom-select">
          <option value="" selected>Diplome</option>
          @foreach ($Diplomes as $Diplome)
            <option value="{{{$Diplome->Id}}}">{{{$Diplome->label}}}</option>
          @endforeach
          <option value="Autre">Autre</option>
        </select>
      </div>
      <div class="form-group" id="DiplomeAjout">
        <label>Nom de votre Diplome<span id="important">*</span></label>
        <input type="text" class="form-control" placeholder="ex : Licence Informatique" value="{{{old("NomDiplome")}}}" name="NomDiplome">
      </div>
      <!-- Email -->
      <div class="form-group">
        <label for="mail">Adresse E-Mail<span id="important">*</span></label>
        <input type="email" name="mail" id="mail" class="form-control" placeholder="ex : MarcPayet97@gmail.com" value="{{{old("mail")}}}"  />
         @if ($errors->has('mail')) <div class="alert alert-danger">{{ $errors->first('mail') }}</div> @endif
      </div>
      <div class="form-group">
        <label for="login">Pseudo<span id="important">*</span></label>
        <input type="text" name="login" class="form-control" id="login" placeholder="ex : BoulangeriePayet974" value="{{{old("login")}}}" />
         @if ($errors->has('login')) <div class="alert alert-danger">{{ $errors->first('login') }}</div> @endif
      </div>
      <!-- Password -->
      <div class="form-group">
        <label for="password">Mot de Passe<span id="important">*</span></label>
        <input type="password" name="password" id="mdp" class="form-control" placeholder="***************"  />
         @if ($errors->has('password')) <div class="alert alert-danger">{{ $errors->first('password') }}</div> @endif
      </div>
      <div class="form-group">
        <label for="password2">Confirmez votre Mot de Passe<span id="important">*</span></label>
        <input type="password" name="password2" id="mdp2" class="form-control" placeholder="***************"  />
         @if ($errors->has('password2')) <div class="alert alert-danger">{{ $errors->first('password2') }}</div> @endif
      </div>
      <div class="form-group">
        <label for="linkedin">Lien vers votre page Linkedin<span id="important">*</span></label>
        <input type="url" id="linkedin" name="linkedin" class="form-control" placeholder="ex :www.linkedin.com/in/payet-marc-198755421" value="{{{old("linkedin")}}}" />
         @if ($errors->has('linkedin')) <div class="alert alert-danger">{{ $errors->first('linkedin') }}</div> @endif
      </div>
      <div class="form-group files">
        <!-- <label for="CV">Importez votre CV<span id="important">*</span></label>
          <div class="input-group">
            <div class="custom-file">
              <input
                type="file"
                name="CV"
                class="custom-file-input"
                id="inputGroupFile01"
                required
                aria-describedby="inputGroupFileAddon01"
              />
              <label class="custom-file-label" for="inputGroupFile01"
                >Importez votre CV...</label
              >
            </div>
            <div class="invalid-feedback">
              Importez un CV.
            </div>
          </div> -->
        <label>Importez votre CV<span id="important">*</span></label>
        <input type="file" class="form-control" name="select_file" >
         @if ($errors->has('select_file')) <div class="alert alert-danger">{{ $errors->first('select_file') }}</div> @endif
      </div>
      <div class="custom-control custom-checkbox form-group">
        <input type="checkbox" class="custom-control-input" id="customCheck1" name="check" />
        <label class="custom-control-label" for="customCheck1">J'accepte les conditions et la
          <a href="#" class="lien">Politique de Confidentialités</a> de
          Connectanou</label><span id="important">*</span>
           @if ($errors->has('check')) <div class="alert alert-danger">{{ $errors->first('check') }}</div> @endif
      </div>
      <div class="form-group">
        <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
        @if ($errors->has('g-recaptcha-response'))
              <div class="alert alert-danger">{{ $errors->first('g-recaptcha-response') }}</div>
        @endif
      </div>
      <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdxmMAUAAAAAGaKb_PBUkAazJGtn_kBjNI1zViW"></script>
        <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {

            });
        });
  </script> -->
      <!-- Sign in button -->
      <button class="btn btn-info btn-block my-4 " type="submit" id="bouton">
        S'inscrire
      </button>
    </form>
  </div>
  @include('footer')
@endsection
@section('script')
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--  <script>
      var aujourdhui = new Date();
      document.getElementById("naissance").valueAsDate = aujourdhui;
    </script> -->
  <script src="js/script_ReaProjet.js"></script>
@endsection