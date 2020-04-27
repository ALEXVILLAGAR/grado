<?php

namespace App\Http\Controllers;

use App\{Route,Person};
use Illuminate\Http\Request;

class RouteController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->User()->IdEntidad();
        $rutas = Route::where('entidad_id', '=', $user)->get();
        return view('centro.routes.rutas',['rutas'=>$rutas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centro.routes.crearRuta');
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
        $data['entidad_id'] = $request->user()->entidad->id;
        Route::create($data);
        $id      = $request->user()->entidad->id;
        $user = Auth()->User()->IdEntidad();
        $rutas = Route::where('entidad_id', '=', $user)->get();
        $creado  = '1';
        return view('centro.routes.rutas',['rutas'=>$rutas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        $ruta = $route;
        return view('centro.routes.editarRuta',['ruta'=>$ruta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        // dd($route);
        $route->update($request->only(['nombre','telefono','entidad_id']));
        $route->save();
        $user = Auth()->User()->IdEntidad();
        $rutas = Route::where('entidad_id', '=', $user)->get();
        return view('centro.routes.rutas',['rutas'=>$rutas]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        $route->delete();
        $rutas = Route::all();
        return view('centro.routes.rutas',['rutas'=>$rutas]);
    }
}
