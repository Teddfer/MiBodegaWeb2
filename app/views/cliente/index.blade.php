@extends('layouts.template')

@section('title', 'Clientes')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <a class="btn btn-success btn-sm" href="{{URL.'cliente/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 3%">ID</th>
                <th style="width: 3%">ID U.</th>
                <th style="width: 10%">NOMBRES</th>
                <th style="width: 10%">APELLIDOS</th>
                <th style="width: 8%">DNI</th>
                <th style="width: 8%">TELEFONO</th>
                <th style="width: 8%">F.NAC.</th>
                <th style="width: 10%">SEXO</th>
                <th style="width: 10%">DIRECCION</th>
                <th style="width: 10%">UBICACION</th>
                <th style="width: 10">USUARIO</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->IdCliente}}</td>
                    <td>{{$item->IdUsuario}}</td>
                    <td>{{$item->Nombres}}</td>
                    <td>{{$item->Apellidos}}</td>
                    <td>{{$item->DNI}}</td>
                    <td>{{$item->Telf}}</td>
                    <td>{{$item->Nacimiento}}</td>
                    <td>{{$item->Sexo}}</td>
                    <td>{{$item->Direccion}}</td>
                    <td>{{$item->Ubicacion}}</td>
                    <td>{{$item->usuarios}}</td>
                    <td>
                        <a 
                            class="btn btn-danger btn-sm"
                            is-modal="true" 
                            href='{{URL."cliente/detail/{$item->IdCliente}/{$item->IdUsuario}"}}'>
                            <i class="fa fa-pencil"></i>
                        </a>

                        <button 
                            class="btn btn-primary btn-sm"
                            my-name="{{{$item->Nombres}}}" 
                            my-action='{{URL."cliente/delete/{$item->IdCliente}"}}' onclick="remove(this)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @component('layouts.components.modal')
        @slot('title', 'Cliente - Detalle')
        @slot('size', MODAL_LARGE)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection
