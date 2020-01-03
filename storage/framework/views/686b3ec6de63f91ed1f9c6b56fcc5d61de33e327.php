<?php $__env->startSection('title'); ?>
    <title>Inscription De Réalisateur de Projet</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="./css/style_ReaProjet.css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <div class="d-flex justify-content-center align-items-center divCon mt-5">
     <form class="border border-light p-5 divConnect needs-validation" action="<?php echo e(url("Realisateur")); ?>" method="POST" enctype="multipart/form-data">
       <?php echo e(csrf_field()); ?>

      <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo" />
      <p class="h4 mb-4 text-center">Inscrivez-vous en tant que Réalisateur de Projet</p>
      <?php if($errors->has('Diffmdp')): ?> <div class="alert alert-danger"><?php echo e($errors->first('Diffmdp')); ?></div> <?php endif; ?>
      <?php if($errors->has('MailUsed')): ?> <div class="alert alert-danger"><?php echo e($errors->first('MailUsed')); ?></div> <?php endif; ?>
      <?php if($errors->has('LoginUsed')): ?> <div class="alert alert-danger"><?php echo e($errors->first('LoginUsed')); ?></div> <?php endif; ?>
      <div class="row">
        <div class="form-group col">
          <label for="nom">Nom<span id="important">*</span></label>
          <input type="text" name="nom" class="form-control" id="nom" value="<?php echo e(old("nom")); ?>" placeholder="ex : Payet"  />
           <?php if($errors->has('nom')): ?> <div class="alert alert-danger"><?php echo e($errors->first('nom')); ?></div> <?php endif; ?>
        </div>
        &nbsp;&nbsp;&nbsp;
        <div class="form-group col">
          <label for="prenom">Prénom<span id="important">*</span></label>
          <input type="text" name="prenom" class="form-control" id="prenom" value="<?php echo e(old("prenom")); ?>" placeholder="ex : Marc"  />
           <?php if($errors->has('prenom')): ?> <div class="alert alert-danger"><?php echo e($errors->first('prenom')); ?></div> <?php endif; ?>
        </div>
      </div>
      <div class="form-group">
        <label for="naissance">Date de Naissance<span id="important">*</span></label>
        <input class="form-control" name="naissance" type="date" value="" id="naissance" value="<?php echo e(old("naissance")); ?>" />
         <?php if($errors->has('naissance')): ?> <div class="alert alert-danger"><?php echo e($errors->first('naissance')); ?></div> <?php endif; ?>
      </div>
       <div class="form-group">
                <label for="tel">Numéro de Téléphone<span id="important">*</span></label>
                <input type="tel" name="tel" id="telephone" class="form-control" placeholder="ex : 0692 xx xx xx" value="<?php echo e(old('tel')); ?>"/>
                <?php if($errors->has('tel')): ?> <div class="alert alert-danger"><?php echo e($errors->first('tel')); ?></div> <?php endif; ?>
            </div>
      <div class="form-group">
        <label>Statut<span id="important">*</span></label>
        <select name="statut" class="custom-select" id="statut">
          <option value="" selected>Statut</option>
          <?php $__currentLoopData = $Statuts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Statut): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($Statut->id); ?>"><?php echo e($Statut->Statut); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div id="ecole" class="form-group">
        <label>École<span id="important">*</span></label>
        <select name="Ecole" class="custom-select" id="Ecole">
          <option value="" selected>Ecoles</option>
          <?php $__currentLoopData = $Ecoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ecole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($Ecole->Id); ?>"><?php echo e($Ecole->RaisonSociale); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <option value="autre">Autre</option>
        </select>
      </div>
      <div class="form-group" id="EcoleAjout">
        <label>Nom de votre Ecole<span id="important">*</span></label>
        <input type="text" class="form-control" placeholder="ex : Université de La Réunion" value="<?php echo e(old("ecoleNom")); ?>" name="EcoleNom" id="EcoleNom"/>
      </div>
       <div class="form-group" id="Formations">
        <label>Formation en cours<span id="important">*</span></label>
        <select name="Formation" id="Formation" class="custom-select">
          <option value="" selected>Formation<span id="important">*</span></option>
          <?php $__currentLoopData = $Formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Formation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($Formation->Id); ?>"><?php echo e($Formation->Formations); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <option value="Autre">Autre</option>
        </select>
      </div>
      <div class="form-group" id="FormationAjout">
        <label>Nom de votre Formation<span id="important">*</span></label>
        <input type="text" class="form-control" placeholder="ex : Licence Informatique" value="<?php echo e(old("NomFormation")); ?>" name="NomFormation">
      </div>
      <div class="form-group">
        <label for="domaine">Domaine<span id="important">*</span></label>
        <select name="Domains" id="Domaines" class="custom-select">
          <option value="" selected>Domaine</option>
          <?php $__currentLoopData = $Domaines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Domaine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($Domaine->Id); ?>"><?php echo e($Domaine->Domaines); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div class="form-group">
        <label>Niveau d'études<span id="important">*</span></label>
        <select name="NiveauEtude" class="custom-select col" id="Niveau">
          <option value="" selected>Niveau</option>
          <?php $__currentLoopData = $NiveauxEtude; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niveau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($niveau->id); ?>"><?php echo e($niveau->NiveauEtude); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div class="form-group" id="Formations">
        <label>Diplome<span id="important">*</span></label>
        <select name="Diplome" id="Diplome" class="custom-select">
          <option value="" selected>Diplome</option>
          <?php $__currentLoopData = $Diplomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Diplome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($Diplome->Id); ?>"><?php echo e($Diplome->label); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <option value="Autre">Autre</option>
        </select>
      </div>
      <div class="form-group" id="DiplomeAjout">
        <label>Nom de votre Diplome<span id="important">*</span></label>
        <input type="text" class="form-control" placeholder="ex : Licence Informatique" value="<?php echo e(old("NomDiplome")); ?>" name="NomDiplome">
      </div>
      <!-- Email -->
      <div class="form-group">
        <label for="mail">Adresse E-Mail<span id="important">*</span><span id="important">*</span></label>
        <input type="email" name="mail" id="mail" class="form-control" placeholder="ex : MarcPayet97@gmail.com" value="<?php echo e(old("mail")); ?>"  />
         <?php if($errors->has('mail')): ?> <div class="alert alert-danger"><?php echo e($errors->first('mail')); ?></div> <?php endif; ?>
      </div>
      <div class="form-group">
        <label for="login">Pseudo<span id="important">*</span></label>
        <input type="text" name="login" class="form-control" id="login" placeholder="ex : BoulangeriePayet974" value="<?php echo e(old("login")); ?>" />
         <?php if($errors->has('login')): ?> <div class="alert alert-danger"><?php echo e($errors->first('login')); ?></div> <?php endif; ?>
      </div>
      <!-- Password -->
      <div class="form-group">
        <label for="password">Mot de Passe<span id="important">*</span></label>
        <input type="password" name="password" id="mdp" class="form-control" placeholder="***************"  />
         <?php if($errors->has('password')): ?> <div class="alert alert-danger"><?php echo e($errors->first('password')); ?></div> <?php endif; ?>
      </div>
      <div class="form-group">
        <label for="password2">Confirmez votre Mot de Passe<span id="important">*</span></label>
        <input type="password" name="password2" id="mdp2" class="form-control" placeholder="***************"  />
         <?php if($errors->has('password2')): ?> <div class="alert alert-danger"><?php echo e($errors->first('password2')); ?></div> <?php endif; ?>
      </div>
      <div class="form-group">
        <label for="linkedin">Lien vers votre page Linkedin<span id="important">*</span></label>
        <input type="url" id="linkedin" name="linkedin" class="form-control" placeholder="ex :www.linkedin.com/in/payet-marc-198755421" value="<?php echo e(old("linkedin")); ?>" />
         <?php if($errors->has('linkedin')): ?> <div class="alert alert-danger"><?php echo e($errors->first('linkedin')); ?></div> <?php endif; ?>
      </div>
      <div class="form-group files">
        <!-- <label for="CV">Importez votre CV<span id="important">*</span></label>
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
        <label>Importez votre CV<span id="important">*</span></label>
        <input type="file" class="form-control" name="select_file" >
         <?php if($errors->has('select_file')): ?> <div class="alert alert-danger"><?php echo e($errors->first('select_file')); ?></div> <?php endif; ?>
      </div>
      <div class="custom-control custom-checkbox form-group">
        <input type="checkbox" class="custom-control-input" id="customCheck1" name="check" />
        <label class="custom-control-label" for="customCheck1">J'accepte les conditions et la
          <a href="#" class="lien">Politique de Confidentialités</a> de
          Connectanou</label><span id="important">*</span>
           <?php if($errors->has('check')): ?> <div class="alert alert-danger"><?php echo e($errors->first('check')); ?></div> <?php endif; ?>
      </div>
      <div class="form-group">
        <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
        <?php if($errors->has('g-recaptcha-response')): ?>
              <div class="alert alert-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
        <?php endif; ?>
      </div>
      <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdxmMAUAAAAAGaKb_PBUkAazJGtn_kBjNI1zViW"></script>
        <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {

            });
        });
  </script> -->
      <!-- Sign in button -->
      <button class="btn btn-info btn-block my-4 " type="submit" id="bouton">
        S'inscrire
      </button>
    </form>
  </div>
  <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--  <script>
      var aujourdhui = new Date();
      document.getElementById("naissance").valueAsDate = aujourdhui;
    </script> -->
  <script src="js/script_ReaProjet.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>