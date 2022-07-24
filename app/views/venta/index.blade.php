@extends('layouts.template')

@section('title', 'Ventas')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <a class="btn btn-success btn-sm" href="{{URL.'venta/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 10%">ID</th>
                <th style="width: 10%">ID CL.</th>
                <th style="width: 20%">FECHA EMISION</th>
                <th style="width: 20%">HORA EMISION</th>
                <th style="width: 30%">DNI CLIENTE</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->IdVenta}}</td>
                    <td>{{$item->IdCliente}}</td>
                    <td>{{$item->FEmision}}</td>
                    <td>{{$item->HEmision}}</td>
                    <td>{{$item->clientes}}</td>
                    <td>
                        <a 
                            class="btn btn-danger btn-sm"
                            is-modal="true" 
                            href='{{URL."venta/detail/{$item->IdVenta}/{$item->IdCliente}"}}'>
                            <i class="fa fa-pencil"></i>
                        </a>

                        <button 
                            class="btn btn-primary btn-sm"
                            my-name="{{{$item->FEmision}}}" 
                            my-action='{{URL."venta/delete/{$item->IdVenta}"}}' onclick="remove(this)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @component('layouts.components.modal')
        @slot('title', 'Venta - Detalle')
        @slot('size', MODAL_LARGE)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection
