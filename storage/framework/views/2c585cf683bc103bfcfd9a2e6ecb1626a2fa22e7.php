<?php $__env->startSection('title'); ?>
    <title>Mot de Passe oublié</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="./css/style_mdpForgot.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <!-- Default form login -->
    <div class="d-flex justify-content-center align-items-center divCon mt-4">
        <form class="text-center border border-light p-5 divConnect" action="#!">
            <img class="img-fluid rounded-circle" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4">Récupérez votre Mot de Passe</p>

            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Adresse Mail"
                   required>
            <div class="g-recaptcha form-group" data-sitekey="6LeTmMAUAAAAADw7uH0DmeFBI9x0YeqhCZos-AFR"></div>
            <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdxmMAUAAAAAGaKb_PBUkAazJGtn_kBjNI1zViW"></script>
        <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {

            });
        });
  </script> -->
            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4 " type="submit" id="bouton">Récupérer</button>
        </form>
    </div>
    <footer class="py-3 bg-dark align-items-center mt-5">
        <div class="container text-center">
            <div class="icone">
                <a href="https://www.linkedin.com/company/connectanou/"><img src="img/027-linkedin.png" width="23px"
                                                                             height="23px"></a>
                <a href="https://www.facebook.com/connectanou/"><img src="img/036-facebook.png" width="23px"
                                                                     height="23px"></a>

            </div>
            <div class="mentionLegal">
                <a href="contact.php">Contact</a>
                <a href="mentionLegal.php">Mentions légales</a></div>
        </div>
    </footer>
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