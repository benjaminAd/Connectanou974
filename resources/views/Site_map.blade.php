@extends('layout')
@section('title')
   <title>Connectanou-Plan du site</title>
@endsection
@section('link')
    <link href="css/extra.css" rel="stylesheet" />
    <link href="css/carousel.css" rel="stylesheet" />
    <link href="css/animation.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection
@section('body')
     <script>
    AOS.init({
      duration: 1200

    })
  </script>
  <header>
    @include('navbar')
  </header>
    <br><br><br><br><br><br><br><br>

  <div class="container">

  <h1>Plan de Connectanou </h1>
    <br>
  <ul>
    <li style="list-style-type: none;"><a class="btn btn-danger"  href="{{{route('equipe')}}}">Notre équipe</a></li> 
    <br>
    <li  style="list-style-type: none;"><a class="btn btn-warning"  href="{{{route('PortProjetSub')}}}">Inscription porteur</a></li> 
    <br>
    <li  style="list-style-type: none;"><a class="btn btn-secondary"  href="{{{route('SubscribeRea')}}}">Inscription réalisateur</a></li>
    <br>
    <li  style="list-style-type: none;"><a  class="btn btn-primary" href="{{{url('Contact')}}}" >Contact</a></li>
    <br>
    <li  style="list-style-type: none;"><a class="btn btn-success" href="{{{url('mentionLegal')}}}">Mention légales</a></li>
    <br>
    <li  style="list-style-type: none;"><a class="btn btn-info" href="{{{url('connect')}}}">Connexion</a></li>

  </ul>

 



 

</div>
<br><br><br>
    @include('footer')
    <br><br>






    @endsection
@section('script')
    <script src="js/progress_bar.js" type="text/javascript"></script>
    <script src="js/profil.js" type="text/javascript"></script>
    <script src="js/scroll_Acceuil.js" type="text/javascript"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0">
    </script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="js/plugins/moment.min.js"></script>
    <script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
@endsection