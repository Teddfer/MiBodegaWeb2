




<div class="container">
    <form action="<?php echo e(URL.'usuario/save'); ?>" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdUsuario" value="<?php echo e($data->IdUsuario); ?>">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Tipo</label>
                    <select name="IdTipo">
                        <?php $__currentLoopData = $usuarios_tipo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->IdTipo); ?>" <?php echo e(selected($item->IdTipo, $idtipo)); ?>>
                                <?php echo e($item->Nombre); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="Usuario" id="Usuario" value="<?php echo e($data->Usuario); ?>">
                    <div class="messages"></div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Clave</label>
                    <input type="text" name="Clave" id="Clave" value="<?php echo e($data->Clave); ?>">
                    <div class="messages"></div>
                </div> 
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" name="Correo" id="Correo" value="<?php echo e($data->Correo); ?>">
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
<script src="<?php echo e(URL); ?>js/mis_scripts/usuario.js"></script>
<?php /**PATH C:\xampp\htdocs\MiBodega\app\views/usuario/detail.blade.php ENDPATH**/ ?>