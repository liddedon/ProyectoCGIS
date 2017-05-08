@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Clientes</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'clientes.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear cliente', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Fecha de Nacimiento</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($clientes as $cliente)


                                <tr>
                                    <td>{{ $cliente->name }}</td>
                                    <td>{{ $cliente->surname }}</td>
                                    <td>{{ $cliente->fechaNacimiento }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['clientes.edit',$cliente->id], 'method' => 'get']) !!}
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