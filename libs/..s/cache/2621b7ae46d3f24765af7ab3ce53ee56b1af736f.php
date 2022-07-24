




<div class="container">
    <form action="<?php echo e(URL.'cliente/save'); ?>" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdCliente" value="<?php echo e($data->IdCliente); ?>">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Usuario</label>
                    <select name="IdUsuario">
                        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->IdUsuario); ?>" <?php echo e(selected($item->IdUsuario, $idusuario)); ?>>
                                <?php echo e($item->Usuario); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" name="Nombres" id="Nombres" value="<?php echo e($data->Nombres); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" name="Apellidos" id="Apellidos" value="<?php echo e($data->Apellidos); ?>">
                    <div class="messages"></div>
                </div> 
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">DNI</label>
                    <input type="text" name="DNI" id="DNI" value="<?php echo e($data->DNI); ?>">
                    <div class="messages"></div>
                </div> 
                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="tel" name="Telf" id="Telf" value="<?php echo e($data->Telf); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" name="Nacimiento" id="Nacimiento" value="<?php echo e($data->Nacimiento); ?>">
                    <div class="messages"></div>
                </div> 
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Sexo</label>
                    <input type="text" name="Sexo" id="Sexo" value="<?php echo e($data->Sexo); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Dirección</label>
                    <input type="text" name="Direccion" id="Direccion" value="<?php echo e($data->Direccion); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Ubicación</label>
                    <input type="text" name="Ubicacion" id="Ubicacion" value="<?php echo e($data->Ubicacion); ?>">
                    <div class="messages"></div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-right">
            <div class="col modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="<?php echo e(URL); ?>js/mis_scripts/validate.js"></script>
<script src="<?php echo e(URL); ?>js/mis_scripts/show_errors_validations.js"></script>
<script src="<?php echo e(URL); ?>js/mis_scripts/cliente.js"></script>
<?php /**PATH C:\xampp\htdocs\MiBodega\app\views/cliente/detail.blade.php ENDPATH**/ ?>