<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\ClienteFormRequest as RequestsClienteFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;


class ClienteController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request)
        {
            $query=trim($request->get('searchText'));
            $clientes=DB::table('cliente')
            ->where('nombre_cliente','LIKE','%'.$query.'%')
            ->where('estado','=','1')
            ->orderBy('id_cliente','desc')
            ->paginate(10);

            return view('cliente.index',['clientes'=>$clientes, 'searchText'=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsClienteFormRequest $request)
    {
        $cliente = new Cliente;
        $cliente->nombre_cliente=$request->get('nombre_cliente');
        $cliente->apellido_cliente=$request->get('apellido_cliente');
        $cliente->dpi=$request->get('dpi');
        $cliente->nit=$request->get('nit');
        $cliente->telefono=$request->get('telefono');
        $cliente->propiedad=$request->get('propiedad');
        $cliente->estado='1';
        //falta fecha

        $cliente->save();

        return Redirect::to('cliente_index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cliente.show',['cliente'=>Cliente::findOrFail($id)]);
    }


    public function edit($id)
    {
        return view('cliente.edit',['cliente'=>Cliente::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(RequestsClienteFormRequest $request, $cliente)
    {
        $cliente=Cliente::findOrFail($cliente);
        $cliente->nombre_cliente=$request->get('nombre_cliente');
        $cliente->apellido_cliente=$request->get('apellido_cliente');
        $cliente->dpi=$request->get('dpi');
        $cliente->nit=$request->get('nit');
        $cliente->telefono=$request->get('telefono');
        $cliente->propiedad=$request->get('propiedad');
        $cliente->estado='1';
        //falta fecha

        $cliente->update();

        return Redirect::to('cliente_index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($cliente)
    {
        $cliente=Cliente::findOrFail($cliente);
        $cliente->estado='0';

        $cliente->update();

        return Redirect::to('cliente_index');
    }
}
