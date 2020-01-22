@extends('layout')
@section('title')
    <title>Inscription Réalisateur Projets</title>
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
      @if ($errors->has('MailUsed')) <div class="alert alert-danger">{{ $errors->first('MailUsed') }}</div> @endif
      @if ($errors->has('LoginUsed')) <div class="alert alert-danger">{{ $errors->first('LoginUsed') }}</div> @endif
      <div class="row">
        <div class="form-group col">
          <label for="nom">Nom<span id="important">*</span></label>
          <input type="text" name="nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" id="nom" value="{{ old("nom") }}" placeholder="ex : Payet"/>
          {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        &nbsp;&nbsp;&nbsp;
        <div class="form-group col">
          <label for="prenom">Prénom<span id="important">*</span></label>
          <input type="text" name="prenom" class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" id="prenom" value="{{ old("prenom") }}" placeholder="ex : Marc"/>
          {!! $errors->first('prenom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      </div>
      <div class="form-group">
        <label for="naissance">Date de naissance</label>
        <input class="form-control {{ $errors->has('naissance') ? 'is-invalid' : '' }}" name="naissance" type="date" id="naissance" value="{{ old("naissance") }}"/>
        {!! $errors->first('naissance', '<div class="invalid-feedback">:message</div>') !!}
      </div>
       <div class="form-group">
        <label for="tel">Numéro de téléphone</label>
        <input type="tel" name="telephone" id="telephone" class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" placeholder="ex : 0692 xx xx xx" value="{{ old('telephone') }}"/>
        {!! $errors->first('telephone', '<div class="invalid-feedback">:message</div>') !!}
            </div>
      <div class="form-group">
        <label>Statut<span id="important">*</span></label>
        <select name="statut" class="custom-select {{ $errors->has('statut') ? 'is-invalid' : '' }}" id="statut">
          <option value="">Statut</option>
          @foreach ($Statuts as $Statut)
          <option value="{{ $Statut->id }}" {{ (old("statut") == $Statut->id ? "selected":"") }}>{{ $Statut->Statut }}</option>
          @endforeach
        </select>
        {!! $errors->first('statut', '<div class="invalid-feedback">:message</div>') !!}
      </div>

      <div id="ecole" class="form-group">
        <label>École<span id="important">*</span></label>
        <select name="ecole" class="custom-select {{ $errors->has('ecole') ? 'is-invalid' : '' }}" id="ecole">
          <option value="">Ecoles</option>
          @foreach ($Ecoles as $Ecole)
            <option value="{{ $Ecole->Id }}">{{ $Ecole->RaisonSociale }}</option>
          @endforeach
          <option value="autre">Autre</option>
        </select>
      </div>
      <div class="form-group" id="EcoleAjout">
        <label>Nom de votre école<span id="important">*</span></label>
        <input type="text" class="form-control" placeholder="ex : Université de La Réunion" value="{{ old("ecoleNom") }}" name="EcoleNom" id="EcoleNom"/>
      </div>
       <div class="form-group" id="Formations">
        <label>Formation en cours<span id="important">*</span></label>
        <select name="Formation" id="Formation" class="custom-select">
          <option value="" selected>Formation<span id="important">*</span></option>
          @foreach ($Formations as $Formation)
            <option value="{{ $Formation->Id }}">{{ $Formation->Formations }}</option>
          @endforeach
          <option value="Autre">Autre</option>
        </select>
      </div>
      <div class="form-group" id="FormationAjout">
        <label>Nom de votre Formation</label>
        <input type="text" class="form-control" placeholder="ex : Licence Informatique" value="{{ old("NomFormation") }}" name="NomFormation">
      </div>
      <div class="form-group">
        <label for="domaine">Domaine<span id="important">*</span></label>
        <select name="domaine" id="Domaines" class="custom-select {{ $errors->has('domaine') ? 'is-invalid' : '' }}">
          <option value="">Domaine</option>
          @foreach ($Domaines as $Domaine)
            <option value="{{ $Domaine->Id }}" {{ (old("domaine") == $Domaine->Id ? "selected":"") }}>{{ $Domaine->Domaines }}</option>
          @endforeach
        </select>
        {!! $errors->first('domaine', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
        <label>Niveau d'études<span id="important">*</span></label>
        <select name="NiveauEtude" class="custom-select col {{ $errors->has('NiveauEtude') ? 'is-invalid' : '' }}" id="Niveau">
          <option value="" selected>Niveau</option>
          @foreach ($NiveauxEtude as $niveau)
            <option value="{{ $niveau->id }}" {{ (old("NiveauEtude") == $niveau->id ? "selected":"") }}>{{ $niveau->NiveauEtude }}</option>
          @endforeach
        </select>
        {!! $errors->first('NiveauEtude', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group" id="Formations">
        <div class="form-group">        
          <label for="Diplome">Diplôme</label>
          <input type="text" name="Diplome" class="form-control {{ $errors->has('Diplome') ? 'is-invalid' : '' }}" id="diplome" value="{{ old("Diplome") }}" placeholder="ex : Licence informatique" />
          {!! $errors->first('Diplome', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      </div>
      <!-- Email -->
      <div class="form-group">
        <label for="mail">Adresse email<span id="important">*</span></label>
        <input type="email" name="mail" id="mail" class="form-control {{ $errors->has('mail') ? 'is-invalid' : '' }}" placeholder="ex : marcpayet97@gmail.com" value="{{ old("mail") }}"/>
        {!! $errors->first('mail', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
        <label for="login">Pseudo</label>
        <input type="text" name="login" class="form-control {{ $errors->has('login') ? 'is-invalid' : '' }}" id="login" placeholder="ex : BoulangeriePayet974" value="{{ old("login") }}" />
        {!! $errors->first('login', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <!-- Password -->
      <div class="form-group">
        <label for="password">Mot de passe<span id="important">*</span></label>
        <input type="password" name="password" id="mdp" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="***************"/> 
        <small id="passwordHelpBlock" class="form-text text-muted">Votre mot de passe doit comporter plus de 8 caractères et doit contenir au moins<br> 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial.
        </small>
      </div>   
      <div class="form-group">
        <label for="password_confirmation">Confirmez votre mot de passe<span id="important">*</span></label>
        <input type="password" name="password_confirmation" id="mdp2" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="***************" />
        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
        <label for="linkedin">Lien vers votre page Linkedin</label>
        <input type="" id="linkedin" name="linkedin" class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" placeholder="ex :www.linkedin.com/in/payet-marc-198755421" value="{{ old("linkedin") }}" />
        {!! $errors->first('linkedin', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group files">
        <!-- <label for="CV">Importez votre CV</label>
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
        <label>Importez votre CV</label>
        <input type="file" class="form-control {{ $errors->has('select_file') ? 'is-invalid' : '' }}" name="select_file">
        {!! $errors->first('select_file', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="custom-control custom-checkbox form-group">
        <input type="checkbox" class="custom-control-input {{ $errors->has('check') ? 'is-invalid' : '' }}" id="customCheck1" name="check" />
        <label class="custom-control-label" for="customCheck1">J'accepte les conditions et la <a href="#" class="lien">politique de confidentialité</a> de Connectanou</label><span id="important">*</span>
        {!! $errors->first('check', '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
        <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
        @if ($errors->has('g-recaptcha-response'))
          <div class="invalid-feedback d-block">{{ $errors->first('g-recaptcha-response') }}</div>
        @endif
      </div>
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
  <!--  <script>
      var aujourdhui = new Date();
      document.getElementById("naissance").valueAsDate = aujourdhui;
    </script> -->
  <script src="js/script_ReaProjet.js"></script>
@endsection
