<?php

namespace App\Http\Controllers;

use App\Ejercicios;
use App\Entrenamiento;
use Illuminate\Http\Request;

class EjerciciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ejercicios = Ejercicios::all();
        return view('ejercicios/index',['ejercicios'=>$ejercicios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrenamientos=Entrenamiento::all()->pluck('id');

        return view('ejercicios/create',['entrenamientos'=>$entrenamientos]);
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
            'nombreEjercicio'=>'required|max:255',
            'foto'=>'required|max:255',
            'video'=>'required|max:255',
            'descripcion'=>'required|max:255',
            'zona'=>'required|max:255',
            'entrenamiento_id'=>'required|exists:entrenamientos,id'
        ]);

        $ejercicio = new Ejercicios($request->all());
        $ejercicio->save();
        flash('Ejercicio creado correctamente');
        return redirect()->route('ejercicios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ejercicios $ejercicio)
    {
        return view('ejercicios/show',['ejercicio'=>$ejercicio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ejercicios $ejercicio)
    {
        $entrenamientos=Entrenamiento::all()->pluck('id');

        return view('ejercicios/edit',['ejercicio'=>$ejercicio,'entrenamientos'=>$entrenamientos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Ejercicios $ejercicio)
    {
        $this->validate($request,[
            'nombreEjercicio'=>'required|max:255',
            'foto'=>'required|max:255',
            'video'=>'required|max:255',
            'descripcion'=>'required|max:255',
            'zona'=>'required|max:255',
            'entrenamiento_id'=>'required|exists:entrenamientos,id'
        ]);

        $ejercicio = fill($request->all());
        $ejercicio->save();
        flash('Ejercicio modificado correctamente');
        return redirect()->route('ejercicios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ejercicios $ejercicio)
    {
        $ejercicio->delete();
        flash('Ejercicio borrado correctamente');
        return redirect()->route('ejercicios.index');
    }
}
