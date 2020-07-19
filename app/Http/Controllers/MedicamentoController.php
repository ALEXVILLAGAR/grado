<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\{Medicamento,User,Entity};  
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->User()->IdEntidad();
    $medicamentos = Medicamento::where('entidad_id','=', $user)->get();

        return view('centro.medicamentos.medicamentos',['medicamentos'=>$medicamentos]);
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
        // dd($data);
        Medicamento::create([
        'nombre' => $data['nombre'],
        'descripcion' => $data['descripcion'],
        'cantidad' => $data['cantidad'],
        'entidad_id' => Auth()->User()->IdEntidad(),
        ]);
        $user = Auth()->User()->IdEntidad();
        $medicamentos = Medicamento::where('entidad_id', '=', $user)->get();
        return view('centro.medicamentos.medicamentos',['medicamentos'=>$medicamentos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamento $medicamento)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamento $medicamento)
    {
        $medicamento = $medicamento;
        return view('centro.medicamentos.editarMedicamento',['medicamento'=>$medicamento]);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamento $medicamento)
    {
         $medicamento->update($request->only(['nombre','descripcion','cantidad']));
        $medicamento->save();

        $user = Auth()->User()->IdEntidad();
        $medicamentos = Medicamento::where('entidad_id', '=', $user)->get();
        return view('centro.medicamentos.medicamentos',['medicamentos'=>$medicamentos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
        //
    }
}
