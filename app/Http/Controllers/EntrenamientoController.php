<?php

namespace App\Http\Controllers;

use App\Ejercicios;
use App\Entrenadorpersonal;
use App\Entrenamiento;
use Illuminate\Http\Request;

class EntrenamientoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenamientos = Entrenamiento::all();
        return view('entrenamientos/index',['entrenamientos'=>$entrenamientos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrenadorpersonals=Entrenadorpersonal::all()->pluck('name','id');
        $clientes=Cliente::all()->pluck('name','id');
        $ejercicios=Ejercicios::all()->pluck('id');


        return view('entrenamientos/create',['entrenadorpersonals'=>$entrenadorpersonals,'clientes'=>$clientes,
                                                'ejercicios'=>$ejercicios]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fechaInicio'=>'required|date|after:now',
            'fechaFin' =>'required|date|after:now',
            'descripcion'=>'required|max:255',
            'cliente_id'=>'required|exists:clientes,id',
            'entrenadorpersonal_id'=>'required|exists:entrenadorpersonals,id'
        ]);
        $entrenamiento = new Entrenamiento($request->all());
        $entrenamiento->save();
        flash('Entrenamiento creado correctamente');
        return redirect()->route('entrenamientos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Entrenamiento $entrenamiento)
    {
        return view('entrenamientos/show',['entrenamiento'=>$entrenamiento]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrenamiento $entrenamiento)
    {
        $entrenadorpersonals=Entrenadorpersonal::all()->pluck('name','id');
        $clientes=Cliente::all()->pluck('name','id');
        $ejercicios=Ejercicios::all()->pluck('id');


        return view('entrenamientos/edit',['entrenamiento'=>$entrenamiento,'entrenadorpersonals'=>$entrenadorpersonals,'clientes'=>$clientes,
            'ejercicios'=>$ejercicios]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Entrenamiento $entrenamiento)
    {
        $this->validate($request,[
            'fechaInicio'=>'required|date|after:now',
            'fechaFin' =>'required|date|after:now',
            'descripcion'=>'required|max:255',
            'cliente_id'=>'required|exists:clientes,id',
            'entrenadorpersonal_id'=>'required|exists:entrenadorpersonals,id'
        ]);
        $entrenamiento = fill($request->all());
        $entrenamiento->save();
        flash('Entrenamiento modificado correctamente');
        return redirect()->route('entrenamientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenamiento $entrenamiento)
    {
        $entrenamiento->delete();
        flash('Entrenamiento borrado correctamente');
        return redirect()->route('entrenamientos.index');
    }
}
