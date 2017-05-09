<?php

namespace App\Http\Controllers;

use App\Dieta;
use Illuminate\Http\Request;

class DietaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dietas = Dieta::all();
        return view('dietas/index',['dietas'=>$dietas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrenadorpersonals=Entrenadorpersonal::all()->pluck('id');
        $clientes=Cliente::all()->pluck('id');

        return view('dietas/create',['entrenadorpersonals'=>$entrenadorpersonals,'clientes'=>$clientes]);

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
            'nombreDieta'=>'required|max:255',
            'descripcion'=>'required|max:255',
            'cliente_id'=>'required|exists:clientes,id',
            'entrenadorpersonal_id'=>'required|exists:entrenadorpersonals,id'
        ]);

        $dieta = new Dieta($request->all());
        $dieta->save();
        flash('Dieta creada correctamente');
        return redirect()->route('dietas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dieta $dieta)
    {
        return view('dietas/show',['dieta'=>$dieta]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dieta $dieta)
    {
        $entrenadorpersonals=Entrenadorpersonal::all()->pluck('name','id');
        $clientes=Cliente::all()->pluck('name','id');

        return view('dietas/edit',['dieta'=>$dieta,'entrenadorpersonals'=>$entrenadorpersonals,'clientes'=>$clientes]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dieta $dieta)
    {
        $this->validate($request,[
            'nombreDieta'=>'required|max:255',
            'descripcion'=>'required|max:255',
            'cliente_id'=>'required|exists:clientes,id',
            'entrenadorpersonal_id'=>'required|exists:entrenadorpersonals,id'
        ]);

        $dieta = fill($request->all());
        $dieta->save();
        flash('Dieta modificada correctamente');
        return redirect()->route('dietas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dieta $dieta)
    {
        $dieta->delete();
        flash('Dieta borrado correctamente');
        return redirect()->route('dietas.index');
    }
}
