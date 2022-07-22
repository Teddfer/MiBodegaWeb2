@extends('layouts.template')

@section('title', 'Productos')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <a href="{{URL.'producto/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 35%">NOMBRE</th>
                <th style="width: 10%">P. VENTA</th>
                <th style="width: 10%">P. COSTO</th>
                <th style="width: 5%">STOCK</th>
                <th style="width: 5%">STOCK MINIMO</th>
                <th style="width: 10%">CATEGORIA</th>
                <th style="width: 10%">MARCA</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->IdProducto}}</td>
                    <td>{{$item->Nombre}}</td>
                    <td>{{$item->PrecioVenta}}</td>
                    <td>{{$item->PrecioCosto}}</td>
                    <td>{{$item->Stock}}</td>
                    <td>{{$item->StockMinimo}}</td>
                    <td>{{$item->categorias}}</td>
                    <td>{{$item->marcas}}</td>
                    <td>
                        <button 
                        class="btn btn-danger btn-sm"
                        is-modal="true" 
                        href='{{URL."producto/detail/{$item->IdProducto}/{$item->IdCategoria}/{$item->IdMarca}"}}'>
                        <i class="fa fa-pencil"></i>
                        </button>

                        <button 
                        class="btn btn-primary btn-sm"
                        my-name="{{{$item->Nombre}}}" 
                        my-action='{{URL."producto/delete/{$item->IdProducto}"}}' onclick="remove(this)">
                        <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @component('layouts.components.modal')
        @slot('title', 'Producto - Detalle')
        @slot('size', MODAL_LARGE)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection
