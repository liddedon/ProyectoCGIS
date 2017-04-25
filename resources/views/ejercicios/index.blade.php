@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ejercicios</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'ejercicios.create', 'method' => 'get', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Crear ejercicio', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}


                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th colspan="2">Especialidad</th>
                            </tr>
                            @foreach ($ejercicios as $ejercicio)
                            <tr>
                                <td>{{ $ejercicio->nombreejercicio }}</td>
                                <td>
                                    {!! Form::open(['route' => ['ejercicios.edit',$ejercicio->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}

                                </td>
                                <td>
                                    {!! Form::open(['route' => ['ejercicios.destroy',$ejercicio->id], 'method' => 'delete']) !!}
                                    {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger','onclick'=> 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                    {!! Form::close() !!}

                                </td>

                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection