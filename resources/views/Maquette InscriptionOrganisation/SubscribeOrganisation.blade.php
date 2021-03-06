@extends('layout')
@section('title')
    <title>Inscription Organisation - entreprise - association</title>
@endsection
@section('link')
    <link rel="stylesheet" href="./css/style_SubOrg.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('body')
@include('navbar')
<br/><br/><br/><br/>
    <!-- Default form login -->
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" enctype="multipart/form-data" method="post"
              action="{{url('Organisation')}}"
              novalidate>
            {{csrf_field()}}
            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4 text-center">Inscrivez votre Organisation</p>
            <div class="form-group">
            <label>SIRET</label>
                <input type="number" name="siret" class="form-control {{ $errors->has('siret') ? 'is-invalid' : '' }}" id="siret" placeholder="ex : 36252187900034" data-toggle="tooltip" value="{{ old("siret") }}" data-placement="right" title="Évitez les espaces dans le SIRET"/>
                {!! $errors->first('siret', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <label>Raison sociale<span id="important">*</span></label>
            <div class="form-group">
                <div class="form-inline" id="Organisation">
                    <select name="typeOrganisation" class="custom-select col-3 {{ $errors->has('typeOrganisation') ? 'is-invalid' : '' }}" id="typeOrganisation">
                        <option value="">Type</option>
                        @foreach($types as $type)
                            <option value="{{ $type->Id }}" {{ (old("typeOrganisation") == $type->Id ? "selected":"") }}>{{ $type->TypeOrganisation }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="RaisonSociale" class="form-control col-9 {{ $errors->has('RaisonSociale') ? 'is-invalid' : '' }}" id="label" placeholder="ex : Connectanou" value="{{ old('RaisonSociale') }}" />
                    {!! $errors->first('typeOrganisation', '<div class="invalid-feedback">:message</div>') !!}
                    {!! $errors->first('RaisonSociale', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            
            <div class="form-group">
                <label>Téléphone</label>
                <input type="tel" name="telephone" id="telephone" class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" placeholder="ex : 0262xxxxxx" value="{{ old('telephone') }}" />
                {!! $errors->first('telephone', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                <label>Lien vers le site Internet de l'Organisation</label>
                <input type="url" name="site" id="site" class="form-control {{ $errors->has('site') ? 'is-invalid' : '' }}" placeholder="ex : https://www.connectanou.re" value="{{ old('site') }}" />
                {!! $errors->first('site', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                <label>Adresse de l'Organisation</label>
                <input type="text" name="adresse" id="adresse" class="form-control" placeholder="ex : 70 Avenue Georges Brassens" value="{{ old('adresse') }}"/>
            </div>
            <div class="row" id="Organisation">
                <div class="form-group col">
                    <label>Code Postal<span id="important">*</span></label>
                    <div class="ui-widget">
                        <input type="number" id="IdCP" name="CodePostal"class="form-control col {{ $errors->has('CodePostal') ? 'is-invalid' : '' }}" placeholder="ex : 97490" value="{{ old('CodePostal') }}" />
                        {!! $errors->first('CodePostal', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
                <div class="form-group col">
                    <label class="text-left">Ville<span id="important">*</span></label>
                    <input type="text" id="IdVille" name="Ville" class="form-control col {{ $errors->has('CodePostal') ? 'is-invalid' : '' }}" placeholder="ex : Sainte-Clotilde" value="{{ old('Ville') }}"/>
                    {!! $errors->first('Ville', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group">
                <label>Nombre de personnes dans l'organisation</label>
                <input type="number" name="salaries" id="salarie" class="form-control {{ $errors->has('salaries') ? 'is-invalid' : '' }}" placeholder="ex : 60" value="{{ old('salaries') }}"/>
                {!! $errors->first('salaries', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                <label>Activité de l'Organisation<span id="important">*</span></label>
                <textarea class="form-control {{ $errors->has('activite') ? 'is-invalid' : '' }}" name="activite" id="activite" rows="3" placeholder="Ex : Association qui permet à de jeunes étudiants
en informatique à gérer différents projets comme la création d'un site internet ou la création d'une application mobile pour des Petites et Moyennes Entreprises.">{{ old('activite') }}</textarea>
                {!! $errors->first('activite', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group files">
                <label>Importez votre Logo</label>
                <input type="file" name="select_file" class="form-control {{ $errors->has('select_file') ? 'is-invalid' : '' }}">
                {!! $errors->first('select_file', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="custom-control custom-checkbox form-group">
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="checkbox" />
                <label class="custom-control-label" for="customCheck1">En cochant cette case, j'accepte que mes
                    informations saisies soient utilisées<br/> uniquement dans le cadre <a href="#"
                                                                                           class="lien">légale</a> dans
                    l'association.
                 @if ($errors->has('checkbox')) <div class="alert alert-danger">{{ $errors->first('checkbox') }}</div> @endif
            </div>
            <button class="btn btn-info btn-block my-4 " type="submit" id="bouton">
                Inscrire
            </button>
        </form>
    </div>
    @include('footer')
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $(function () {
            var ArrayCodePostaux = new Array();
            var ArrayVilles = new Array();
            {{$i=0}}
            @foreach($codePostaux as $codePostal)
                ArrayCodePostaux[{{$i}}] = '{{$codePostal->CodePostal}}';
                ArrayVilles[{{$i}}] = '{{$codePostal->Ville}}'
                {{$i++}}
            @endforeach
            $("#IdCP").autocomplete({
                source: ArrayCodePostaux,
                minLength: 4
            });
            $("#IdVille").autocomplete({
                source: ArrayVilles,
                minLength: 3
            });
        });
    </script>
@endsection
