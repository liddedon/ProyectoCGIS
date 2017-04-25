@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar entrenador personal</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($entrenadorpersonal, [ 'route' => ['entrenadorpersonals.update',$entrenadorpersonal->id], 'method'=>'PUT', 'class'=>'form-inline']) !!}
                        <div class="form-group">

                        {!! Form::label('especialidad', 'Especialidad del entrenador') !!}
                        {!! Form::text('especialidad',$entrenadorpersonal->especialidad,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection