<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
   /** public function usuario_de_cliente_1(){
        $User = Cliente::find(1)->user;
        $usuario_id = Cliente::find(1)->user->usuario_id;
    }

    public function dieta_de_cliente_1(){
        $dieta = Cliente::find(1)->dieta;
        $usuario_id = Cliente::find(1)->dieta->usuario_id;
    }

    public function validar_entrenamiento_de_Cliente($id){
        $entrenamientos = Cliente::find($id)->entrenamientos;
        foreach ($entrenamientos as $entrenamiento) {
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
        $clientes = Cliente::all();
        return view('clientes/index',['clientes'=>$clientes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrenamientos= Entrenamiento :: all()->pluck('id');

        return view('clientes/create',['entrenamientos'=>$entrenamientos]);

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
