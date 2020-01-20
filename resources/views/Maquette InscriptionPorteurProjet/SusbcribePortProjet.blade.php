@extends('layout')
@section('title')
    <title>Inscription Porteur de Projets</title>
@endsection
@section('link')
    <link rel="stylesheet" href="./css/style_PortProjet.css"/>
@endsection
@section('body')
@include('navbar')
<br/><br/><br/><br/>
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect" action="{{url('Porteur')}}" method="post">
            {{csrf_field()}}
            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4 text-center">Inscrivez-vous en tant que Porteur de Projet</p>
            @if ($errors->has('Diffmdp')) <div class="alert alert-danger">{{ $errors->first('Diffmdp') }}</div> @endif
            @if ($errors->has('MailUsed')) <div class="alert alert-danger">{{ $errors->first('MailUsed') }}</div> @endif
            @if ($errors->has('LoginUsed')) <div class="alert alert-danger">{{ $errors->first('LoginUsed') }}</div> @endif
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <div class="row">
                <div class="form-group col">
                    <label for="nom">Nom<span id="important">*</span></label>
                    <input type="text" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" name="nom" id="nom" placeholder="ex : Hoareau" value="{{ old('nom') }}"/>
                    {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group col">
                    <label class="text-left" for="prenom">Prénom<span id="important">*</span></label>
                    <input type="text" name="prenom" class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" id="prenom" placeholder="ex : Boris" value="{{ old('prenom') }}" />
                    {!! $errors->first('prenom', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group">
                <label for="Organisation">Organisation<span id="important">*</span></label>
                <div class="form-inline" id="Organisation">
                    <select name="type_organisation" class="custom-select col-3 {{ $errors->has('type_organisation') ? 'is-invalid' : '' }}" id="type_organisation">
                        <option value="">Type</option>
                        <option value="particulier" @if (old('type_organisation') == "particulier") {{ 'selected' }} @endif>Particulier</option>
                        <option value="entreprise" @if (old('type_organisation') == "entreprise") {{ 'selected' }} @endif>Entreprise</option>
                        <option value="association" @if (old('type_organisation') == "association") {{ 'selected' }} @endif>Association</option>
                    </select>

                    <select name="NomAssociation" class="custom-select col-9 {{ $errors->has('NomAssociation') ? 'is-invalid' : '' }}" id="nomassociation">
                        <option value="">Choisissez le nom de votre Association</option>
                        @foreach($associations as $association)
                            <option value="{{ $association->Id }}">{{ $association->RaisonSociale }}</option>
                        @endforeach
                        <option value="ajouter">Ajouter</option>
                    </select>

                    <select name="NomEntreprise" class="custom-select col-9 {{ $errors->has('NomEntreprise') ? 'is-invalid' : '' }}" id="nomentreprise">
                        <option value="">Choisissez le nom de votre entreprise</option>
                        @foreach($entreprises as $entreprise)
                            <option value="{{ $entreprise->Id }}">{{ $entreprise->RaisonSociale }}</option>
                        @endforeach
                        <option value="ajouter">Ajouter</option>
                    </select>

                    <input type="text" class="form-control col-9" id="nomorganisation" placeholder="ex : Connectanou" disabled/>
                    {!! $errors->first('typeOrganisation', '<div class="invalid-feedback">:message</div>') !!}
                    @if($errors->has('ErreurOrganisation'))
                    <div class="alert alert-danger">{{$errors->first('ErreurOrganisation')}}</div>
                    @endif
                    {!! $errors->first('type_organisation', '<div class="invalid-feedback">:message</div>') !!}
                    {!! $errors->first('NomAssociation', '<div class="invalid-feedback">:message</div>') !!}
                    {!! $errors->first('NomEntreprise', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" id="post">
                <label for="Poste">Poste</label>
                <input type="text" class="form-control {{ $errors->has('Poste') ? 'is-invalid' : '' }}" name="Poste" id="posteEntreprise" placeholder="ex : Gérant" value="{{ old('Poste') }}"/>
                {!! $errors->first('Poste', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                <label for="tel">Numéro de téléphone</label>
                <input type="tel" name="tel" id="telephone" class="form-control {{ $errors->has('tel') ? 'is-invalid' : '' }}" placeholder="ex : 0692 xx xx xx" value="{{ old('tel') }}"/>
                {!! $errors->first('tel', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="mail">Adresse email<span id="important">*</span></label>
                <input type="email" id="mail" name="mail" class="form-control {{ $errors->has('mail') ? 'is-invalid' : '' }}" placeholder="ex : HoareauBoris@gmail.com" value="{{ old('mail') }}" />
                {!! $errors->first('mail', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            {{-- Pseudo --}}
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="login" class="form-control" placeholder="ex : ConnectanouGérant974" value="{{ old('pseudo') }}" />
            </div>
            {{-- Mot de passe --}}
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
            <div class="custom-control custom-checkbox form-group">
                <input type="checkbox" class="custom-control-input {{ $errors->has('mentionsLegales') ? 'is-invalid' : '' }}" id="customCheck1" name="mentionsLegales"/>
                <label class="custom-control-label" for="customCheck1">En cochant cette case, j'accepte que mes
                    informations saisies soient utilisées<br/> uniquement dans le cadre <a href="#" class="lien">légale</a> dans
                    l'association.</label>
                    {!! $errors->first('mentionsLegales', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
            </div>
                 {!! $errors->first('g-recaptcha-response', '<div class="alert alert-danger">:message</div>') !!}
            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit" id="bouton">
                S'inscrire
            </button>
        </form>
    </div>
</div>
@include('footer')
@endsection
@section('script')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="./js/script_PortProjet.js"></script>
@endsection
