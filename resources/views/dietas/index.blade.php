@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dietas</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'dietas.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear dieta', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Cliente</th>
                                <th>Entrenador personal</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($dietas as $dieta)


                                <tr>
                                    <td>{{ $dieta->nombreDieta }}</td>
                                    <td>{{ $dieta->descripcion }}</td>
                                    <td>{{ $dieta->cliente->name }}</td>
                                    <td>{{ $dieta->entrenadorpersonal->name}}</td>
                                    <td>
                                        {!! Form::open(['route' => ['dietas.edit',$dieta->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
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