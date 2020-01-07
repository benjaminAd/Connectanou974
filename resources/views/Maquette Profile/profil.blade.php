@extends('layout')
@section('title')
  <title>Connectanou-Profil</title>
@endsection
@section('link')
     <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <link href="css/profil.css" rel="stylesheet"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="css/demo.css" rel="stylesheet" />
@endsection
@section('body')
    <div class="profile-page sidebar-collapse" >
 @include('navbar')
  <div class="page-header page-header-xs"  data-parallax="true" style="background-image: url('img/fabio-mangione.jpg');">
    <div class="filter"></div>
  </div>
  <a href="#" title="Changer de photo "><i class="fa fa-camera upload-button" id="cam2"></i></a>
  <input class="file-upload" id="button2" type="file" accept="image/*"/>

  <div class="section profile-content" >
    <div class="container">
      <div class="owner">
        <div class="avatar" id="p-image">
          <img src="img/faces/joe-gardner-2.jpg" alt="Circle Image" id="profil-pic" class="img-thumbnail img-no-padding img-responsive ">
        <a href="#" title="Changer de photo "><i class="fa fa-camera upload-button" id="cam1"></i></a>
             <input class="file-upload" id="button1" type="file" accept="image/*"/>
             
          
        </div>
        
        <div class="name">
          <h4 class="title">Jenna Pourchot
            <br />
          </h4>
          <h6 class="description">Formatrice</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <p>Je s'appel groot blablabla blabla blablabla </p>
          <br />
          <btn class="btn btn-outline-danger btn-round"><i class="fa fa-cog"></i> Options</btn>
        </div>
      </div>
      <br/>
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#follows" role="tab">Projet réalisé</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " data-toggle="tab" href="#following" role="tab">Projet en cours</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Tab panes -->
      <div class="tab-content following">
        <div class="tab-pane active" id="follows" role="tabpanel">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <ul class="list-unstyled follows">
                <li>
                  <div class="row">
                    <div class="col-lg-2 col-md-4 col-4 ml-auto mr-auto">
                      </div>
                    <div class="col-lg-7 col-md-4 col-4  ml-auto mr-auto">
                      <h6>JavaScript
                        <br/>
                        <small>Maintenance informatique blablabla deodkeodkeo kfoekfoekf
                          oefkeofkzpokfsplfkdlkfdfsdfsdf
                        </small>
                      </h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-4  ml-auto mr-auto">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>
                <hr />
                <li>
                  <div class="row">
                    <div class="col-lg-2 col-md-4 col-4 mx-auto ">
                      </div>
                    <div class="col-lg-7 col-md-4 col-4">
                      <h6>HTML
                        <br />
                        <small>Page web kfdkflsdkflsdfksmdfksmdlfk
                          dflksdfmlskdfmlsdfksd
                          sdflmsdkfmlskfmlskdfmlksdf
                          sdlpfskfmksdmflkd
                        </small>
                      </h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-4">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-pane text-center" id="following" role="tabpanel">
          <h3 class="text-muted">Aucun projet en cours pour le moment :(</h3>
          <button class="btn btn-danger btn-round"><i class="fa fa-search"></i>  Trouvez en un tout de suite </button>
        </div>
      </div>
    </div>
  </div>
 @include('footer')
</div>
@endsection
@section('script')
      <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js" type="text/javascript"></script>
  <script src="js/core/popper.min.js" type="text/javascript"></script>
  <script src="js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/profil.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="js/plugins/moment.min.js"></script>
  <script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
@endsection