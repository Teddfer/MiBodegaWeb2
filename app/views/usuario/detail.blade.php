{{--@extends('layouts.template')--}}

{{--@section('title', 'Productos')--}}

{{--@section('content')--}}
<div class="container">
    <form action="{{URL.'usuario/save'}}" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdUsuario" value="{{$data->IdUsuario}}">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Tipo</label>
                    <select name="IdTipo">
                        @foreach ($usuarios_tipo as $item)
                            <option value="{{$item->IdTipo}}" {{selected($item->IdTipo, $idtipo)}}>
                                {{$item->Nombre}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="Usuario" id="Usuario" value="{{$data->Usuario}}">
                    <div class="messages"></div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Clave</label>
                    <input type="text" name="Clave" id="Clave" value="{{$data->Clave}}">
                    <div class="messages"></div>
                </div> 
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="email" name="Correo" id="Correo" value="{{$data->Correo}}">
                    <div class="messages"></div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-right">
            <div class="col modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="{{URL}}js/mis_scripts/validate.js"></script>
<script src="{{URL}}js/mis_scripts/show_errors_validations.js"></script>
<script src="{{URL}}js/mis_scripts/usuario.js"></script>
{{--@endsection--}}