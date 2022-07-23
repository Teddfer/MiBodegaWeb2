{{--@extends('layouts.template')--}}

{{--@section('title', 'Productos')--}}

{{--@section('content')--}}
<div class="container">
    <form action="{{URL.'producto/save'}}" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdProducto" value="{{$data->IdProducto}}">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" value="{{$data->Nombre}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" name="Descripcion" id="Descripcion" value="{{$data->Descripcion}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Marca</label>
                    <select name="IdMarca">
                        @foreach ($marcas as $item)
                            <option value="{{$item->IdMarca}}" {{selected($item->IdMarca, $idmarca)}}>
                                {{$item->Nombre}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Categoria</label>
                    <select name="IdCategoria">
                        @foreach ($categorias as $item)
                            <option value="{{$item->IdCategoria}}" {{selected($item->IdCategoria, $idcategoria)}}>
                                {{$item->Nombre}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Precio Costo</label>
                    <input type="number" step="0.1" name="PrecioCosto" id="PrecioCosto" value="{{$data->PrecioCosto}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Precio Venta</label>
                    <input type="number" step="0.1" name="PrecioVenta" id="PrecioVenta"value="{{$data->PrecioVenta}}">
                    <div class="messages"></div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="number" step="1"name="Stock" id="Stock" value="{{$data->Stock}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Stock Minimo</label>
                    <input type="number" step="1" name="StockMinimo" id="StockMinimo" value="{{$data->StockMinimo}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="checkbox" name="Estado" id="Estado" {{checked($data->Estado)}}>
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
<script src="{{URL}}js/mis_scripts/validate.js"></script>
<script src="{{URL}}js/mis_scripts/show_errors_validations.js"></script>
<script src="{{URL}}js/mis_scripts/producto.js"></script>
{{--@endsection--}}