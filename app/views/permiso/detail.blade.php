{{--@extends('layouts.template')--}}

{{--@section('title', 'Productos')--}}

{{--@section('content')--}}
<div class="container">
    <form action="{{URL.'permiso/save'}}" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdPermiso" value="{{$data->IdPermiso}}">
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
                    <label for="">Tablas</label>
                    <input type="text" name="Tablas" id="Tablas" value="{{$data->Tablas}}">
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
<script src="{{URL}}js/mis_scripts/permiso.js"></script>
{{--@endsection--}}