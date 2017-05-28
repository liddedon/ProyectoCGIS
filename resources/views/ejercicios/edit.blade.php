@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar ejercicio</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($ejercicio, [ 'route' => ['ejercicios.update',$ejercicio->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('nombreejercicio', 'Nombre del ejercicio') !!}
                            {!! Form::text('nombreejercicio',$ejercicio->nombreejercicio,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('foto', 'Foto') !!}
                            {!! Form::text('foto',$ejercicio->foto,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('video', 'Video') !!}
                            {!! Form::text('video',$ejercicio->video,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripcion') !!}
                            {!! Form::text('descripcion',$ejercicio->descripcion,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('zona', 'Zona') !!}
                            {!! Form::text('zona',$ejercicio->zona,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('entrenamiento_id', 'Entrenamiento') !!}
                            <br>
                            {!! Form::select('entrenamiento_id', $entrenamientos, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection