<?php

namespace App\Http\Controllers;

use App\Ejercicios;
use App\Entrenadorpersonal;
use App\Entrenamiento;
use App\Cliente;
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
        $ejercicios=Ejercicios::all();


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
            'entrenadorpersonal_id'=>'required|exists:entrenadorpersonals,id',
            'numSeries' =>'integer',
            'numRepeticiones' => 'integer',
            'duracion' => 'time',
            'observaciones' => 'max:255',

        ]);

        $array = [];
        foreach ($request->all() as $key=>$value) {
            if (starts_with($key, 'numSeries_')) {
                $separacion = explode("_", $key);
                $idEjercicio = $separacion[1];
                $nombreAtributo = $separacion[0];
                if (array_key_exists($idEjercicio, $array)) {
                   /* $nombreValor=array_combine($nombreAtributo,$value);*/
                    array_push($array,$idEjercicio);
                }

            }elseif(starts_with($key,'numRepeticiones_')){
                $separacion = explode("_", $key);
                $idEjercicio=$separacion[1];
                $nombreAtributo=$separacion[0];
                if(array_key_exists($separacion[1],$array)){
                    /* $nombreValor=array_combine($nombreAtributo,$value);*/
                    array_push($array,$idEjercicio);
                }

            }elseif(starts_with($key,'duracion_')){
                $separacion = explode("_", $key);
                $idEjercicio=$separacion[1];
                $nombreAtributo=$separacion[0];
                if(array_key_exists($separacion[1],$array)){
                    /* $nombreValor=array_combine($nombreAtributo,$value);*/
                    array_push($array,$idEjercicio);                }

            }elseif(starts_with($key,'observaciones_')) {
                $separacion = explode("_", $key);
                $idEjercicio=$separacion[1];
                $nombreAtributo=$separacion[0];
                if (array_key_exists($separacion[1],$array)) {
                    /* $nombreValor=array_combine($nombreAtributo,$value);*/
                    array_push($array,$idEjercicio);
                }
            }
        }

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
        Entrenamiento::all()->pluck();
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
        $entrenadorpersonals=Entrenadorpersonal::all()->pluck('fullname','id');
        $clientes=Cliente::all()->pluck('fullname','id');
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
            'entrenadorpersonal_id'=>'required|exists:entrenadorpersonals,id',
            'numSeries' =>'integer',
            'numRepeticiones' => 'integer',
            'duracion' => 'time',
            'observaciones' => 'max:255',
        ]);
        $entrenamiento->fill($request->all());
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
