<?php

namespace App\Http\Controllers;

use App\Http\Requests\TextoRequest;
use App\Models\Texto;
use Illuminate\Http\Request;

class TextoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Texto::all();
        return response()->json($textos);
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
    public function store(TextoRequest $request)
    {
        $texto = new Texto;
        $texto->texto = $request->texto;
        $texto->save();
        $data = [
            'message' => 'Texto subido con exito',
            'detalles' => $texto
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function show(Texto $texto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function edit(Texto $texto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Texto $texto)
    {
        $texto->texto = $request->texto;
        $texto->save();

        $data = [
            'message' => 'Texto editado con exito',
            'detalles' => $texto
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Texto  $texto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Texto $texto)
    {
        $texto->delete();
        $data = [
            'message' => 'Texto eliminado con exito',
            'detalles' => $texto
        ];
        return response()->json($data);
    }
}
