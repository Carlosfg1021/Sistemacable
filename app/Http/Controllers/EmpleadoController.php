<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Http\Requests\EmpleadoFormRequest as RequestsEmpleadoFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class EmpleadoController extends Controller
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
            $empleados=DB::table('usuario')
            ->where('nombre_empleado','LIKE','%'.$query.'%')
            ->where('estado','=','1')
            ->orderBy('id_usuario','desc')
            ->paginate(10);

            return view('empleado.index',['empleados'=>$empleados, 'searchText'=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(RequestsEmpleadoFormRequest $request)
    {
        $empleado = new Empleado;
        $empleado->nombre_empleado=$request->get('nombre_empleado');
        $empleado->apellido_empleado=$request->get('apellido_empleado');
        $empleado->dpi=$request->get('dpi');
        $empleado->telefono=$request->get('telefono');
        $empleado->direccion=$request->get('direccion');
        $empleado->usuario=$request->get('usuario');
        $empleado->contrasena=$request->get('contrasena');
        $empleado->estado='1';
        //falta fecha

        $empleado->save();

        return Redirect::to('empleado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('empleado.show',['empleado'=>Empleado::findOrFail($id)]);
    }


    public function edit($id)
    {
        return view('empleado.edit',['empleado'=>Empleado::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $cliente
     * @return \Illuminate\Http\Response
     */

    public function update(RequestsEmpleadoFormRequest $request, $id)
    {
        $empleado=Empleado::findOrFail($id);
        $empleado->nombre_empleado=$request->get('nombre_empleado');
        $empleado->apellido_empleado=$request->get('apellido_empleado');
        $empleado->dpi=$request->get('dpi');
        $empleado->telefono=$request->get('telefono');
        $empleado->direccion=$request->get('direccion');
        $empleado->estado='1';
        //falta fecha

        $empleado->update();

        return Redirect::to('empleado_index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($empleado)
    {
        $empleado=Empleado::findOrFail($empleado);
        $empleado->estado='0';

        $empleado->update();

        return Redirect::to('empleado_index');
    }


}
