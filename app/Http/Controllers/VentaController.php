<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $ventas = DB::table('ventas')->paginate(5); // esta función genera la paginación de 3 productos por vista
      $count = DB::table('ventas')->count(); // esta cuenta cuantos productos hay en la bd
      $productos = DB::table('productos');
      return view("ventas.index", compact('ventas', 'count', 'productos')); // se devuelve la vista productos/index.blade.php con con un arr de variables
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      //
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      venta::create($request->all());
      return redirect()->route('ventas.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\ventas  $ventas
    * @return \Illuminate\Http\Response
    */
   public function show(venta $ventas)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\ventas  $ventas
    * @return \Illuminate\Http\Response
    */
   public function edit(Venta $ventas)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\ventas  $ventas
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, venta $ventas)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\ventas  $ventas
    * @return \Illuminate\Http\Response
    */
   public function destroy(venta $ventas)
   {
      //
   }
}
