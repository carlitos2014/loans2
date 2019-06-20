<?php

namespace App\Http\Controllers;

use App\Credito;
use App\Cliente;
use App\Plazo;
use App\FormaPago;
use App\Tasa;
use PDF;
use Illuminate\Http\Request;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;

class CreditoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditos = Credito::paginate();

        return view('creditos.index', compact('creditos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = Cliente::pluck('name', 'id');
        $plazo = Plazo::pluck('name', 'id');
        $formapago = FormaPago::pluck('name', 'id');
        $tasa = Tasa::pluck('name', 'id');

        return view('creditos.create', compact('cliente', 'plazo', 'formapago', 'tasa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credito = Credito::create($request->all());

        return redirect()->route('creditos.index')
            ->with('info', 'Credito guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $credito = Credito::find($id);
        return view('creditos.show', compact('credito'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pagare($id)
    {
        $credito = Credito::find($id);
        $pdf = PDF::loadView('creditos.pagare', ['credito' => $credito]);  
        return $pdf->stream('pagare.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function voucher($id)
    {
        $credito = Credito::find($id);
        $connector = new FilePrintConnector("php://stdout");
        $printer = new Printer($connector);
        $printer -> text('creditos.voucher', ['credito' => $credito]);
        $printer -> cut();
        $printer -> close();
        return back()->with('info', 'Eliminado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $credito = Credito::find($id);
        $cliente = Cliente::pluck('name', 'id');
        $plazo = Plazo::pluck('name', 'id');
        $formapago = FormaPago::pluck('name', 'id');
        $tasa = Tasa::pluck('name', 'id');

        return view('creditos.edit', compact('credito', 'cliente', 'plazo', 'formapago', 'tasa'));
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
        $credito = Credito::find($id);
        $credito->update($request->all());

        return redirect()->route('creditos.index')
            ->with('info', 'Credito guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $creditos = Credito::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
