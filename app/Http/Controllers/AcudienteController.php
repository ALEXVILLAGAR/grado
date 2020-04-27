<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\{Acudiente, Mayor,User,Person,Entity};
use Illuminate\Http\Request; 

class AcudienteController extends Controller
{

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function mayores()
   {
        $user = Auth()->User()->IdEntidad();
        $mayores = Mayor::where('entidad_id', '=', $user)->get();
        return view('centro.acudientes.acudientes',['mayores'=>$mayores]);
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
     //   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $entidad_id = Auth()->User()->IdEntidad();
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
                'rol' => 'acudiente',
                'user_id' => $data['user_id']
             ]);
        $data['persona_id'] = $persona->id;
        
        Acudiente::create([
        'persona_id' => $data['persona_id'],
        'mayor_id' => $data['mayor_id'],
        ]);
        
       $mayores = Mayor::where('entidad_id', '=', $entidad_id)->get();
        return view('centro.acudientes.acudientes',['mayores'=>$mayores]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function show(Acudiente $acudiente)
    {
 
        $acudientes = Acudiente::where('mayor_id', '=', $acudiente)->get();
        dd($acudientes);
        // return view('centro.acudientes.listaAcudientes',['acudientes'=>$acudientes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function edit(Acudiente $acudiente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acudiente $acudiente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acudiente  $acudiente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acudiente $acudiente)
    {
        //
    }


    public function listaAcudientes(Mayor $mayor)
    {
        
         $acudientes = Acudiente::where('mayor_id', '=', $mayor)->get();
        dd($mayor);
        // return view('centro.acudientes.listaAcudientes',['acudientes'=>$acudientes]);
    
    }
}
