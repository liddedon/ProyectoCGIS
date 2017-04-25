@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear entrenador personal</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'entrenadorpersonals.store', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del entrenador personal') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('surname', 'Apellido del entrenador personal') !!}
                            {!! Form::text('surname',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email del entrenador personal') !!}
                            {!! Form::text('email',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('especialidad', 'Especialidad del entrenador personal') !!}
                            {!! Form::text('especialidad',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection