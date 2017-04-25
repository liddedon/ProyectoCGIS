@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear dieta</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($dieta, [ 'route' => ['dietas.update',$cita->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('nombreDieta', 'Nombre de la dieta') !!}
                            {!! Form::text('nombreDieta', $dieta->nombreDieta, ['class'=>'form-control', 'required', 'autofocus']) !!}


                        </div>
                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripcion de la dieta') !!}
                            {!! Form::text('descripcion', $dieta->descripcion, ['class'=>'form-control', 'required', 'autofocus']) !!}


                        </div>


                        <div class="form-group">
                            {!!Form::label('cliente_id', 'Cliente') !!}
                            <br>
                            {!! Form::select('cliente_id', $clientes, $dieta->cliente_id, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('entrenadorpersonal_id', 'Entrenadorpersonal') !!}
                            <br>
                            {!! Form::select('entrenadorpersonal_id', $entrenadorpersonals, $dieta->entrenadorpersonal_id, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection