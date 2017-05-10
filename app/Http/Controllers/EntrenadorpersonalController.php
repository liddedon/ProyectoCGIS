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
        $entrenadorpersonal = Entrenadorpersonal::all();
        return view('entrenadorpersonals/index',['entrenadorpersonals'=>$entrenadorpersonal]);

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
    public function show(Entrenadorpersonal $entrenadorpersonal)
    {
        return view('entrenadorpersonals/show',['entrenadorpersonals'=>$entrenadorpersonal]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrenadorpersonal $entrenadorpersonal)
    {
        return view('entrenadorpersonals/edit',['entrenadorpersonals'=>$entrenadorpersonal]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrenadorpersonal $entrenadorpersonal)
    {
        $this->validate($request, [
            'especialidad' => 'required|max:255'
        ]);
        $entrenadorpersonal = fill($request->all());
        $user = $entrenadorpersonal->user;
        $entrenadorpersonal->save();
        flash('Entrenador Personal modificado correctamente');
        return redirect()->route('entrenadorpersonals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenadorpersonal $entrenadorpersonal)
    {
        $entrenadorpersonal->delete();
        flash('Entrenador personal borrado correctamente');
        return redirect()->route('entrenadorpersonals.index');
    }
}
