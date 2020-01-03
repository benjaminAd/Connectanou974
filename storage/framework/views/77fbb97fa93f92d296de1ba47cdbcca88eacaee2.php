<?php $__env->startSection('title'); ?>
    <title>Inscription De Porteur de Projet</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="./css/style_PortProjet.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<br/><br/><br/><br/>
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect" action="<?php echo e(url('Porteur')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4 text-center">Inscrivez-vous en tant que Porteur de Projet</p>
            <?php if($errors->has('Diffmdp')): ?> <div class="alert alert-danger"><?php echo e($errors->first('Diffmdp')); ?></div> <?php endif; ?>
            <?php if($errors->has('MailUsed')): ?> <div class="alert alert-danger"><?php echo e($errors->first('MailUsed')); ?></div> <?php endif; ?>
            
            <div class="row">
                <div class="form-group col">
                    <label for="nom">Nom<span id="important">*</span></label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="ex : Hoareau" value="<?php echo e(old('nom')); ?>"/>
                <?php if($errors->has('nom')): ?> <div class="alert alert-danger"><?php echo e($errors->first('nom')); ?></div> <?php endif; ?>
                </div>
                <div class="form-group col">
                    <label class="text-left" for="prenom">Prénom<span id="important">*</span></label>
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="ex : Boris"value="<?php echo e(old('prenom')); ?>"
                           />
                    <?php if($errors->has('prenom')): ?> <div class="alert alert-danger"><?php echo e($errors->first('prenom')); ?></div> <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <label for="Organisation">Organisation<span id="important">*</span></label>
                <div class="form-inline" id="Organisation">
                    <select name="typeOrganisation" class="custom-select col-3" id="typeOrganisation">
                        <option value="organisation" selected>Type</option>
                        <option value="particulier">Particulier</option>
                        <option value="entreprise">Entreprise</option>
                        <option value="association">Association</option>
                    </select>
                    &nbsp;&nbsp;
                    <!-- <select class="custom-select col" id="nomorganisation" disabled>
                                <option selected>Choisissez le nom de votre Organisation</option>
                            </select> -->
                    <select name="NomAssociation" class="custom-select col" id="nomassociation">
                        <option value="" selected>Choisissez le nom de votre Association</option>
                        

                        <?php $__currentLoopData = $associations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $association): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($association->Id); ?>"><?php echo e($association->RaisonSociale); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <option value="ajouter">Ajouter</option>
                    </select>
                    <select name="NomEntreprise" class="custom-select col" id="nomentreprise">
                        <option value="" selected>Choisissez le nom de votre Entreprise</option>
                        
                        <?php $__currentLoopData = $entreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($entreprise->Id); ?>"><?php echo e($entreprise->RaisonSociale); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <option value="ajouter">Ajouter</option>
                    </select>
                    <input type="text" class="form-control col" id="nomorganisation" placeholder="ex : Connectanou"
                           disabled/>
                </div>
                <?php if($errors->has('ErreurOrganisation')): ?>
                <div class="alert alert-danger"><?php echo e($errors->first('ErreurOrganisation')); ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group" id="post">
                <label for="Poste">Poste<span class="importSelect" id="important">*</span></label>
                <input type="text" class="form-control" name="Poste" id="posteEntreprise"
                       placeholder="ex : Gérant" value="<?php echo e(old('Poste')); ?>"/>
                <?php if($errors->has('Poste')): ?> <div class="alert alert-danger"><?php echo e($errors->first('Poste')); ?></div> <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="tel">Numéro de Téléphone</label>
                <input type="tel" name="tel" id="telephone" class="form-control" placeholder="ex : 0692 xx xx xx" value="<?php echo e(old('tel')); ?>"/>
                <?php if($errors->has('tel')): ?> <div class="alert alert-danger"><?php echo e($errors->first('tel')); ?></div> <?php endif; ?>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="mail">Adresse E-Mail<span id="important">*</span></label>
                <input type="email" id="mail" name="mail" class="form-control" placeholder="ex : HoareauBoris@gmail.com" value="<?php echo e(old('mail')); ?>"
                       />
                <?php if($errors->has('mail')): ?> <div class="alert alert-danger"><?php echo e($errors->first('mail')); ?></div> <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="pseudo">Pseudo<span id="important">*</span></label>
                <input type="text" name="pseudo" id="login" class="form-control" placeholder="ex : ConnectanouGérant974" value="<?php echo e(old('pseudo')); ?>"
                       />
                <?php if($errors->has('pseudo')): ?> <div class="alert alert-danger"><?php echo e($errors->first('pseudo')); ?></div> <?php endif; ?>
            </div>
            <!-- Password -->
            <div class="form-group">
                <label for="password">Mot de Passe<span id="important">*</span></label>
                <input type="password" name="password" id="mdp" class="form-control" placeholder="***************"/>
                 <?php if($errors->has('password')): ?> <div class="alert alert-danger"><?php echo e($errors->first('password')); ?></div> <?php endif; ?>
            
            <div class="form-group">
                <label for="password2">Confirmez votre Mot de Passe<span id="important">*</span></label>
                <input type="password" name="password2" id="mdp2" class="form-control" placeholder="***************"
                       />
                 <?php if($errors->has('password2')): ?> <div class="alert alert-danger"><?php echo e($errors->first('password2')); ?></div> <?php endif; ?>
            </div>
            <div class="custom-control custom-checkbox form-group">
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="mentionsLegales"/>
                <label class="custom-control-label" for="customCheck1">En cochant cette case, j'accepte que mes
                    informations saisies soient utilisées<br/> uniquement dans le cadre <a href="#"
                                                                                           class="lien">légale</a> dans
                    l'association.
                 <?php if($errors->has('mentionsLegales')): ?> <div class="alert alert-danger"><?php echo e($errors->first('mentionsLegales')); ?></div> <?php endif; ?>
            </div>
            <div class="form-group">
            <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
            <?php if($errors->has('g-recaptcha-response')): ?>
                 <div class="alert alert-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
            <?php endif; ?>
            </div>
            
            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4 " type="submit" id="bouton">
                S'inscrire
            </button>
        </form>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="./js/script_PortProjet.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>