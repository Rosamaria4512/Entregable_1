<?php

namespace App\Http\Controllers;

use App\Models\LocalComercial;
use App\Models\TipoIdentificacionComercial;
use Illuminate\Http\Request;

class LocalComercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('LocalComercial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localComercial=LocalComercial::all();
        $tipo=TipoIdentificacionComercial::all();
        return view('LocalComercial.create', compact('localComercial','tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $localComercial= new LocalComercial;
        
        $localComercial->id_tipo_identificacion_comercial=$request->id_tipo_identificacion_comercial;
        $localComercial->razon_social=$request->razon_social;
        $localComercial->direccion_local_comercial=$request->direccion_local_comercial;
        $localComercial->telefono_fijo=$request->telefono_fijo;
        $localComercial->telefono_movil=$request->telefono_movil;
        $localComercial->identificacion_local_comercial=$request->identificacion_local_comercial;
        $localComercial->email_local_comercial=$request->email_local_comercial;
        $localComercial->pass=$request->pass;
        $localComercial->save();

        return redirect()->route('LocalComercial.create');
         
            
                

            
            
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocalComercial  $localComercial
     * @return \Illuminate\Http\Response
     */
    public function show(LocalComercial $localComercial)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocalComercial  $localComercial
     * @return \Illuminate\Http\Response
     */
    public function edit(LocalComercial $localComercial)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocalComercial  $localComercial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocalComercial $localComercial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalComercial  $localComercial
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalComercial $localComercial)
    {
        //
    }
}
