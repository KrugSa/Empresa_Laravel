<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Cliente;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Client;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $datos['contratos']=Contrato::paginate(12);//Paginación donde se ve los datos de hasta 5 registros
        return view('contrato.index',$datos,compact('clientes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('contrato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function display(){
        $clientes= Cliente::all();
        return view('addcontrato',compact('clientes'));
    }

    public function guardar(Request $request){


        $id_Cliente = $request-> get('id_Cliente');
        $nombre_contrato=$request->get('Nombre_Contrato');
        $monto=$request->get('Monto');      
        $campos=[
            'id_Cliente'=> $id_Cliente,
            'Nombre_Contrato'=> $nombre_contrato,
            'Monto'=> $monto,
        ];
        Contrato::insert($campos);
        return redirect('contrato');

    }

    public function reporte(){

        $clientes=Cliente::all();  
        return view('/reporte',compact('clientes'));
}

    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrato $contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
        //
    }
}
