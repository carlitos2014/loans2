<?php

namespace App\Http\Controllers;

use App\FormaPago;
use Illuminate\Http\Request;

class FormaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formapagos = FormaPago::paginate();

        return view('formapagos.index', compact('formapagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formapagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formapago = FormaPago::create($request->all());

        return redirect()->route('formapagos.index', $formapago->id)
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
        $formapagos = FormaPago::find($id);
        return view('formapagos.show', compact('formapagos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formapago = FormaPago::find($id);
        return view('formapagos.edit', compact('formapago'));
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
        $formapago = FormaPago::find($id);
        $formapago->update($request->all());

        return redirect()->route('formapagos.edit', $formapago->id)
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
        $formapagos = FormaPago::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
