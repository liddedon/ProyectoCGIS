<?php

namespace App\Http\Controllers;

use App\Entrenamiento;
use Illuminate\Http\Request;

class EntramientoController extends Controller
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
        $entrenadorPersonals=EntrenadorPersonal::all()->pluck('nombre','id');

        $clientes=Cliente::all()->pluck('nombre','id');


        return view('entrenamientos/create',['entrenadorPersonals'=>$entrenadorPersonals,'clientes'=>$clientes]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request,[
        'nombreCliente'=>'required|exists:clientes, nombre',
        'nombreEntrenadorPersonal'=>'required|exists:entrenadorPersonals, nombre',
        'cliente_id'=>'required|exists:clientes,id',
        'entrenadorPersonal_id'=>'required|exists:entrenadorPersonals,id',
        'fecha'=>'required|max:255',
        'descripcion'=>'required|max:2000'

            ]);
        $entrenamiento= new Entrenamiento($request->all());
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
