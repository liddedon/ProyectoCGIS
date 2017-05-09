@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar entrenamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($entrenamiento, [ 'route' => ['entrenamientos.update',$entrenamiento->id], 'method'=>'PUT', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                            {!! Form::label('fechaInicio', 'Fecha de inicio del entrenamiento') !!}
                            {!! Form::text('fechaInicio',$entrenamiento->fechaInicio,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaFin', 'Fecha de fin del entrenamiento') !!}
                            {!! Form::text('fechaFin',$entrenamiento->fechaFin,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripcion') !!}
                            {!! Form::text('descripcion',$entrenamiento->descripcion,['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!!Form::label('cliente_id', 'Cliente') !!}
                            <br>
                            {!! Form::select('cliente_id', $clientes, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('entrenadorpersonal_id', 'Entrenadorpersonal') !!}
                            <br>
                            {!! Form::select('entrenadorpersonal_id', $entrenadorpersonals, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection