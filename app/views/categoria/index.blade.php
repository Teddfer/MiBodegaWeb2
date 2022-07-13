@extends('layouts.template')

@section('title', 'Categorias')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <a href="{{URL.'categoria/detail'}}">Nuevo</a>
        </div>
    </div>
<table>
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 45%">NOMBRE</th>
                <th style="width: 40%">DESCRIPCION</th>
                <th style="width: 10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->IdCategoria}}</td>
                    <td>{{$item->Nombre}}</td>
                    <td>{{$item->Descripcion}}</td>
                    <td>
                        <a href='{{URL."categoria/detail/{$item->IdCategoria}"}}'><i class="fa fa-pencil"></i></a>
                        <a href='{{URL."categoria/delete/{$item->IdCategoria}"}}'><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection