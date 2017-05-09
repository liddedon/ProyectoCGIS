<?php

namespace App\Http\Controllers;

use App\EntrenadorPersonal;
use Illuminate\Http\Request;

class EntrenadorpersonalController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenadorpersonals = Entrenadorpersonal::all();
        return view('entrenadorpersonals/index',['entrenadorpersonals'=>$entrenadorpersonals]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('entrenadorpersonals/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Entrenadorpersonal $entrenadorpersonals)
    {
        return view('entrenadorpersonals/show',['entrenadorpersonals'=>$entrenadorpersonals]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrenadorpersonal $entrenadorpersonals)
    {
        return view('entrenadorpersonals/edit',['entrenadorpersonals'=>$entrenadorpersonals]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrenadorpersonal $entrenadorpersonals)
    {
        $this->validate($request, [
            'especialidad' => 'required|max:255'
        ]);
        $entrenadorpersonals = fill($request->all());
        $user = $entrenadorpersonals->user;
        $entrenadorpersonals->save();
        flash('Entrenador Personal modificado correctamente');
        return redirect()->route('entrenadorpersonals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenadorpersonal $entrenadorpersonals)
    {
        $entrenadorpersonals->delete();
        flash('Entrenador personal borrado correctamente');
        return redirect()->route('entrenadorpersonals.index');
    }
}
