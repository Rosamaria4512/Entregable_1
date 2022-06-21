<?php

namespace App\Http\Controllers;

use App\Models\TipoIdentificacionComercial;
use Illuminate\Http\Request;

class TipoIdentificacionComercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $tipoIdentificacionComercial=new TipoIdentificacionComercial();
        $tipoIdentificacionComercial->tipo_identificacion_comercial=$request->tipo_identificacion_comercial;
        $tipoIdentificacionComercial->save();
        return ('uk6jn5yr5hy');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoIdentificacionComercial  $tipoIdentificacionComercial
     * @return \Illuminate\Http\Response
     */
    public function show(TipoIdentificacionComercial $tipoIdentificacionComercial)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoIdentificacionComercial  $tipoIdentificacionComercial
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoIdentificacionComercial $tipoIdentificacionComercial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoIdentificacionComercial  $tipoIdentificacionComercial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoIdentificacionComercial $tipoIdentificacionComercial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoIdentificacionComercial  $tipoIdentificacionComercial
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoIdentificacionComercial $tipoIdentificacionComercial)
    {
        //
    }
}
