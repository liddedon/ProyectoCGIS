<?php

namespace App\Http\Controllers;

use App\EntrenadorPersonal;
use Illuminate\Http\Request;

class EntrenadorPersonalController extends Controller
{

    /**    public function usuario_de_entrenadorPersonal_1(){
        $user = EntrenadorPersonal::find(1)->user;
        $usuario_id = EntrenadorPersonal::find(1)->user->usuario_id;
    }
    //¿Qué hacemos exactamente?
        public function validar_dieta_de_entrenadorPersonal($id)
        {
            $dietas = EntrenadorPersonal::find($id)->dietas;
            foreach ($dietas as $dieta) {
                $dieta->valido = true;
                $dieta->save();
            }
        }

        public function validar_entrenamiento_de_entrenadorPersonal($id){
            $entrenamientos= EntrenadorPersonal::find($id)->entrenamientos;
            foreach ($entrenamientos as $entrenamiento ){
                $entrenamiento->valido = true;
                $entrenamiento->save();
            }


    }*/

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
        //
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
