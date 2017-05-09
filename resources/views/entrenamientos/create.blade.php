@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear entrenamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'entrenamientos.store', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                            {!! Form::label('fechaInicio', 'Fecha de inicio del entrenamiento') !!}
                            {!! Form::text('fechaInicio',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaFin', 'Fecha de fin del entrenamiento') !!}
                            {!! Form::text('fechaFin',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripcion') !!}
                            {!! Form::text('descripcion',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('cliente_id', 'Cliente') !!}
                            {!! Form::select('cliente_id', $clientes, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('entrenadorpersonal_id', 'Entrenadorpersonal') !!}
                            {!! Form::select('entrenadorpersonal_id', $entrenadorpersonals, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection