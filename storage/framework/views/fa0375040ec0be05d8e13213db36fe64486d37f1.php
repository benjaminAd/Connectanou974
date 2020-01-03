<?php $__env->startSection('title'); ?>
    <title>Contact</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="./css/style_Contact.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" action="#" novalidate>
            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h4 mb-4 text-center">Contactez-nous</p>
            <div class="form-group">
                <label style="font-weight: bold;">Nom</label>
                <input type="text" class="form-control " name="name" placeholder="Exemple : Payet " required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>

            <div class="form-group">
                <label style="font-weight: bold;">Email</label>
                <input type="email" class="form-control " name="email" placeholder="Exemple : payetReunion974@gmail.com"
                       required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>

            <div class="form-group">
                <label style="font-weight: bold;">Objet du message</label>
                <select class=form-control>
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
                <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Votre message"
                          required></textarea>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
            <div class="g-recaptcha form-group" data-sitekey="6LeTmMAUAAAAADw7uH0DmeFBI9x0YeqhCZos-AFR"></div>
            <button type="submit" class="btn btn-info btn-block my-4 " id="bouton">Envoyer le message</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            "use strict";
            window.addEventListener(
                "load",
                function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName("needs-validation");
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener(
                            "submit",
                            function (event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add("was-validated");
                            },
                            false
                        );
                    });
                },
                false
            );
        })();
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>