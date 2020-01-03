@extends('layout')
    @section('title')
        <title>Notre équipe</title>
    @endsection
    @section('link')
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style_ourTeam.css" rel="stylesheet"/>
    @endsection
    @section('body')
    @include('navbar')
        {{-- <nav class="navbar navbar-expand-lg fixed-top navbar-transparent "color-on-scroll="300">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="profil.html" rel="tooltip"  data-placement="bottom" style="color:#E0363E;">
            <img class="img-circle "  src="img/faces/joe-gardner-2.jpg" id="favicon">
            Username
            </a>

            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a href="https://demos.creative-tim.com/paper-kit-2/docs/1.0/getting-started/introduction.html"  class="nav-link" style="color:#1E4F87;">L'association</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  title="Retourner à la page d'acceuil" data-placement="bottom" href="section_equipe.html " style="color:#1E4F87;">
                Equipe
                </a>

              </li>
              <li class="nav-item">
                <a class="nav-link"  title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" style="color:#1E4F87;">

                  Realisateur
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" style="color:#1E4F87;">
                  Projets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  title="Star on GitHub" data-placement="bottom" href="https://www.github.com/CreativeTimOfficial" style="color:#1E4F87;">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <br><br><br><br> --}}
    <section id="team" class="pb-5">
        <div class="container" id="contain">
            <h5 class="section-title h1">Notre équipe</h5>
            <div class="d-flex justify-content-center">
                <!-- Portion de code qui correspond à 1 membre de l'équipe, copier coller cette portion pour rajouter un membre -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card ">
                                    <div class="card-body text-center">
                                        <p><img src="img/Jenna_photo.jpg" ></p>
                                        <h4 class="card-title">Jenna Pourchot</h4>
                                        <p class="card-text">Présidente de l'association</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Jenna Pourchot</h4>
                                        <p class="card-text">Formatrice et consultante indépendante dans plusieurs écoles informatique de l'ile de la Réunion, Jenna est à l'origine de l'idée de cette association et souhaite revaloriser les jeunes talents réunionnais</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>


                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/jenna-pourchot-90923446/">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="img/user.png"></p>
                                        <h4 class="card-title">Marie-Ange</h4>
                                        <p class="card-text">Secrétaire générale</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Marie-Ange</h4>
                                        <p class="card-text">Marie-Ange est secrétaire générale de l’association CONNECTANOU. Elle assiste la présidente sur des tâches administratives.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- ./Membre d'équipe -->
                <!-- Membre d'équipe -->
                <div class="row">
                
                <!-- Membre d'équipe -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="favicon.ico" alt="card image"></p><h4 class="card-title">Aymerick</h4>
                                        <p class="card-text">Web developpeur-Stagiaire</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Aymerick</h4>
                                        <p class="card-text">Aymerik est étudiant à SUPINFO Réunion en deuxième année, il est développeur web. </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Membre d'équipe -->
                <!-- Membre d'équipe -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="favicon.ico" alt="card image"></p><h4 class="card-title">Gaëlle</h4>
                                        <p class="card-text">Web-developpeuse/Web-designer</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Membre d'équipe -->
                <!-- Membre d'équipe -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="favicon.ico" alt="card image"></p><h4 class="card-title">Jonathan</h4>
                                        <p class="card-text">Web-developpeur/Expert PHP</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Jonathan</h4>
                                        <p class="card-text">Jonathan est étudiant en Master à l’HESIP, sa spécialité est le développement Web, langage PHP</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Membre d'équipe -->
                <!-- Membre d'équipe -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="img/Yann.jpg" alt="card image"></p><h4 class="card-title">Yann</h4>
                                        <p class="card-text">Web developpeur-Stagiaire</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Yann</h4>
                                        <p class="card-text">Yann est étudiant à L'AFPAR et intervient dans le projet connectanou en mettant en oeuvre son expérience et ses compétences dans la programmation PHP et son framework Laravel</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Membre d'équipe -->
                <!-- Membre d'équipe -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="favicon.ico" alt="card image"></p><h4 class="card-title">Jessica</h4>
                                        <p class="card-text">Web designer/Infographiste</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Jessica</h4>
                                        <p class="card-text">Jessica est étudiante à l’IFR en alternance, elle fait des études de community manager mais elle est infographiste pour CONNECTANOU.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Membre d'équipe -->
                <!-- Membre d'équipe -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="img/faces/Benjamin.jpg" alt="card image"></p><h4 class="card-title">Benjamin Adolphe</h4>
                                        <p class="card-text">Web developpeur-Stagiaire</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Benjamin Adolphe</h4>
                                        <p class="card-text">Etudiant en troisième année de licence informatique, Benjamin est interessé par tout ce qui concerne la programmation web, que ce soit en java ou en php il sait se débrouiller</p>
            <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Membre d'équipe -->
                <!-- Membre d'équipe -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="img/faces/Matt4.jpg" alt="card image"></p><h4 class="card-title">Matthias Berjola</h4>
                                        <p class="card-text">Web developpeur-Stagiaire</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Matthias Berjola</h4>
                                        <p class="card-text">Etudiant en troisième année de licence informatique, Matthias est passioné par le design informatique dans toutes ses formes, le projet connectanou est une opportunité pour lui de pouvoir s'exprimer.</p>
                                        <ul class="list-inline">
                        
                    
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Membre d'équipe -->
                <!-- Membre d'équipe -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="favicon.ico" alt="card image"></p><h4 class="card-title">Niels</h4>
                                        <p class="card-text">Web developpeur-Stagiaire</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Niels</h4>
                                        <p class="card-text">Niels participe au projets connectanou en tant que web developpeur</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Membre d'équipe -->
                <!-- Membre d'équipe -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="favicon.ico" alt="card image"></p><h4 class="card-title">Audric Lamy</h4>
                                        <p class="card-text">Web developpeur-Stagiaire</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Audric Lamy</h4>
                                        <p class="card-text">Audric est formateur et étudiant à L'Hesip il participe au projet Connectanou en tant qu'expert PHP</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Membre d'équipe -->


            </div>
        </div>
    </section>
    @include('footer')
    @endsection
    @section('script')
    <script src="js/profil.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="js/plugins/moment.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    @endsection








