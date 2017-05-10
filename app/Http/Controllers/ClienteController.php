<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Dieta;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
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
        return view('clientes/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|max:255',
            'fechaNacimiento' => 'nullable|date|after:now',
            'sexo' => 'nullable|max:255',
            'altura' =>'nullable|numeric',
            'peso' =>'nullable|numeric',
            'haceDeporte' => 'required|boolean',
            'numeroDeHoras' => 'nullable|integer',
            'deporteCalle' => 'nullable|boolean',
            'deporteCasa' => 'nullable|boolean',
            'quiereDieta' => 'nullable|boolean',
            'observaciones' => 'nullable|max:255',
            'problemasMusculares' => 'nullable|boolean',
            'problemasCardiovasculares' => 'nullable|boolean',
            'hipertension' => 'nullable|boolean',
            'enfermedadesCronicas' => 'nullable|max:255',
            'embarazada' => 'nullable|boolean',
            'medicacion' => 'nullable|max:255'

        ]);
        $cliente = new Cliente($request->all());
        $cliente->save();
        flash('Cliente creado correctamente');
        return redirect()->route('clientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes/show',['cliente'=>$cliente]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes/edit',['cliente'=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $this->validate($request, [
            'fechaNacimiento' => 'required|date|before:now',
            'sexo' => 'required|max:255',
            'altura' =>'required|numeric',
            'peso' =>'required|numeric',
            'haceDeporte' => 'required|boolean',
            'numeroDeHoras' => 'required|integer',
            'deporteCalle' => 'required|boolean',
            'deporteCasa' => 'required|boolean',
            'quiereDieta' => 'required|boolean',
            'observaciones' => 'required|max:255',
            'problemasMusculares' => 'required|boolean',
            'problemasCardiovasculares' => 'required:boolean',
            'hipertension' => 'required|boolean',
            'enfermedadesCronicas' => 'required|max:255',
            'embarazada' => 'required|boolean',
            'medicacion' => 'required|max:255'

        ]);
        $cliente->fill($request->all());
        $cliente->save();
        flash('Cliente modificado correctamente');
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        flash('Cliente borrado correctamente');
        return redirect()->route('clientes.index');
    }
}
