@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear ejercicio</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'ejercicios.store', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                            {!! Form::label('nombreejercicio', 'Nombre del ejercicio') !!}
                            {!! Form::text('nombreejercicio',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

{{--
                        <div class="form-group">
                            {!! Form::label('foto', 'Foto') !!}
                            {!! Form::text('foto',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('video', 'Video') !!}
                            {!! Form::text('video',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
--}}

                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripcion') !!}
                            {!! Form::text('descripcion',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('zona', 'Zona') !!}
                            {!! Form::text('zona',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                      <div class="form-group">
                            {!!Form::label('entrenamiento_id', 'Entrenamiento') !!}
                            {!! Form::select('entrenamiento_id', $entrenamientos, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection