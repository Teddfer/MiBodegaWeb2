

<?php $__env->startSection('title', 'Marcas'); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a class="btn btn-success btn-sm" href="<?php echo e(URL.'marca/detail'); ?>" is-modal="true" id="nuevo">Nuevo</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width: 10%">ID</th>
                    <th style="width: 40%">NOMBRE</th>
                    <th style="width: 40%">DESCRIPCION</th>
                    <th style="width: 10%"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->IdMarca); ?></td>
                        <td><?php echo e($item->Nombre); ?></td>
                        <td><?php echo e($item->Descripcion); ?></td>
                        <td>
                            <a 
                                class="btn btn-danger btn-sm"
                                is-modal="true" 
                                href='<?php echo e(URL."marca/detail/{$item->IdMarca}"); ?>'>
                                <i class="fa fa-pencil"></i>
                            </a>

                            <button 
                                class="btn btn-primary btn-sm"
                                my-name="<?php echo e($item->Nombre); ?>" 
                                my-action='<?php echo e(URL."marca/delete/{$item->IdMarca}"); ?>' onclick="remove(this)">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php $__env->startComponent('layouts.components.modal'); ?>
        <?php $__env->slot('title', 'Marcas - Detalle'); ?>
        <?php $__env->slot('size', MODAL_LARGE); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="<?php echo e(URL); ?>js/mis_scripts/modal_crud.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiBodega\app\views/marca/index.blade.php ENDPATH**/ ?>