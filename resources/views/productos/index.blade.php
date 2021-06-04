<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Productos</title>
</head>
<body>
   {{-- loops through all the products in products table in DB  --}}
   @forelse ($productos as $producto)
       <div>
          <h3>Producto: {{ $producto -> name }}</h3>
          <p>Descripción: {{ $producto -> description }}</p>
          <h4>Precio: ${{ $producto -> price}}</h4>
       </div>
       <br>
   @empty
       <div class="null-database"><h3>No hay registros de productos en la base de datos</h3></div>
   @endforelse
</body>
</html>