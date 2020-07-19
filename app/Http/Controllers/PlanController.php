<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\{Plan,User,Entity,Actividad};
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->User()->IdEntidad();
        $planes = Plan::where('entidad_id', '=', $user)->get();
        $actividades = Actividad::where('entidad_id', '=', $user)->get();
        return view('centro.actividades.plan.planes',['planes'=>$planes],['actividades'=>$actividades]);
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
         $data = $request->all();
        // dd($data['actividad']);
         $user = Auth()->User()->IdEntidad();
        
         Plan::create([
          'responsable' => '',
          'fecha' => $data['fecha'],
          'descripcion' => $data['descripcion'],
          'publico' => 'no',
          'actividad_id' => $data['actividad'],
          'entidad_id' => $user
         ]);

        $user = Auth()->User()->IdEntidad();
        $planes = Plan::where('entidad_id', '=', $user)->get();
        $actividades = Actividad::where('entidad_id', '=', $user)->get();
        return back();
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
