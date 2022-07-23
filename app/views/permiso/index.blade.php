@extends('layouts.template')

@section('title', 'Permisos')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <a class="btn btn-success btn-sm" href="{{URL.'permiso/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 8">ID</th>
                <th style="width: 8%">ID TIPO</th>
                <th style="width: 46%">TABLAS</th>
                <th style="width: 28%">USUARIO TIPO</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->IdPermiso}}</td>
                    <td>{{$item->IdTipo}}</td>
                    <td>{{$item->Tablas}}</td>
                    <td>{{$item->usuarios_tipo}}</td>
                    <td>
                        <a 
                            class="btn btn-danger btn-sm"
                            is-modal="true" 
                            href='{{URL."permiso/detail/{$item->IdPermiso}/{$item->IdTipo}"}}'>
                            <i class="fa fa-pencil"></i>
                        </a>

                        <button 
                            class="btn btn-primary btn-sm"
                            my-name="{{{$item->Tablas}}}" 
                            my-action='{{URL."permiso/delete/{$item->IdPermiso}"}}' onclick="remove(this)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @component('layouts.components.modal')
        @slot('title', 'Permiso - Detalle')
        @slot('size', MODAL_LARGE)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection
