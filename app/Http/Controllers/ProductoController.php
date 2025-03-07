<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Productos= Producto::all();

        if($Productos->isEmpty()) {
            //return 'No Se Encontraron Resultados';
            return view('SinResultados');
        }else{
            return view('Index')->with('Productos', $Productos);
            //return $Productos;
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Producto= new Producto();
        $Producto->nombre = $request->nombre;
        $Producto->precio = $request->precio;
        $Producto->descripcion = $request->descripcion;
        $Producto->categoría = $request->categoría;
        $Producto->imagen = $request->imagen;

        $Producto->save();

        return redirect('api/productos');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Producto= Producto::find($id);
        return view('Edit')->with('Producto', $Producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Producto= Producto::findOrFail($request->id);
        $Producto->nombre = $request->nombre;
        $Producto->precio = $request->precio;
        $Producto->descripcion = $request->descripcion;
        $Producto->categoría = $request->categoria;
        $Producto->imagen = $request->imagen;

        $Producto->save();
        //return $Producto;
        return redirect('api/productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $Producto= Producto::destroy($request->id);
        return redirect('api/productos');
        
    }

}
