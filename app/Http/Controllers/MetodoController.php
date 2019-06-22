<?php

namespace App\Http\Controllers;

use App\Metodo;
use Illuminate\Http\Request;

class MetodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodos = Metodo::paginate();

        return view('metodos.index', compact('metodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('metodos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $metodo = Metodo::create($request->all());

        return redirect()->route('metodos.index', $metodo->id)
            ->with('info', 'Forma de pago guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $metodos = Metodo::find($id);
        return view('metodos.show', compact('metodos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metodo = Metodo::find($id);
        return view('metodos.edit', compact('metodo'));
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
        $metodo = Metodo::find($id);
        $metodo->update($request->all());

        return redirect()->route('metodos.edit', $metodo->id)
            ->with('info', 'Forma de pago guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metodos = Metodo::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
