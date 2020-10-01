<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests;


class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $productos = Producto::orderBy('id', 'desc')->paginate(4);

        $data['productos'] = $productos;
        $data['Main'] = 'ProductosFormulario';
        $data['Detalle'] = 'Mostrar';
		return view('Template',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'Nombre' => 'required',
            'Edad' => 'required|integer',
            'Fecha' => 'required',
        ],[
            'Nombre.required' => 'El Nombre es requerido',
            'Edad.required' => 'El Edad es requerido',
            'Fecha.required' => 'El Fecha es requerido',
        ]);


        $producto = new Producto;

        # Establecer propiedades leídas del formulario
        $producto->nombre = $request->Nombre;
        $producto->edad =$request->Edad;
        $producto->fecha =  $request->Fecha;

        $producto::insert(request()->except('_token'));

        $productos = Producto::orderBy('id', 'desc')->paginate(4);
        $data['productos'] = $productos;
        $data['Main'] = 'ProductosFormulario';
        $data['Detalle'] = 'Mostrar';
		return view('Template',$data);

    }

    public function show_all(Request $request){

        $productos = Producto::paginate(5);
        return view('Mostrar', ['productos' => $productos]);
        //return response()->json($productos);

       /*
        Muestra todos los productos

        $producto = new Producto;
        $productos = $producto::get();
        return response()->json($productos); */

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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $Producto=Producto::findOrFail($id);
        $Producto->delete();
        return  redirect('prueba_laravel/productos');
    }
}
