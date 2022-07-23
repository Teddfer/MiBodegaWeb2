

<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-2">
            <a class="btn btn-success btn-sm" href="<?php echo e(URL.'usuario/detail'); ?>" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 7%">ID</th>
                <th style="width: 7%">ID TIPO</th>
                <th style="width: 13%">USUARIO</th>
                <th style="width: 15%">CLAVE</th>
                <th style="width: 35%">CORREO</th>
                <th style="width: 15%">USUARIO TIPO</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->IdUsuario); ?></td>
                    <td><?php echo e($item->IdTipo); ?></td>
                    <td><?php echo e($item->Usuario); ?></td>
                    <td><?php echo e($item->Clave); ?></td>
                    <td><?php echo e($item->Correo); ?></td>
                    <td><?php echo e($item->usuarios_tipo); ?></td>
                    <td>
                        <a 
                            class="btn btn-danger btn-sm"
                            is-modal="true" 
                            href='<?php echo e(URL."usuario/detail/{$item->IdUsuario}/{$item->IdTipo}"); ?>'>
                            <i class="fa fa-pencil"></i>
                        </a>

                        <button 
                            class="btn btn-primary btn-sm"
                            my-name="<?php echo e($item->Usuario); ?>" 
                            my-action='<?php echo e(URL."usuario/delete/{$item->IdUsuario}"); ?>' onclick="remove(this)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    <?php $__env->startComponent('layouts.components.modal'); ?>
        <?php $__env->slot('title', 'Usuario - Detalle'); ?>
        <?php $__env->slot('size', MODAL_LARGE); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="<?php echo e(URL); ?>js/mis_scripts/modal_crud.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiBodega\app\views/usuario/index.blade.php ENDPATH**/ ?>