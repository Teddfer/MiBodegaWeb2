




<div class="container">
    <form action="<?php echo e(URL.'ventadetalle/save'); ?>" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdVentasDetalle" value="<?php echo e($data->IdVentasDetalle); ?>">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Venta</label>
                    <select name="IdVenta">
                        <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->IdVenta); ?>" <?php echo e(selected($item->IdVenta, $idventa)); ?>>
                                <?php echo e($item->IdVenta); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Producto</label>
                    <select name="IdProducto">
                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->IdProducto); ?>" <?php echo e(selected($item->IdProducto, $idproducto)); ?>>
                                <?php echo e($item->Nombre); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input type="number" name="Cantidad" id="Cantidad" value="<?php echo e($data->Cantidad); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Precio Venta</label>
                    <input type="number" step="0.1" name="PrecioVenta" id="PrecioVenta"value="<?php echo e($data->PrecioVenta); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Item</label>
                    <input type="number" name="Item" id="Item" value="<?php echo e($data->Item); ?>">
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
<script src="<?php echo e(URL); ?>js/mis_scripts/ventadetalle.js"></script>
<?php /**PATH C:\xampp\htdocs\MiBodega\app\views/ventadetalle/detail.blade.php ENDPATH**/ ?>