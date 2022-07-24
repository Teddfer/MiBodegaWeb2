




<div class="container">
    <form action="<?php echo e(URL.'venta/save'); ?>" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdVenta" value="<?php echo e($data->IdVenta); ?>">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Cliente</label>
                    <select name="IdCliente">
                        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->IdCliente); ?>" <?php echo e(selected($item->IdCliente, $idcliente)); ?>>
                                <?php echo e($item->DNI); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Fecha de Emisión</label>
                    <input type="date" name="FEmision" id="FEmision" value="<?php echo e($data->FEmision); ?>">
                    <div class="messages"></div>
                </div> 
                <div class="form-group">
                    <label for="">Hora de Emisión</label>
                    <input type="time" name="HEmision" id="HEmision" value="<?php echo e($data->HEmision); ?>">
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
<script src="<?php echo e(URL); ?>js/mis_scripts/venta.js"></script>
<?php /**PATH C:\xampp\htdocs\MiBodega\app\views/venta/detail.blade.php ENDPATH**/ ?>