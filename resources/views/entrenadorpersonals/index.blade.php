@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Entrenadores</div>

                    <div class="panel-body">
                        @include('flash::message')

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Especialidad</th>
                                <th colspan="2">Accion</th>
                            </tr>
                            @foreach ($entrenadorpersonal as $entrenadorpersonal)
                            <tr>
                                <td>{{$entrenadorpersonal->user->name}}</td>
                                <td>{{$entrenadorpersonal->user->surname}}</td>
                                <td>{{$entrenadorpersonal->especialidad}}</td>

                                <td>
                                    {!! Form::open(['route' => ['entrenadorpersonals.edit',$entrenadorpersonal->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}

                                </td>
                                <td>
                                    {!! Form::open(['route' => ['entrenadorpersonals.destroy',$entrenadorpersonal->id], 'method' => 'delete']) !!}
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