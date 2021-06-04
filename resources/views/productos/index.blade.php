<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Productos</title>
</head>
<body>
   @forelse ($productos as $producto)
       <div>
          <h3>{{ $producto -> name }}</h3>
       </div>
   @empty
       <div class="null-database"><h3>No hay registros de productos en la base de datos</h3></div>
   @endforelse
</body>
</html>