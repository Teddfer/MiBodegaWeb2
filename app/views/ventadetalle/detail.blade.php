{{--@extends('layouts.template')--}}

{{--@section('title', 'Productos')--}}

{{--@section('content')--}}
<div class="container">
    <form action="{{URL.'ventadetalle/save'}}" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdVentasDetalle" value="{{$data->IdVentasDetalle}}">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Venta</label>
                    <select name="IdVenta">
                        @foreach ($ventas as $item)
                            <option value="{{$item->IdVenta}}" {{selected($item->IdVenta, $idventa)}}>
                                {{$item->IdVenta}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Producto</label>
                    <select name="IdProducto">
                        @foreach ($productos as $item)
                            <option value="{{$item->IdProducto}}" {{selected($item->IdProducto, $idproducto)}}>
                                {{$item->Nombre}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input type="number" name="Cantidad" id="Cantidad" value="{{$data->Cantidad}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Precio Venta</label>
                    <input type="number" step="0.1" name="PrecioVenta" id="PrecioVenta"value="{{$data->PrecioVenta}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Item</label>
                    <input type="number" name="Item" id="Item" value="{{$data->Item}}">
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
<script src="{{URL}}js/mis_scripts/ventadetalle.js"></script>
{{--@endsection--}}