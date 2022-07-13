@extends('layouts.template')

@section('title', 'Categorias')

@section('content')
<div class="container">
    <form action="{{URL.'categoria/save'}}" method="POST">
        <input type="hidden" name="IdProducto" value="{{$data->IdCategoria}}">
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
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection