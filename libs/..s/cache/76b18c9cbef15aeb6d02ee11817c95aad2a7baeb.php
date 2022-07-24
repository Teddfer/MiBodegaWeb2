

<?php $__env->startSection('title', 'Clientes'); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-2">
            <a class="btn btn-success btn-sm" href="<?php echo e(URL.'cliente/detail'); ?>" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 3%">ID</th>
                <th style="width: 3%">ID U.</th>
                <th style="width: 10%">NOMBRES</th>
                <th style="width: 10%">APELLIDOS</th>
                <th style="width: 8%">DNI</th>
                <th style="width: 8%">TELEFONO</th>
                <th style="width: 8%">F.NAC.</th>
                <th style="width: 10%">SEXO</th>
                <th style="width: 10%">DIRECCION</th>
                <th style="width: 10%">UBICACION</th>
                <th style="width: 10">USUARIO</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->IdCliente); ?></td>
                    <td><?php echo e($item->IdUsuario); ?></td>
                    <td><?php echo e($item->Nombres); ?></td>
                    <td><?php echo e($item->Apellidos); ?></td>
                    <td><?php echo e($item->DNI); ?></td>
                    <td><?php echo e($item->Telf); ?></td>
                    <td><?php echo e($item->Nacimiento); ?></td>
                    <td><?php echo e($item->Sexo); ?></td>
                    <td><?php echo e($item->Direccion); ?></td>
                    <td><?php echo e($item->Ubicacion); ?></td>
                    <td><?php echo e($item->usuarios); ?></td>
                    <td>
                        <a 
                            class="btn btn-danger btn-sm"
                            is-modal="true" 
                            href='<?php echo e(URL."cliente/detail/{$item->IdCliente}/{$item->IdUsuario}"); ?>'>
                            <i class="fa fa-pencil"></i>
                        </a>

                        <button 
                            class="btn btn-primary btn-sm"
                            my-name="<?php echo e($item->Nombres); ?>" 
                            my-action='<?php echo e(URL."cliente/delete/{$item->IdCliente}"); ?>' onclick="remove(this)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    <?php $__env->startComponent('layouts.components.modal'); ?>
        <?php $__env->slot('title', 'Cliente - Detalle'); ?>
        <?php $__env->slot('size', MODAL_LARGE); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="<?php echo e(URL); ?>js/mis_scripts/modal_crud.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MiBodega\app\views/cliente/index.blade.php ENDPATH**/ ?>