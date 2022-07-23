@extends('layouts.template')

@section('title', 'Marcas')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a class="btn btn-success btn-sm" href="{{URL.'marca/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width: 10%">ID</th>
                    <th style="width: 40%">NOMBRE</th>
                    <th style="width: 40%">DESCRIPCION</th>
                    <th style="width: 10%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->IdMarca}}</td>
                        <td>{{$item->Nombre}}</td>
                        <td>{{$item->Descripcion}}</td>
                        <td>
                            <a 
                                class="btn btn-danger btn-sm"
                                is-modal="true" 
                                href='{{URL."marca/detail/{$item->IdMarca}"}}'>
                                <i class="fa fa-pencil"></i>
                            </a>

                            <button 
                                class="btn btn-primary btn-sm"
                                my-name="{{{$item->Nombre}}}" 
                                my-action='{{URL."marca/delete/{$item->IdMarca}"}}' onclick="remove(this)">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @component('layouts.components.modal')
        @slot('title', 'Marcas - Detalle')
        @slot('size', MODAL_LARGE)
    @endcomponent
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>
    <script src="{{URL}}js/mis_scripts/modal_crud.js"></script>
@endsection
