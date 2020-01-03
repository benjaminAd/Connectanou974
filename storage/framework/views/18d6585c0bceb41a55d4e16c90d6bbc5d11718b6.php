<?php $__env->startSection('title'); ?>
    <title>dépôt projets</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="./css/style_Contact.css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" action="<?php echo e(route('annonce.store')); ?>"  method="POST">
            
            
            
            <?php echo e(csrf_field()); ?>


            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h1 mb-4 text-center">Déposez votre projet</p>
        <div class="container">
            
            <hr>
            
              
              
                <div class="form-group">
                    <label for="titre_projet" style="font-weight: bold;">Titre du Projet</label>
                    <input type="text" class="form-control"   id="titre_projet" aria-describedby="titre_projet" name="titre_projet" placeholder="Le nom de votre projet" >
                </div>
                
                <div class="form-group">
                <label style="font-weight: bold;">Type de projet</label>
                <select class="form-control" name="type_projet"  >
                    <option value="0">Sélectionner un type de projet</option>
                    <option value=un>1. Développement web</option>
                    <option value=deux>2. Développement mobile</option>
                    <option value=trois>3. Développement logiciel</option>
                    <option value=quatre>4. Infographie, design, graphisme</option>
                    <option value=cinq>5. Référencement web</option>
                    <option value=six>6. Système réseaux, sécurité</option>
                    <option value=sept>7. Marketing et communication</option>

                </select>   
                </div>
                
                <div class="form-group">
                    <label for="desc_projet" style="font-weight: bold;">Description </label>
                    <textarea name="desc_projet" class="form-control" id="desc_projet" cols="30" rows="10"   placeholder="Décrivez-nous en détail votre projet, les objectifs, les attentes, problèmes" ></textarea>
                   
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group ">
                            <label for="date_debut" style="font-weight: bold;">Date début </label>
                            <input type="date" class="form-control"    id="date_debut" aria-describedby="date_debut" name="date_debut" placeholder="Quel est la date de début pour votre projet?" >                           
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="date_butoir_projet" style="font-weight: bold;">Date butoir </label>
                            <input type="date" class="form-control"   id="date_butoir_projet" aria-describedby="date_butoir_projet" name="date_butoir_projet" placeholder="Quel est la date de fin pour votre projet?" >                        
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="URL_PJ" style="font-weight: bold;">Pièces jointes  </label> <p> (Exemple : cahier des charges,chartes graphique etc...) </p>
                    <input type="file" class="form-control-file " id="URL_PJ" aria-describedby="URL_PJ" name="URL_PJ" >
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Budget_min_projet" style="font-weight: bold;">Budget minimum </label>
                            <input type="number" class="form-control" id="Budget_min_projet" aria-describedby="Budget_min_projet" name="Budget_min_projet" placeholder="Exemple : 1"  >
                        </div> 
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Budget_max_projet" style="font-weight: bold;">Budget maximum </label>
                            <input type="number" class="form-control" id="Budget_max_projet" aria-describedby="Budget_max_projet" name="Budget_max_projet"placeholder="Exemple : 200"  >
                        </div>
                    </div>
                </div>
                <div class="form-group">
        <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
        <?php if($errors->has('g-recaptcha-response')): ?>
              <div class="alert alert-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
        <?php endif; ?>
      </div>
                <button type="submit" class="btn btn-primary">Soumettre votre projet</button>
            </form>
            </div>
        </div> 
        
   <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
      var d = new Date();
    document.getElementById("date_debut").valueAsDate=d;
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>