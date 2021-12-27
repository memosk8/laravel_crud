@extends('layout.layout')

@section('title', 'Agregar Producto')

@section('content')

   @section('sectionInNav')
      <div>
         <li class="nav-link nav-item active">
            <h4 >Agregar producto</h4>
         </li>
      </div>
   @endsection

   <div class="jumbotron">
   <form action="{{ route('products.store')}}" method="POST">

      @csrf  {{-- //token de seguridad --}}

      <div class="mb-3">
         <label for="">Producto: </label>
         <input type="text"  class="form-control" name="name" id="name" required maxlength="100">
      </div>
      <div class="mb-3">
         <label for="">Descripción: </label>
         <textarea name="description"  class="form-control" id="" cols="30" rows="5"></textarea>
      </div>
      <div class="mb-3">
         <label for="">Precio: </label>
         <input type="text"  class="form-control" name="price" id="price" required maxlength="7">
      </div>
      <div class="mb-3">
         <label for="">Fecha de caducidad: </label>
         <input type="date"  class="form-control" name="expiration">
      </div>
      <div class="mb-3">
         <label for="">En stock: </label>
         <input type="number"  class="form-control" name="stock" id="" min="1" max="1000">
      </div>
      <div class="mb-3">
         <label for="">Peso en Kg: </label>
         <input type="text" class="form-control" name="weightKg" id="" required>
      </div>
      <div class="mb-3">
         <label for="">Link de imagen: </label>
         <input type="text"  class="form-control" name="imgLink" id="" >
      </div>
      <input type="submit" class="btn btn-secondary" value="Guardar Producto">
   </form>
</div>
@endsection