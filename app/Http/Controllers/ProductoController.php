<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the products table on DB 
     * paginating by 3
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $productos = DB::table('productos')->paginate(3);
        $count = DB::table('productos')->count();
        return view("productos.index", compact('productos', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Responses
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto){
        $request->validate(
            [
                'name' => 'required',
                'description',
                'price' => 'required',
                'expiration' => 'required',
                'stock' => 'required',
                'weightKg' => 'required',
                'imgLink' => ''
            ]
        );

        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->destroy($producto->id);
        return redirect()->route('productos.index');
    }
}
