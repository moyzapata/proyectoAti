<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Facades\DB;
use App\Mail\notifyEmailSer;
use Illuminate\Support\Facades\Mail;

class ServicioController extends Controller
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
    
    public function index()
    {

        $servicios = Servicio::all();
        return view('servicio.index')->with('servicios', $servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('servicio.create');
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
        $servicios = new Servicio();

        $servicios->nombre=$request->get('nombre');
        $servicios->apellido=$request->get('apellido');
        $servicios->correo=$request->get('correo');
        $servicios->dependencia=$request->get('dependencia');
        $servicios->area=$request->get('area');
        $servicios->domicilio=$request->get('domicilio');
        $servicios->telefono=$request->get('telefono');
        $servicios->marca=$request->get('marca');
        $servicios->serie=$request->get('serie');
        $servicios->factura=$request->get('factura');
        $servicios->falla=$request->get('falla');
        $servicios->componentes=$request->get('componentes');
        $servicios->acciones=$request->get('acciones');
        $servicios->resultado=$request->get('resultado');
        $servicios->evidencias=$request->get('evidencias');
        $servicios->status=$request->get('status');
        $servicios->save();

        Mail::to('moycruz000@gmail.com')->send(new notifyEmailSer($servicios));

        return redirect('/servicios/create')->with('Mensaje','Reporte enviado correctamente');
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
        $servicio = Servicio::find($id);
        return view('servicio.edit')->with('servicio',$servicio);
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
        $servicio = Servicio::find($id);
        
        $servicio->nombre=$request->get('nombre');
        $servicio->apellido=$request->get('apellido');
        $servicio->correo=$request->get('correo');
        $servicio->dependencia=$request->get('dependencia');
        $servicio->area=$request->get('area');
        $servicio->domicilio=$request->get('domicilio');
        $servicio->telefono=$request->get('telefono');
        
        $servicio->marca=$request->get('marca');
        $servicio->serie=$request->get('serie');
        $servicio->factura=$request->get('factura');
        $servicio->falla=$request->get('falla');
        $servicio->componentes=$request->get('componentes');
        $servicio->acciones=$request->get('acciones');
        $servicio->resultado=$request->get('resultado');
        $servicio->evidencias=$request->get('evidencias');
        $servicio->status=$request->get('status');
        $servicio->save();
       
        return redirect('/servicios');
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
        $servicio = Servicio::find($id);
        $servicio->delete();

        return redirect('/servicios');
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
        
        $servicios = DB::table('servicios')
            ->where($opc,$operador,$valor)
            ->paginate(15);
        return view('servicio.index',['servicios'=>$servicios]);

    }
}

