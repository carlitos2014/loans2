<?php

namespace App\Http\Controllers;

use App\Barrio;
use App\Ciudad;
use Illuminate\Http\Request;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barrios = Barrio::paginate();

        return view('barrios.index', compact('barrios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudad = Ciudad::pluck('name', 'id');

        return view('barrios.create', compact('ciudad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barrio = Barrio::create($request->all());

        return redirect()->route('barrios.edit', $barrio->id)
            ->with('info', 'Barrio guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barrios = Barrio::find($id);

        return view('barrios.show', compact('barrios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barrio = Barrio::find($id);
        $ciudad = Ciudad::pluck('name', 'id');

        return view('barrios.edit', compact('barrio', 'ciudad'));
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
        $barrio = Barrio::find($id);
        $barrio->update($request->all());

        return redirect()->route('barrios.edit', $barrio->id)
            ->with('info', 'Barrio guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barrios = Barrio::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
