@extends('layout.layout')

@section('title', 'Agregar Productos')

@section('content')

   

   <form action="{{ route('productos.store')}}" method="POST">
      <h1 class="form">Agregar producto</h1>
      @csrf

      <div>
         <label for="">Producto: </label>
         <input type="text" name="name" id="name" required maxlength="100">
      </div>
      <div>
         <label for="">Descripción: </label>
         <textarea name="description" id="" cols="30" rows="5"></textarea>
      </div>
      <div>
         <label for="">Precio: </label>
         <input type="text" name="price" id="price" required maxlength="7">
      </div>
      <div>
         <label for="">Fecha de caducidad: </label>
         <input type="date" name="expiration">
      </div>
      <div>
         <label for="">En stock: </label>
         <input type="number" name="stock" id="" min="1" max="1000">
      </div>
      <div>
         <label for="">Peso en Kg: </label>
         <input type="text" name="weightKg" id="" required>
      </div>
      <div>
         <label for="">Link de imagen: </label>
         <input type="text" name="imgLink" id="" >
      </div>
      <input type="submit" value="Guardar Producto">
   </form>

@endsection