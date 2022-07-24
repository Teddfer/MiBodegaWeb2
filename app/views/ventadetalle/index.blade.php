@extends('layouts.template')

@section('title', 'Ventas Detalle')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <a class="btn btn-success btn-sm" href="{{URL.'ventadetalle/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 8%">ID</th>
                <th style="width: 8%">ID V.</th>
                <th style="width: 8%">ID P.</th>
                <th style="width: 8%">CANTIDAD</th>
                <th style="width: 6%">PRECIO VENTA</th>
                <th style="width: 10%">ITEM</th>
                <th style="width: 10%">VENTA</th>
                <th style="width: 32%">PRODUCTO</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->IdVentasDetalle}}</td>
                    <td>{{$item->IdVenta}}</td>
                    <td>{{$item->IdProducto}}</td>
                    <td>{{$item->Cantidad}}</td>
                    <td>{{$item->PrecioVenta}}</td>
                    <td>{{$item->Item}}</td>
                    <td>{{$item->ventas}}</td>
                    <td>{{$item->productos}}</td>
                    <td>
                        <a 
                            class="btn btn-danger btn-sm"
                            is-modal="true" 
                            href='{{URL."ventadetalle/detail/{$item->IdVentasDetalle}/{$item->IdVenta}/{$item->IdProducto}"}}'>
                            <i class="fa fa-pencil"></i>
                        </a>

                        <button 
                            class="btn btn-primary btn-sm"
                            my-name="{{{$item->PrecioVenta}}}" 
                            my-action='{{URL."ventadetalle/delete/{$item->IdVentasDetalle}"}}' onclick="remove(this)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @component('layouts.components.modal')
        @slot('title', 'Ventas Detalle')
        @slot('size', MODAL_LARGE)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection
