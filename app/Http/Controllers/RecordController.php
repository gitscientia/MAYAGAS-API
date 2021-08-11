<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;


class RecordController extends Controller
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
