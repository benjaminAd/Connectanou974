<?php $__env->startSection('title'); ?>
   <title>Bienvenue sur Connectanou</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link href="css/extra.css" rel="stylesheet" />
    <link href="css/carousel.css" rel="stylesheet" />
    <link href="css/animation.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
     <script>
    AOS.init({
      duration: 1200

    })
  </script>
  <header>
    <?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
       
        <div class="carousel-item active"
          style="background-image: url('img/ban002_pp.png');">

         
        </div>
        
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/ban200.png')">
          
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/ban100.png')">
          
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="py-5" id="scroll" style="width:100%;text-align:center;">
    <h1 class="display-4" style="color:black;" data-aos="fade-up">Connectanou c'est... </h1>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <br><br>
          <div class="progress blue">
            <span class="progress-left">
              <span class="progress-bar"></span>
            </span>
            <span class="progress-right">
              <span class="progress-bar"></span>
            </span>
            <div class="progress-value">10</div>
          </div>
          <h2 class="h6 font-weight-bold text-center mb-4" data-aos="fade-up">Réalisateurs</h2>
        </div>

        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <br><br>
          <div class="progress yellow">

            <span class="progress-left">
              <span class="progress-bar"></span>
            </span>
            <span class="progress-right">
              <span class="progress-bar"></span>
            </span>
            <div class="progress-value">1</div>
          </div>
          <h2 class="h6 font-weight-bold text-center mb-4" data-aos="fade-up">Porteurs de projets</h2>
        </div>
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <br><br>
          <div class="progress green">

            <span class="progress-left">
              <span class="progress-bar"></span>
            </span>
            <span class="progress-right">
              <span class="progress-bar"></span>
            </span>
            <div class="progress-value">1</div>
          </div>
          <h2 class="h6 font-weight-bold text-center mb-4" data-aos="fade-up">Projets réalisés</h2>
        </div>
      </div>
    </div>
    <!-- End Page Content-->

  </div>
  <div class="section section-dark text-center">
    <div class="container">
      <h2 class="title" data-aos="fade-up">Découvrez des membres de notre équipe</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-profile card-plain" data-aos="fade-right" data-aos-duration="3000">
            <div class="card-avatar">
              <a href="#avatar">
                <img src="img/faces/Matt4.jpg" alt="...">
              </a>
            </div>
            <div class="card-body">
              <a href="#paper-kit">
                <div class="author">
                  <h4 class="card-title">Berjola Matthias</h4>
                  <h6 class="card-category">Web-developpeur/Stagiaire</h6>
                </div>
              </a>
              <p class="card-description text-center">
                Etudiant en troisième année de licence informatique, il intervient dans le projet en tant que web designer</p>
            </div>
            <div class="card-footer text-center">
              <a href="https://www.linkedin.com/in/matthias-berjola-54551715b/" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile card-plain" data-aos="fade-down" data-aos-duration="3000">
            <div class="card-avatar">
              <a href="#avatar">
                <img src="img/Jenna_photo.jpg" alt="...">
              </a>
            </div>
            <div class="card-body">
              <a href="#paper-kit">
                <div class="author">
                  <h4 class="card-title">Jenna pourchot</h4>
                  <h6 class="card-category">Présidente de l'association</h6>
                </div>
              </a>
              <p class="card-description text-center">
                Formatrice et consultante indépendante dans plusieurs écoles informatique de l'ile de la Réunion, Jenna est à l'origine de l'idée de cette association et souhaite revaloriser les jeunes talents réunionnais
              </p>
            </div>
            <div class="card-footer text-center">
              <a href="https://www.linkedin.com/in/jenna-pourchot-90923446/" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile card-plain" data-aos="fade-left" data-aos-duration="3000">
            <div class="card-avatar">
              <a href="#avatar">
                <img src="img/faces/Benjamin.jpg" alt="...">
              </a>
            </div>
            <div class="card-body">
              <a href="#paper-kit">
                <div class="author">
                  <h4 class="card-title">Benjamin Adolphe</h4>
                  <h6 class="card-category">Web developpeur/Stagiaire</h6>
                </div>
              </a>
              <p class="card-description text-center">
                Etudiant en troisième année de licence informatique, il intervient dans le projet en tant que web developpeur
               </p>
            </div>
            <div class="card-footer text-center">
              <a href="https://www.linkedin.com/in/adolphe-benjamin-183322172/" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a href="ourTeam" style="color:white"><h2 class="display-7" style="color:white" data-aos="fade-right">En voir plus </h2></a>
  </div>
<!-- Grid row -->
  <div class="py-5" style="background-color:black;padding:0;text-align:center;">
    <h1 class="display-4" style="color:white;font-weight:bold;" data-aos="fade-up">Connect-Aou</h1>
    <a href="<?php echo e(url('login')); ?>" style="color:white"><h2 class="display-7" style="color:white" data-aos="fade-up">En cliquant ici</h2><a>




  </div>
  <div class="py-5" style="background-color:white;text-align:center;">
    <h1 class="display-4" style="color:black" data-aos="fade-up"> Suivez nous</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <br><br>
          <h2 class="h3 font-weight-bold text-center mb-4" data-aos="fade-up">Sur Facebook</h2>
          <iframe
            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fconnectanou%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
            width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowTransparency="true" allow="encrypted-media"></iframe>
        </div>

        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <br><br>
          <h2 class="h3 font-weight-bold text-center mb-4" data-aos="fade-up">Sur LinkedIn</h2>
          <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6572672813348511745" width="340"
            height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"
            allow="encrypted-media"></iframe>
        </div>
      </div>
    </div>
    <br><br><br>
    <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>