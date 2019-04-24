<?php

namespace App\Http\Controllers;

use App\Plazo;
use Illuminate\Http\Request;

class PlazoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plazos = Plazo::paginate();

        return view('plazos.index', compact('plazos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plazos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plazo = Plazo::create($request->all());

        return redirect()->route('plazos.index', $plazo->id)
            ->with('info', 'Plazo guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plazos = Plazo::find($id);
        return view('plazos.show', compact('plazos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plazo = Plazo::find($id);
        return view('plazos.edit', compact('plazo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plazo = Plazo::find($id);
        $plazo->update($request->all());

        return redirect()->route('plazos.edit', $plazo->id)
            ->with('info', 'Plazo guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plazos = Plazo::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
