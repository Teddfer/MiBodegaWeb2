

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
    <h1>Suma de Numeros</h1>
    <form action="<?= URL.'home/suma'?>" method="post">
        <div class="mb-3">
            <label for="number1" class="form-label">Número 1</label>
            <input type="number" class="form-control" id="number1" name="number1" value="<?php echo e($num1); ?>">
        </div>
        <div class="mb-3">
            <label for="number2" class="form-label">Número 2</label>
            <input type="number" class="form-control" id="number2" name="number2" value="<?php echo e($num2); ?>">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary form-control">Aceptar</button>
        </div>
    </form>
    <div class="mb-3">
        <label>La respuesta es: </label>
        <input type="text" class="form-control" id="rpta" value="<?php echo e($rpta); ?>"  readonly>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiBodega\app\views/home/suma.blade.php ENDPATH**/ ?>