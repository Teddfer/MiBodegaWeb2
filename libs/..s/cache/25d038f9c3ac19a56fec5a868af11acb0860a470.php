

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('layouts.components.alert'); ?>
        <?php $__env->slot('title', 'Cualquier cosa'); ?>
        <?php $__env->slot('color', 'warning'); ?>
        Esta es una alerta naranja
    <?php echo $__env->renderComponent(); ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiBodega\app\views/home/prueba.blade.php ENDPATH**/ ?>