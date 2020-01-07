<?php $__env->startSection('title'); ?>
    <title>Contact</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="./css/style_Contact.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" action="<?php echo e(url('contact')); ?>"  method="POST">
            <?php echo e(csrf_field()); ?>


            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4 text-center">Contactez-nous</p>
            <div class="form-group">
                <label style="font-weight: bold;">Nom</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Exemple : Payet " <?php echo e(old('name')); ?> >
                <div class="invalid-feedback">
                    Entrez un nom
                </div>
            </div>

            <div class="form-group">
                <label style="font-weight: bold;">Email</label>
                <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" placeholder="Exemple : payetReunion974@gmail.com"
                     <?php echo e(old('email')); ?>   >
                <div class="invalid-feedback">
                    Entrez une adresse mail valide
                </div>
            </div>

            <div class="form-group">
                <label style="font-weight: bold;">Objet du message</label>
                <select class="form-control @error('objetMessage')is-invalid @enderror" name="objetMessage" <?php echo e(old('objetMessage')); ?> >
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
                 <?php echo e(old('message')); ?>>
                </textarea>
                <div class="invalid-feedback">
                    le champs message ne doit pas être vide
                </div>
            </div>
            <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
            <?php if($errors->has('g-recaptcha-response')): ?>
                 <div class="alert alert-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
            <?php endif; ?>
                   <button type="submit" class="btn btn-info btn-block my-4 " id="bouton">Envoyer le message</button>
        <div>Vous pouvez aussi faire un don à l'association <a href="<?php echo e(url('donAsso')); ?>">ici</a></div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>