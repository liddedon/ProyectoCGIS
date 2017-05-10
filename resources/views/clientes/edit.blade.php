@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar cliente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($cliente, [ 'route' => ['clientes.update',$cliente->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', $cliente->user->name, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('surname', 'Apellidos') !!}
                            {!! Form::text('surname', $cliente->user->surname, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', $cliente->user->email, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('haceDeporte', '¿Hace deporte?') !!}
                            {!! Form::select('haceDeporte', $cliente->haceDeporte, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaNacimiento', 'Fecha de nacimiento') !!}
                            {!! Form::text('fechaNacimiento', $cliente->fechaNacimiento, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('sexo', 'Sexo') !!}
                            {!! Form::select('sexo', $cliente->sexo, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('altura', 'Altura') !!}
                            {!! Form::number('altura', $cliente->altura, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('peso', 'Peso') !!}
                            {!! Form::number('peso', $cliente->peso, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('numeroDeHoras', 'Numero de horas que practica deporte al dia') !!}
                            {!! Form::number('numeroDeHoras', $cliente->altura, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('deporteCalle', '¿Practica deporte en la calle?') !!}
                            {!! Form::select('altura', $cliente->deporteCalle, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('deporteCasa', '¿Practica deporte en casa?') !!}
                            {!! Form::select('deporteCasa', $cliente->deporteCasa, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('quiereDieta', '¿Esta dispuesto a hacer dieta?') !!}
                            {!! Form::select('quiereDieta', $cliente->quiereDieta, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('observaciones', 'Observaciones') !!}
                            {!! Form::text('observaciones', $cliente->observaciones, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('problemasMusculares', '¿Tiene problemas musculares?') !!}
                            {!! Form::select('problemasMusculares', $cliente->problemasMusculares, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('problemasCardiovasculares', '¿Tiene problemas cardivasculares?') !!}
                            {!! Form::select('problemasCardiovasculares', $cliente->problemasCardiovaculares, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('hipertension', '¿Tiene problemas de hipertension?') !!}
                            {!! Form::select('hipertension', $cliente->hipertension, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('enfermedadesCronicas', '¿Tiene enfermedades cronicas?') !!}
                            {!! Form::text('enfermedadesCronicas', $cliente->enfermedadesCronicas, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('embarazada', '¿Esta embarazada?') !!}
                            {!! Form::select('embarazada', $cliente->embarazada, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('medicacion', '¿Tiene medicacion?') !!}
                            {!! Form::text('medicacion', $cliente->medicacion, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>


                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection