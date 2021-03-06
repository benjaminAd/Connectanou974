@extends('layout')
@section('title')
    <title>Connexion</title>
@endsection
@section('link')
    <link rel="stylesheet" href="./css/style_Connec.css">
    <link href="css/extra.css" rel="stylesheet" />
    <link href="css/carousel.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('body')
@include('navbar')
<br/><br/><br/><br/>
    <div class="d-flex justify-content-center align-items-center divCon mt-4">

    
    
        <form class="text-center border border-light p-5 divConnect" method="POST">
        {{csrf_field()}}
            <img class="img-fluid rounded-circle" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4">Connectez-vous</p>

            <!-- Email -->
            <div class="form-group">
                <label>Adresse mail ou Login :</label>
                <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" name="MailLog"
                       placeholder="ex : ConnectanouGerant974 ou boris.payet@gmail.com" required>
                @if($errors->has('MailLog'))
                <p class="help is-danger">{{$errors->first('MailLog')}}</p>
                @endif
            </div>

            <!-- Password -->
            <div class="form-group">
                <label>Mot de Passe : </label>
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="**********"
                       required name='password' name="password">
                @if($errors->has('password'))
                <p class="help is-danger">{{$errors->first('password')}}</p>
                @endif
            </div>
            <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                        <label class="custom-control-label" for="defaultLoginFormRemember">Se souvenir de moi</label>
                    </div>
                </div>
                <div>
                    <!-- Forgot password -->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Forgot" class="lien">Mot
                        de
                        Passe oublié?</a>
                </div>
            </div>
            <br>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4 " type="submit" id="bouton" value="Login">Se connecter</button>

            <!-- Register -->
            <p>Vous voulez devenir un porteur de projet?
                <a href="SubscribePortProjet" class="lien">Inscrivez-vous
                    ici</a>
            </p>
            <p>Vous voulez devenir un réalisateur de projet(s)?
                <a href="SubscribeReaProjet" class="lien">Inscrivez-vous
                    ici</a>
            </p>
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
@endsection