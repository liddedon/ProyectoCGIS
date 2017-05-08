@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear cliente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'clientes.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del cliente') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Apellidos') !!}
                            {!! Form::text('surname',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email del cliente') !!}
                            {!! Form::text('email',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('haceDeporte', '¿Hace deporte?') !!}
                            <select class="form-control" name="haceDeporte">
                                <option value = "1">Si</option>
                                <option value = "0">No</option>
                            </select>
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection