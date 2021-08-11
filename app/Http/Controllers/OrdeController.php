<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orde;

class OrdeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Nombre' => 'Conductor 1',
            'Unidad' => '#1',
            'Zona' => 'Zona #1'
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'nombre' => $request->name,
            'unidad' => $request->unidad,
            'zona' => $request->zona
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orde  $orde
     * @return \Illuminate\Http\Response
     */
    public function edit(Orde $orde)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orde  $orde
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orde $orde)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orde  $orde
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orde $orde)
    {
        //
    }
}
