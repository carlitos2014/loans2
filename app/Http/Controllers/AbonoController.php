<?php

namespace App\Http\Controllers;

use App\Abono;
use App\Credito;
use Illuminate\Http\Request;

class AbonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonos = Abono::paginate();

        return view('abonos.index', compact('abonos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $credito = Credito::pluck('id');

        return view('abonos.create', compact('credito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abonos = Abono::create($request->all());

        return redirect()->route('abonos.index')
            ->with('info', 'Abono guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abonos = Abono::find($id);

        return view('abonos.show', compact('abonos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abonos = Abono::find($id);
        $credito = Credito::get();

        return view('abonos.edit', compact('abonos', 'credito'));
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
        $abonos = Abono::find($id);
        $abonos->update($request->all());

        return redirect()->route('abonos.index')
            ->with('info', 'Abono guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abonos = Abono::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
