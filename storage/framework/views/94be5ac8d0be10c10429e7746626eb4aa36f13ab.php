<?php $__env->startComponent('mail::message'); ?>
# Bonjour

Vous avez reçu un mail de la part de <?php echo e($data['name']); ?>(<?php echo e($data['email']); ?>)


<strong>Message : </strong> <br>
<?php echo e($data['message']); ?>

<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
