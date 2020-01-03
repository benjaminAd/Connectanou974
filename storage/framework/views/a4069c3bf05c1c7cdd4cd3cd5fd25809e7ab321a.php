<?php $__env->startSection('title'); ?>
    <title>Contact</title> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
  <link rel="stylesheet" href="./css/style_Contact.css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="d-flex justify-content-center align-items-center divCon mt-5">
        <form class="border border-light p-5 divConnect needs-validation" action="#" novalidate>
          
            <p class="h4 mb-4 text-center">Faites votre B.A.</p>
            <iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/connectanou/formulaires/1/widget" style="width:100%;height:750px;border:none;" onload="window.scroll(0, this.offsetTop)">
            </iframe>


            <iframe id="haWidget" allowtransparency="true" src="https://www.helloasso.com/associations/connectanou/formulaires/1/widget-bouton" style="width:100%;height:70px;border:none;">
            </iframe>
            
            
        </form> 
    </div>
    <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>