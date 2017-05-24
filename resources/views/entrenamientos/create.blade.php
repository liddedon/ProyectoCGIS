@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => 'entrenamientos.store', 'class'=>'form-inline']) !!}

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear entrenamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        <div class="form-class">
                            {!! Form::label('fechaInicio', 'Fecha de inicio del entrenamiento') !!}
                            {!! Form::text('fechaInicio',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-class">
                            {!! Form::label('fechaFin', 'Fecha de fin del entrenamiento') !!}
                            {!! Form::text('fechaFin',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-class">
                            {!! Form::label('descripcion', 'Descripcion') !!}
                            {!! Form::text('descripcion',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-class">
                            {!!Form::label('cliente_id', 'Cliente') !!}
                            {!! Form::select('cliente_id', $clientes, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-class">
                            {!!Form::label('entrenadorpersonal_id', 'Entrenadorpersonal') !!}
                            {!! Form::select('entrenadorpersonal_id', $entrenadorpersonals, ['class' => 'form-control']) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ejercicios del entrenamiento</div>
                        <div class="panel-body">


                        @foreach ($ejercicios as $ejercicio)
                                <div class="col">
                            <tr>
                                <td>{{$ejercicio->nombreejercicio}}
                                    <select class="form-class" name=" nombreejercicio">
                                        <option value = "1">No</option>
                                        <option value = "0">Si</option>
                                    </select>
                                </td>
                            </tr>
                                </div>


                                <div class="form-class">
                                    {!! Form::label('numSeries', 'Numero de series') !!}
                                    {!! Form::number('numSeries_' . $ejercicio->id,null,['class'=>'form-class', 'autofocus']) !!}
                                </div>

                                <div class="form-class">
                                    {!! Form::label('numRepeticiones', 'Numero de repeticiones') !!}
                                    {!! Form::number('numRepeticiones_' . $ejercicio->id,null,['class'=>'form-class', 'autofocus']) !!}
                                </div>

                                <div class="form-class">
                                    {!! Form::label('duracion', 'Duracion del ejercicio') !!}
                                    {!! Form::time('duracion_' . $ejercicio->id,null,['class'=>'form-class', 'autofocus']) !!}
                                </div>

                                <div class="form-class">
                                    {!! Form::label('observaciones', 'Observaciones') !!}
                                    {!! Form::text('observaciones_' . $ejercicio->id,null,['class'=>'form-class', 'autofocus']) !!}
                                </div>


                        @endforeach
{{--
                            {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::submit('Guardar',['group'=>'btn-primary btn']) !!}

    {!! Form::close() !!}
@endsection