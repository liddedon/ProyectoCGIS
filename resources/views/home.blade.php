@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    ¡Bienvenido a WebTrainer!

                    <div class="top-right links">
                        @if (Auth::check())

                        @else
                            <a href="{{ url('/entrenamientos/create') }}">Crea un entrenamiento</a>
                            <a href="{{ url('/dietas/create') }}">Crea una dieta</a>
                            <a href="{{ url('/ejercicios/create') }}">Crea un ejercicio</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
