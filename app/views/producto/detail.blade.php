{{--@extends('layouts.template')--}}

{{--@section('title', 'Productos')--}}

{{--@section('content')--}}
<div class="container">
    <form action="{{URL.'producto/save'}}" method="POST" id="myForm">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="Nombre" value="{{$data->Nombre}}">
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" name="Descripcion" value="{{$data->Descripcion}}">
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
                    <input type="number" step="0.1" name="PrecioCosto" value="{{$data->PrecioCosto}}">
                </div>
                <div class="form-group">
                    <label for="">Precio Venta</label>
                    <input type="number" step="0.1" name="PrecioVenta" value="{{$data->PrecioVenta}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="number" step="1"name="Stock"  value="{{$data->Stock}}">
                </div>
                <div class="form-group">
                    <label for="">Stock Minimo</label>
                    <input type="number" step="1" name="StockMinimo" value="{{$data->StockMinimo}}">
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="checkbox" name="Estado" {{checked($data->Estado)}}>
                </div>
            </div>
        </div>
        <input type="hidden" name="IdProducto" value="{{$data->IdProducto}}">
        <div class="row justify-content-right">
            <div class="col modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>


{{--@endsection--}}