@extends('layout.layout')

@section('title', 'Editar Producto')

@section('content')

   @section('sectionInNav')
      <div>
         <li class="nav-link nav-item active">
            <h4 >Editar producto</h4>
         </li>
      </div>
   @endsection

   <div class="jumbotron">
   <form action="{{ route('productos.update', $producto->id)}}" method="POST">

      @csrf  {{-- //token de seguridad --}}
      @method('PUT')

      <div class="mb-3">
         <label for="">Producto: </label>
         <input type="text"  class="form-control" value="{{ $producto->name }}" name="name" id="name" required maxlength="100">
      </div>
      <div class="mb-3">
         <label for="">Descripción: </label>
         <textarea name="description"  class="form-control" id="" cols="30" rows="5">{{ $producto->description }}</textarea>
      </div>
      <div class="mb-3">
         <label for="">Precio: </label>
         <input type="text"  class="form-control" value="{{$producto->price}}" name="price" id="" required maxlength="7">
      </div>
      <div class="mb-3">
         <label for="">Fecha de caducidad: </label>
         <input type="date" value="{{$producto->price}}" class="form-control" name="expiration">
      </div>
      <div class="mb-3">
         <label for="">En stock: </label>
         <input type="number"  class="form-control" value="{{ $producto->stock }}" name="stock" id="" min="1" max="1000">
      </div>
      <div class="mb-3">
         <label for="">Peso en Kg: </label>
         <input type="text" class="form-control" value="{{$producto->weightKg}}" name="weightKg" id="" required>
      </div>
      <div class="mb-3">
         <label for="">Link de imagen: </label>
         <input type="text"  class="form-control" value="{{ $producto->imgLink }}" name="imgLink" id="" >
      </div>
      <input type="submit" class="btn btn-secondary" value="Actualizar Producto">
   </form>
</div>
@endsection