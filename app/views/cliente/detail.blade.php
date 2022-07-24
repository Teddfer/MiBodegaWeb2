{{--@extends('layouts.template')--}}

{{--@section('title', 'Productos')--}}

{{--@section('content')--}}
<div class="container">
    <form action="{{URL.'cliente/save'}}" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdCliente" value="{{$data->IdCliente}}">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Usuario</label>
                    <select name="IdUsuario">
                        @foreach ($usuarios as $item)
                            <option value="{{$item->IdUsuario}}" {{selected($item->IdUsuario, $idusuario)}}>
                                {{$item->Usuario}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" name="Nombres" id="Nombres" value="{{$data->Nombres}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" name="Apellidos" id="Apellidos" value="{{$data->Apellidos}}">
                    <div class="messages"></div>
                </div> 
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">DNI</label>
                    <input type="text" name="DNI" id="DNI" value="{{$data->DNI}}">
                    <div class="messages"></div>
                </div> 
                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="tel" name="Telf" id="Telf" value="{{$data->Telf}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Fecha de Nacimiento</label>
                    <input type="date" name="Nacimiento" id="Nacimiento" value="{{$data->Nacimiento}}">
                    <div class="messages"></div>
                </div> 
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Sexo</label>
                    <input type="text" name="Sexo" id="Sexo" value="{{$data->Sexo}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Dirección</label>
                    <input type="text" name="Direccion" id="Direccion" value="{{$data->Direccion}}">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Ubicación</label>
                    <input type="text" name="Ubicacion" id="Ubicacion" value="{{$data->Ubicacion}}">
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
<script src="{{URL}}js/mis_scripts/cliente.js"></script>
{{--@endsection--}}