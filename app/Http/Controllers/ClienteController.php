<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use App\Mail\notifyEmail;
use Illuminate\Support\Facades\Mail;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function vista()
    {
        //
       $clientes = Cliente::all();
        return view('cliente.vista')->with('clientes', $clientes);
    }

    public function index()
    {
        //
       $clientes = Cliente::all();
        return view('cliente.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $clientes = new Cliente();

        $clientes->nombre=$request->get('nombre');
        $clientes->apellido=$request->get('apellido');
        $clientes->correo=$request->get('correo');
        $clientes->dependencia=$request->get('dependencia');
        $clientes->area=$request->get('area');
        $clientes->domicilio=$request->get('domicilio');
        $clientes->telefono=$request->get('telefono');
        $clientes->marca=$request->get('marca');
        $clientes->serie=$request->get('serie');
        $clientes->factura=$request->get('factura');
        $clientes->falla=$request->get('falla');
        $clientes->fecha_recibido=$request->get('fecha_recibido');
        $clientes->fecha_tramite=$request->get('fecha_tramite');
        $clientes->proveedor=$request->get('proveedor');
        $clientes->ticket_garantia=$request->get('ticket_garantia');
        $clientes->apli_garantia=$request->get('apli_garantia'); 
        
        $clientes->fecha_envio_proveedor=$request->get('fecha_envio_proveedor');
        $clientes->fecha_recepcion_garantia=$request->get('fecha_recepcion_garantia');
        $clientes->fecha_envio_cliente=$request->get('fecha_envio_cliente');
        $clientes->no_guia_cliente=$request->get('no_guia_cliente');
        $clientes->fecha_recibido_cliente=$request->get('fecha_recibido_cliente');
        $clientes->fecha_pruebas=$request->get('fecha_pruebas');
        $clientes->confirmacion=$request->get('confirmacion');
        $clientes->status=$request->get('status');

        $clientes->save();

        Mail::to('moycruz000@gmail.com')->send(new notifyEmail($clientes));

        return redirect('/clientes/create')->with('Mensaje','Reporte enviado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
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
        //
        $cliente = Cliente::find($id);

        $cliente->nombre=$request->get('nombre');
        $cliente->apellido=$request->get('apellido');
        $cliente->correo=$request->get('correo');
        $cliente->dependencia=$request->get('dependencia');
        $cliente->area=$request->get('area');
        $cliente->domicilio=$request->get('domicilio');
        $cliente->telefono=$request->get('telefono');
        $cliente->marca=$request->get('marca');
        $cliente->serie=$request->get('serie');
        $cliente->factura=$request->get('factura');
        $cliente->falla=$request->get('falla');
        $cliente->fecha_recibido=$request->get('fecha_recibido');
        $cliente->fecha_tramite=$request->get('fecha_tramite');
        $cliente->proveedor=$request->get('proveedor');
        $cliente->ticket_garantia=$request->get('ticket_garantia');
        $cliente->apli_garantia=$request->get('apli_garantia');
        $cliente->fecha_envio_proveedor=$request->get('fecha_envio_proveedor');
        $cliente->fecha_recepcion_garantia=$request->get('fecha_recepcion_garantia');
        $cliente->fecha_envio_cliente=$request->get('fecha_envio_cliente');
        $cliente->no_guia_cliente=$request->get('no_guia_cliente');
        $cliente->fecha_recibido_cliente=$request->get('fecha_recibido_cliente');
        $cliente->fecha_pruebas=$request->get('fecha_pruebas');
        $cliente->confirmacion=$request->get('confirmacion');
        $cliente->status=$request->get('status');



        $cliente->save();
       
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/clientes');
    }
    public function filtrar(Request $request)
    {
        $opc = $request->opc;
        $valor = $request->valor;
        $operador = '>=';
        if($opc == 'nombre')
        {
            $operador = 'like';
            $valor = $valor . '%';     
        }
        
        $clientes = DB::table('clientes')
            ->where($opc,$operador,$valor)
            ->paginate(15);
        return view('cliente.index',['clientes'=>$clientes]);

    }
}
