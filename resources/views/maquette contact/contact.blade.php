@extends('layout')
@section('title')
    <title>Contact</title>
@endsection
@section('link')
    <link rel="stylesheet" href="./css/style_Contact.css"/>
@endsection
@section('body')

    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" action="{{url('contact')}}"  method="POST">
            {{csrf_field()}}

            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4 text-center">Contactez-nous</p>
            <div class="form-group">
                <label style="font-weight: bold;">Nom</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Exemple : Payet " {{old('name')}} >
                <div class="invalid-feedback">
                    Entrez un nom
                </div>
            </div>

            <div class="form-group">
                <label style="font-weight: bold;">Email</label>
                <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" placeholder="Exemple : payetReunion974@gmail.com"
                     {{old('email')}}   >
                <div class="invalid-feedback">
                    Entrez une adresse mail valide
                </div>
            </div>

            <div class="form-group">
                <label style="font-weight: bold;">Objet du message</label>
                <select class="form-control @error('objetMessage')is-invalid @enderror" name="objetMessage" {{old('objetMessage')}} >
                    <option value="0">Sélectionner l'objet de votre message</option>
                    <option value=un>1. Demande d'informations</option>
                    <option value=deux>2. Incidents</option>
                    <option value=trois>3. Recrutement</option>
                    <option value=quatre>4. Bénévolat</option>
                    <option value=cinq>5. Dépôt de projet</option>
                    <option value=six>6. Autres</option>
                </select>
            </div>

            <div class="form-group">
                <label style="font-weight: bold;">Votre message</label>
                <textarea name="message" cols="30" rows="10" class="form-control @error('message')is-invalid @enderror" placeholder="Votre message"
                 {{old('message')}}>
                </textarea>
                <div class="invalid-feedback">
                    le champs message ne doit pas être vide
                </div>
            </div>
            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
            @if ($errors->has('g-recaptcha-response'))
                 <div class="alert alert-danger">{{ $errors->first('g-recaptcha-response') }}</div>
            @endif
            </div>
            <button type="submit" class="btn btn-info btn-block my-4 " id="bouton">Envoyer le message</button>
        <div>Vous pouvez aussi faire un don à l'association <a href="{{url('donAsso')}}">ici</a></div>
        </form>
    </div>

@endsection
@section('script')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- <script>
     function onSubmit(token) {
       document.getElementById("demo-form").submit();
     }
   </script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
@endsection