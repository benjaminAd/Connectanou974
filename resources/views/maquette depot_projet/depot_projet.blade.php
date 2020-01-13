@extends('layout')
@section('title')
    <title>dépôt projets</title>
@endsection
@section('link')
    <link rel="stylesheet" href="./css/style_Contact.css"/>
@endsection

@section('body')
@include('navbar')
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" action="{{ route('annonce.store') }}"  method="POST">
            {{-- token csrf --}}
            {{-- token csrf pour se prévenir contre la faille d'authification web--}}
            {{-- permet de vérifier que la personne qui fait les actions est authentifiée --}}
            {{csrf_field()}}

            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h1 mb-4 text-center">Déposez votre projet</p>
        <div class="container">
            
            <hr>
            
              {{-- Champs pour le titre --}}
              {{-- @error('pseudo')is-invalid @enderror permet de mettre un visuel sur une erreur et avec le  class="invalid-feedback" nous permet de mettre un message personalisé--}}
                <div class="form-group">
                    <label for="titre_projet" style="font-weight: bold;">Titre du projet</label>
                    <input type="text" class="form-control {{ $errors->has('titre_projet') ? 'is-invalid' : '' }}" id="titre_projet" aria-describedby="titre_projet" name="titre_projet" placeholder="Le nom de votre projet" value="{{ old('titre_projet') }}">
                    {!! $errors->first('titre_projet', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                {{-- Champs pour le type de projet --}}
                <div class="form-group">
                <label style="font-weight: bold;">Type de projet</label>
                <select class="form-control {{ $errors->has('type_projet') ? 'is-invalid' : '' }}" name="type_projet" value="2. Développement mobile">
                    <option value="">Sélectionner un type de projet</option>
                    <option value="un" @if (old('type_projet') == "un") {{ 'selected' }} @endif>1. Développement web</option>
                    <option value="deux" @if (old('type_projet') == "deux") {{ 'selected' }} @endif>2. Développement mobile</option>
                    <option value="trois" @if (old('type_projet') == "trois") {{ 'selected' }} @endif>3. Développement logiciel</option>
                    <option value="quatre" @if (old('type_projet') == "quatre") {{ 'selected' }} @endif>4. Infographie, design, graphisme</option>
                    <option value="cinq" @if (old('type_projet') == "cinq") {{ 'selected' }} @endif>5. Référencement web</option>
                    <option value="six" @if (old('type_projet') == "six") {{ 'selected' }} @endif>6. Système réseaux, sécurité</option>
                    <option value="sept" @if (old('type_projet') == "sept") {{ 'selected' }} @endif>7. Marketing et communication</option>
                </select>   
                {!! $errors->first('type_projet', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                {{-- Champs pour la description du projet --}}
                <div class="form-group">
                    <label for="desc_projet" style="font-weight: bold;">Description</label>
                    <textarea name="desc_projet" class="form-control {{ $errors->has('desc_projet') ? 'is-invalid' : '' }}" id="desc_projet" cols="30" rows="10" placeholder="Décrivez-nous en détail votre projet, les objectifs, les attentes, problèmes">{{ old('desc_projet') }}
                    </textarea>
                    {!! $errors->first('desc_projet', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                
                {{-- Champs pour la date de debut --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label for="date_debut" style="font-weight: bold;">Date de début</label>
                            <input type="date" class="form-control {{ $errors->has('date_debut') ? 'is-invalid' : '' }}" id="date_debut" aria-describedby="date_debut" name="date_debut" placeholder="Quelle est la date de début pour votre projet?" value="{{ old('date_debut') }}">
                            {!! $errors->first('date_debut', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    {{-- Champs pour la date de fin --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="date_butoir_projet" style="font-weight: bold;">Date butoir</label>
                            <input type="date" class="form-control {{ $errors->has('date_butoir_projet') ? 'is-invalid' : '' }}" id="date_butoir_projet" aria-describedby="date_butoir_projet" name="date_butoir_projet" placeholder="Quelle est la date de fin pour votre projet ?" value="{{ old('date_butoir_projet') }}">
                            {!! $errors->first('date_butoir_projet', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                </div>
                {{-- Champs pour une pièce joint --}}
                <div class="form-group">
                    <label for="URL_PJ" style="font-weight: bold;">Pièces jointes</label> <p> (Exemple : cahier des charges,chartes graphique etc...) </p>
                    <input type="file" class="form-control-file " id="URL_PJ" aria-describedby="URL_PJ" name="URL_PJ">
                </div>
                {{-- Champs pour le budget minimum --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Budget_min_projet" style="font-weight: bold;">Budget minimum</label>
                            <input type="number" class="form-control" id="Budget_min_projet" aria-describedby="Budget_min_projet" name="Budget_min_projet" placeholder="Exemple : 1" value="{{ old('Budget_min_projet') }}">
                        </div> 
                    </div>
                    {{-- Champs pour le budget maximum --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Budget_max_projet" style="font-weight: bold;">Budget maximum</label>
                            <input type="number" class="form-control {{ $errors->has('Budget_max_projet') ? 'is-invalid' : '' }}" id="Budget_max_projet" aria-describedby="Budget_max_projet" name="Budget_max_projet" placeholder="Exemple : 200" value="{{ old('Budget_max_projet') }}">
                            {!! $errors->first('Budget_max_projet', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Soumettre votre projet</button>
            </form>
            </div>
        </div> 
        {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
   @include('footer')
@endsection
@section('script')
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
      var d = new Date();
    document.getElementById("date_debut").valueAsDate=d;
  </script>
@endsection