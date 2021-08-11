<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pipe;

class PipeController extends Controller
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
     * @param  \App\Pipe  $pipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Pipe $pipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pipe  $pipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pipe $pipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pipe  $pipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pipe $pipe)
    {
        //
    }
}
