<?php
 
namespace App\Http\Controllers;

use App\{Visitas,User,Acudiente,Person};
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->User()->Idpersona();        
        $Visitas=Visitas::where('entidad_id', '=', $user)->get();
        return view('acudiente.visitas.visitas',['visitas'=>$Visitas]);
    }

    public function listaVisitas($id)
    {
        $user = Auth()->User()->Identidad();         
        $Visitas=Visitas::where('entidad_id', '=', $user)->get();
        return view('centro.visitas.visitas',['visitas'=>$Visitas]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data= $request->all();

        $user = Auth()->User()->persona(); 
         $Acudiente= Acudiente::where('persona_id','=',$data['id_persona'])->get();
        // $users = DB::table('acudientes')->select('entidad_id')->where('persona_id','=',$data['id_persona'])->get();
            $entidad_id;
            foreach ($Acudiente as $acudiente) {
                $entidad_id = $acudiente->entidad_id;
                
            }
// dd($entidad_id);
        
        Visitas::create([
            'fecha' => $data['fecha'],
            'estado' => 'en proceso',
            'descripcion' => ' ',
            'persona_id' => $data['id_persona'],
            'entidad_id' => $entidad_id,
        ]);
        $visitas= Visitas::where('persona_id','=',$data['id_persona'])->get();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function show(Visitas $visitas)
    {
       
        // $user = User::create([
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['identificacion']),
        //     'tipo' => 'persona',
        //     'telefono' => $data['telefono']
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitas $visitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitas $visitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visitas  $visitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitas $visitas)
    {
        //
    }
}
