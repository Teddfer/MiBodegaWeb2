

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('layouts.components.alert'); ?>
        <?php $__env->slot('title', 'Advertencia'); ?>
        <?php $__env->slot('color', 'primary'); ?>
        Esta es una alerta roja
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('layouts.components.alert'); ?>
        <?php $__env->slot('title', 'Aviso'); ?>
        <?php $__env->slot('color', 'success'); ?>
        Esta es una alerta verde
    <?php echo $__env->renderComponent(); ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiBodega\app\views/home/index.blade.php ENDPATH**/ ?>