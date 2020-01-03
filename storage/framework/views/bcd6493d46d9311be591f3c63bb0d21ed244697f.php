<?php $__env->startSection('title'); ?>
    <title>Connexion</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="./css/style_Connec.css">
    <link href="css/extra.css" rel="stylesheet" />
    <link href="css/carousel.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<br/><br/><br/><br/>
    <div class="d-flex justify-content-center align-items-center divCon mt-4">

    
    
        <form class="text-center border border-light p-5 divConnect" method="POST">
        <?php echo e(csrf_field()); ?>

            <img class="img-fluid rounded-circle" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4">Connectez-vous</p>

            <!-- Email -->
            <div class="form-group">
                <label>Adresse mail ou Login :</label>
                <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" name="MailLog"
                       placeholder="ex : ConnectanouGerant974 ou boris.payet@gmail.com" required>
                <?php if($errors->has('MailLog')): ?>
                <p class="help is-danger"><?php echo e($errors->first('MailLog')); ?></p>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label>Mot de Passe : </label>
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="**********"
                       required name='password' name="password">
                <?php if($errors->has('password')): ?>
                <p class="help is-danger"><?php echo e($errors->first('password')); ?></p>
                <?php endif; ?>
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
            <div class="g-recaptcha form-group" data-sitekey="6LeTmMAUAAAAADw7uH0DmeFBI9x0YeqhCZos-AFR"></div>
            <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdxmMAUAAAAAGaKb_PBUkAazJGtn_kBjNI1zViW"></script>
        <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {

            });
        });
    </script> -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>