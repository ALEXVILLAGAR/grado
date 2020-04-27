<?php

namespace App\Http\Controllers;

use App\{Auxiliar,Auth,User,Person,Entity};
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuxiliarController extends Controller
{


    /**
     * Display a listing of the resource.  
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->User()->IdEntidad();
        $auxiliares = Auxiliar::where('entidad_id', '=', $user)->get();        
        return view('centro.auxiliares.auxiliares',['auxiliares'=>$auxiliares]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('centro.auxiliares.crearAuxiliar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data                   = $request->all();
         // dd($data);
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['identificacion']),
            'tipo' => 'persona',
            'telefono' => $data['telefono']
        ]);

        $data['user_id'] = $user->id;
             $persona = Person::create([ 
                'nombres' => $data['nombre'],
                'apellidos' => $data['apellido'],
                'identificacion' => $data['identificacion'],
                'rol' => 'auxiliar',
                'user_id' => $data['user_id']
             ]);
        $data['persona_id'] = $persona->id;
        
        Auxiliar::create([
        'persona_id' => $data['persona_id'],
        'entidad_id' => $data['entidad_id'],
        ]);
        
       $auxiliares = Auxiliar::all();
        return view('centro.auxiliares.auxiliares',['auxiliares'=>$auxiliares]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function show(Auxiliar $auxiliar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function edit(Auxiliar $auxiliar)
    {
        $Auxiliar = $auxiliar;
        return view('centro.auxiliares.editarAuxiliar',['auxiliar'=>$Auxiliar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auxiliar $auxiliar)
    {        
        $auxiliar->persona->update($request->only(['nombres','apellidos','identificacion']));
        $auxiliar->persona->save();

        $user = Auth()->User()->IdEntidad();
        $auxiliares = Auxiliar::where('entidad_id', '=', $user)->get();
        return view('centro.auxiliares.auxiliares',['auxiliares'=>$auxiliares]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auxiliar $auxiliar)
    {
        //
    }
}
