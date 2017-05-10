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
                        <select class="form-control" name="haceDeporte">
                            <option value = "0">No</option>
                            <option {{$cliente->haceDeporte ? 'selected' : ''}} value = "1">Si</option>
                        </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaNacimiento', 'Fecha de nacimiento') !!}
                            {!! Form::date('fechaNacimiento', $cliente->fechaNacimiento, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('sexo', 'Sexo') !!}
                            <select class="form-control" name="sexo">
                                <option value = "0">Hombre</option>
                                <option {{$cliente->Sexo ? 'selected' : ''}} value = "1">Mujer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('altura', 'Altura (cm)') !!}
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
                            <select class="form-control" name="deporteCalle">
                                <option value = "0">No</option>
                                <option {{$cliente->deporteCalle ? 'selected' : ''}} value = "1">Si</option>
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('deporteCasa', '¿Practica deporte en casa?') !!}
                            <select class="form-control" name="deporteCasa">
                                <option value = "0">No</option>
                                <option {{$cliente->Sexo ? 'selected' : ''}} value = "1">Si</option>
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('quiereDieta', '¿Esta dispuesto a hacer dieta?') !!}
                            <select class="form-control" name="quiereDieta">
                                <option value = "0">No</option>
                                <option {{$cliente->quiereDieta ? 'selected' : ''}} value = "1">Si</option>
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('observaciones', 'Observaciones') !!}
                            {!! Form::text('observaciones', $cliente->observaciones, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('problemasMusculares', '¿Tiene problemas musculares?') !!}
                            <select class="form-control" name="problemasMusculares">
                                <option value = "0">No</option>
                                <option {{$cliente->problemasMusculares ? 'selected' : ''}} value = "1">Si</option>
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('problemasCardiovasculares', '¿Tiene problemas cardivasculares?') !!}
                            <select class="form-control" name="problemasCardiovasculares">
                                <option value = "0">No</option>
                                <option {{$cliente->problemasCardiovasculares ? 'selected' : ''}} value = "1">Si</option>
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('hipertension', '¿Tiene problemas de hipertension?') !!}
                            <select class="form-control" name="hipertension">
                                <option value = "0">No</option>
                                <option {{$cliente->hipertension ? 'selected' : ''}} value = "1">Si</option>
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('enfermedadesCronicas', '¿Tiene enfermedades cronicas?') !!}
                            {!! Form::text('enfermedadesCronicas', $cliente->enfermedadesCronicas, ['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('embarazada', '¿Esta embarazada?') !!}
                            <select class="form-control" name="embarazada">
                                <option value = "0">No</option>
                                <option {{$cliente->embarazada ? 'selected' : ''}} value = "1">Si</option>
                            </select>
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