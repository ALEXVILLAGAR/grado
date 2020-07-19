<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\{Actividad,User,Entity};
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->User()->IdEntidad();
        $actividades = Actividad::where('entidad_id', '=', $user)->get();
        return view('centro.actividades.gestion.actividades',['actividades'=>$actividades]);
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
        $data                   = $request->all();
         $user = Auth()->User()->IdEntidad();
         Actividad::create([
        'actividad' => $data['actividad'],
        'descripcion' => $data['descripcion'],
        'entidad_id' => $user, 
        ]);

         $actividades = Actividad::where('entidad_id', '=', $user)->get();
        return view('centro.actividades.gestion.actividades',['actividades'=>$actividades]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        $Actual = $actividad;
         return view('centro.actividades.gestion.editarActividad',['actividad'=>$Actual]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        $actividad->update($request->only(['actividad','descripcion']));
        $actividad->save();

        $user = Auth()->User()->IdEntidad();
        $actividades = Actividad::where('entidad_id', '=', $user)->get();
        return view('centro.actividades.gestion.actividades',['actividades'=>$actividades]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        //
    }
}
