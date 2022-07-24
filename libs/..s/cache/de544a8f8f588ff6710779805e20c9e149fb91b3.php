

<?php $__env->startSection('title', 'Ventas Detalle'); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-2">
            <a class="btn btn-success btn-sm" href="<?php echo e(URL.'ventadetalle/detail'); ?>" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 8%">ID</th>
                <th style="width: 8%">ID V.</th>
                <th style="width: 8%">ID P.</th>
                <th style="width: 8%">CANTIDAD</th>
                <th style="width: 6%">PRECIO VENTA</th>
                <th style="width: 10%">ITEM</th>
                <th style="width: 10%">VENTA</th>
                <th style="width: 32%">PRODUCTO</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->IdVentasDetalle); ?></td>
                    <td><?php echo e($item->IdVenta); ?></td>
                    <td><?php echo e($item->IdProducto); ?></td>
                    <td><?php echo e($item->Cantidad); ?></td>
                    <td><?php echo e($item->PrecioVenta); ?></td>
                    <td><?php echo e($item->Item); ?></td>
                    <td><?php echo e($item->ventas); ?></td>
                    <td><?php echo e($item->productos); ?></td>
                    <td>
                        <a 
                            class="btn btn-danger btn-sm"
                            is-modal="true" 
                            href='<?php echo e(URL."ventadetalle/detail/{$item->IdVentasDetalle}/{$item->IdVenta}/{$item->IdProducto}"); ?>'>
                            <i class="fa fa-pencil"></i>
                        </a>

                        <button 
                            class="btn btn-primary btn-sm"
                            my-name="<?php echo e($item->PrecioVenta); ?>" 
                            my-action='<?php echo e(URL."ventadetalle/delete/{$item->IdVentasDetalle}"); ?>' onclick="remove(this)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    <?php $__env->startComponent('layouts.components.modal'); ?>
        <?php $__env->slot('title', 'Ventas Detalle'); ?>
        <?php $__env->slot('size', MODAL_LARGE); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="<?php echo e(URL); ?>js/mis_scripts/modal_crud.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiBodega\app\views/ventadetalle/index.blade.php ENDPATH**/ ?>