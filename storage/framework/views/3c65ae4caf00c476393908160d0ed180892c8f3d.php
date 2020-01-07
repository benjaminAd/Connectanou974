<?php $__env->startSection('title'); ?>
    <title>Recherche d'annonce</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="./css/style_Contact.css"/>
<?php $__env->stopSection(); ?>
            
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <div class="border border-light p-5 divConnect needs-validation" >
            <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo"/>
            <p class="h1 mb-4 text-center">Recherchez des Projets</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="">
                    <hr>
                <form action="<?php echo e(route('recherche.search')); ?>" method="POST" onsubmit="search(event)" id="searchForm">

                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <input type="text" class="form-control" id="words">
                        </div>
                        <button type="submit" class="btn btn-danger mb-5" style="display: block; margin : auto;">Rechercher</button>
                    </form>
                    <p>Si vous êtes intéréssé par un projet, contactez l'équipe de Connectanou.</p>
                    <?php $__currentLoopData = $RechercheAnnonce; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Recherche): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-2 mt-3 " style="width: 36rem;">
                            
                            <div class="card-body">
                                
                                <h5 class="card-title"><?php echo e($Recherche->titre_projet); ?></h5>
                                <p class="card-text"><?php echo e($Recherche->desc_projet); ?><br/><?php echo e($Recherche->date_butoir_projet); ?></p>
                                
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                    <hr>
                     <div class="d-flex justify-content-center mt-3">
                        <?php echo e($RechercheAnnonce->links()); ?>

                    </div>
                </div>
            </div> 
            </form>
            </div>
        </div>
    </div>
        
   <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function search(event){
            // on désactive le comportement par défaut du bouton 
            // event.preventDefault();
            // et on veut récupérer la valeur entrée dans 'input'
            const words = document.querySelector('#words').value
            
            // passer la valeur indiqué dans notre formulaire dans la requete ajax avec la bibliothèque AXIOS

            // on récupére url de la recherche dans une constante
            // afin de rendre la recherche dynamique et paré à d'éventuelles changement
            const url = document.querySelector('#searchForm').getAttribute('action')
            // `${url}`nous permet de passer la valeur de l'action 
            axios.post( `${url}`, {
                'words': words,
                
            }).then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });


        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>