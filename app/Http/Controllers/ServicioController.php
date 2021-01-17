<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Http\Requests\ServicioFormRequest as RequestsServicioFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class ServicioController extends Controller
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
            $servicios=DB::table('serv')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('id_serv','desc')
            ->paginate(10);

            return view('servicio.index',['servicios'=>$servicios, 'searchText'=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsServicioFormRequest $request)
    {
        $servicio = new Servicio;
        $servicio->nombre=$request->get('nombre');
        $servicio->descripcion=$request->get('descripcion');
        $servicio->precio=$request->get('precio');
        $servicio->estado='1';
        $servicio->usuario='1';

        $servicio->save();

        return Redirect::to('servicio');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicio  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('servicio.show',['servicio'=>Servicio::findOrFail($id)]);
    }


    public function edit($id)
    {
        return view('servicio.edit',['servicio'=>Servicio::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(RequestsServicioFormRequest $request, $id)
    {
        $servicio=Servicio::findOrFail($id);
        $servicio->nombre=$request->get('nombre');
        $servicio->descripcion=$request->get('descripcion');
        $servicio->precio=$request->get('precio');
        $servicio->estado=$request->get('estado');
        $servicio->usuario='1';
        //falta fecha

        $servicio->update();

        return Redirect::to('servicio');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio=Servicio::findOrFail($id);

        if($servicio->estado == '1'){
            $servicio->estado='0';
        }else{
            $servicio->estado='1';
        }

        $servicio->update();

        return Redirect::to('servicio');
    }
}
