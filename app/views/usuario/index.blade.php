@extends('layouts.template')

@section('title', 'Usuarios')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <a class="btn btn-success btn-sm" href="{{URL.'usuario/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 7%">ID</th>
                <th style="width: 7%">ID TIPO</th>
                <th style="width: 13%">USUARIO</th>
                <th style="width: 15%">CLAVE</th>
                <th style="width: 35%">CORREO</th>
                <th style="width: 15%">USUARIO TIPO</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->IdUsuario}}</td>
                    <td>{{$item->IdTipo}}</td>
                    <td>{{$item->Usuario}}</td>
                    <td>{{$item->Clave}}</td>
                    <td>{{$item->Correo}}</td>
                    <td>{{$item->usuarios_tipo}}</td>
                    <td>
                        <a 
                            class="btn btn-danger btn-sm"
                            is-modal="true" 
                            href='{{URL."usuario/detail/{$item->IdUsuario}/{$item->IdTipo}"}}'>
                            <i class="fa fa-pencil"></i>
                        </a>

                        <button 
                            class="btn btn-primary btn-sm"
                            my-name="{{{$item->Usuario}}}" 
                            my-action='{{URL."usuario/delete/{$item->IdUsuario}"}}' onclick="remove(this)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @component('layouts.components.modal')
        @slot('title', 'Usuario - Detalle')
        @slot('size', MODAL_LARGE)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection
