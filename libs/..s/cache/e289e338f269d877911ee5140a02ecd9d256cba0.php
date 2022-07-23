




<div class="container">
    <form action="<?php echo e(URL.'producto/save'); ?>" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdProducto" value="<?php echo e($data->IdProducto); ?>">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" value="<?php echo e($data->Nombre); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" name="Descripcion" id="Descripcion" value="<?php echo e($data->Descripcion); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Marca</label>
                    <select name="IdMarca">
                        <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->IdMarca); ?>" <?php echo e(selected($item->IdMarca, $idmarca)); ?>>
                                <?php echo e($item->Nombre); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Categoria</label>
                    <select name="IdCategoria">
                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->IdCategoria); ?>" <?php echo e(selected($item->IdCategoria, $idcategoria)); ?>>
                                <?php echo e($item->Nombre); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Precio Costo</label>
                    <input type="number" step="0.1" name="PrecioCosto" id="PrecioCosto" value="<?php echo e($data->PrecioCosto); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Precio Venta</label>
                    <input type="number" step="0.1" name="PrecioVenta" id="PrecioVenta"value="<?php echo e($data->PrecioVenta); ?>">
                    <div class="messages"></div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="number" step="1"name="Stock" id="Stock" value="<?php echo e($data->Stock); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Stock Minimo</label>
                    <input type="number" step="1" name="StockMinimo" id="StockMinimo" value="<?php echo e($data->StockMinimo); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="checkbox" name="Estado" id="Estado" <?php echo e(checked($data->Estado)); ?>>
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
<script src="<?php echo e(URL); ?>js/mis_scripts/producto.js"></script>
<?php /**PATH C:\xampp\htdocs\MiBodega\app\views/producto/detail.blade.php ENDPATH**/ ?>