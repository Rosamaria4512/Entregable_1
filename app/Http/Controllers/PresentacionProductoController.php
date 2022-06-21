<?php

namespace App\Http\Controllers;

use App\Models\PresentacionProducto;
use Illuminate\Http\Request;

class PresentacionProductoController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $presentacionProducto= new PresentacionProducto;

        $presentacionProducto-> id_unidad_medida =$request->id_unidad_medida;
        $presentacionProducto-> descripcion_presentacion_producto = $request->descripcion_presentacion_producto;
        $presentacionProducto-> valor = $request->valor;
        $presentacionProducto-> stock = $request->stok;
        $presentacionProducto-> estado_presentacion = $request->estado_presentacion;
        $presentacionProducto->save();

        return redirect()->route('PresentacionProducto.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PresentacionProducto  $presentacionProducto
     * @return \Illuminate\Http\Response
     */
    public function show(PresentacionProducto $presentacionProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PresentacionProducto  $presentacionProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(PresentacionProducto $presentacionProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PresentacionProducto  $presentacionProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PresentacionProducto $presentacionProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PresentacionProducto  $presentacionProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(PresentacionProducto $presentacionProducto)
    {
        //
    }
}
