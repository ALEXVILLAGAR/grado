<?php

namespace App\Http\Controllers;

use App\{Mayor};
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class MayorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $user = Auth()->User()->IdEntidad();
        $mayores = Mayor::where('entidad_id', '=', $user)->get();
        return view('centro.adultos.adultos',['mayores'=>$mayores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centro.adultos.agregarAdultos');
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
        // dd($data);
        Mayor::create([
        'nombres' => $data['nombres'],
        'apellidos' => $data['apellidos'],
        'identificacion' => $data['identificacion'],
        'descripcion' => $data['descripcion'],
        'entidad_id' => Auth()->User()->IdEntidad(),
        ]);
        
        $user = Auth()->User()->IdEntidad();
        $mayores = Mayor::where('entidad_id', '=', $user)->get();
        return view('centro.adultos.adultos',['mayores'=>$mayores]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mayor  $mayor
     * @return \Illuminate\Http\Response
     */
    public function show(Mayor $mayor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mayor  $mayor
     * @return \Illuminate\Http\Response
     */
    public function edit(Mayor $mayor)
    {
        return view('centro.adultos.editarAdulto',['adulto'=>$mayor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mayor  $mayor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mayor $mayor)
    {
        $mayor->update($request->only(['nombres','apellidos','identificacion','descripcion']));
        $mayor->save();

        $user = Auth()->User()->IdEntidad();
        $mayores = Mayor::where('entidad_id', '=', $user)->get();
        return view('centro.adultos.adultos',['mayores'=>$mayores]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mayor  $mayor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mayor $mayor)
    {
        //
    }

}
