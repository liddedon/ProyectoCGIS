@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Entrenamiento</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'entrenamientos.create', 'method' => 'get', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Crear entrenamiento', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}


                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre Cliente</th>
                                <th>Nombre Entrenador</th>
                                <th colspan="2">Accion</th>
                            </tr>
                            @foreach ($entrenamientos as $entrenamiento)
                            <tr>
                                <td>{{ $entrenamiento->cliente->user->fullname }}</td>
                                <td>{{ $entrenamiento->entrenadorpersonal->user->fullname }}</td>
                                <td>
                                    {!! Form::open(['route' => ['entrenamientos.edit',$entrenamiento->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}

                                </td>
                                <td>
                                    {!! Form::open(['route' => ['entrenamientos.destroy',$entrenamiento->id], 'method' => 'delete']) !!}
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