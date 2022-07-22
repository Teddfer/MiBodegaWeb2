

<?php $__env->startSection('title', 'Productos'); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-2">
            <a href="<?php echo e(URL.'producto/detail'); ?>" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 35%">NOMBRE</th>
                <th style="width: 10%">P. VENTA</th>
                <th style="width: 10%">P. COSTO</th>
                <th style="width: 5%">STOCK</th>
                <th style="width: 5%">STOCK MINIMO</th>
                <th style="width: 10%">CATEGORIA</th>
                <th style="width: 10%">MARCA</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->IdProducto); ?></td>
                    <td><?php echo e($item->Nombre); ?></td>
                    <td><?php echo e($item->PrecioVenta); ?></td>
                    <td><?php echo e($item->PrecioCosto); ?></td>
                    <td><?php echo e($item->Stock); ?></td>
                    <td><?php echo e($item->StockMinimo); ?></td>
                    <td><?php echo e($item->categorias); ?></td>
                    <td><?php echo e($item->marcas); ?></td>
                    <td>
                        <button 
                        class="btn btn-danger btn-sm"
                        is-modal="true" 
                        href='<?php echo e(URL."producto/detail/{$item->IdProducto}/{$item->IdCategoria}/{$item->IdMarca}"); ?>'>
                        <i class="fa fa-pencil"></i>
                        </button>

                        <button 
                        class="btn btn-primary btn-sm"
                        my-name="<?php echo e($item->Nombre); ?>" 
                        my-action='<?php echo e(URL."producto/delete/{$item->IdProducto}"); ?>' onclick="remove(this)">
                        <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    <?php $__env->startComponent('layouts.components.modal'); ?>
        <?php $__env->slot('title', 'Producto - Detalle'); ?>
        <?php $__env->slot('size', MODAL_LARGE); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="<?php echo e(URL); ?>js/mis_scripts/modal_crud.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiBodega\app\views/producto/index.blade.php ENDPATH**/ ?>