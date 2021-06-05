@extends('layout.layout')

@section('title', 'Productos')

@section('content')
    
@php
    $count = $productos->count();
    echo "<h1>Productos registrados: $count</h1>";
@endphp

<a class="reg-prod" href="{{ route('productos.create') }}">Registrar nuevo producto</a>
<hr>
{{-- loops through all the products in products 
     variable passed from index funtion in ProductoController--}}
@forelse ($productos as $producto)

<div class="row">
    <div class="col-sm-5">
        <div class="card">
            <img src="{{ $producto -> imgLink }}" class="card-img" alt="" width="50">
            <div class="card-body">
                <h2 class="card-title"><em>{{ $producto -> name }}</em></h2>
                <p class="card-text">{{ $producto -> description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">${{$producto->price}}</li>
                <li class="list-group-item">Stock en almacen: {{$producto->stock}}</li>
                <li class="list-group-item">Fecha de caducidad: {{$producto->expiration}}</li>
                <li class="list-group-item">Peso en Kg: {{$producto->weightKg}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Ver mas</a>
                <a href="#" class="card-link">editar</a>
            </div>
        </div>
    </div>
</div>   

    <br>

@empty
    
    <div class="null-database"><h3>No hay registros de productos en la base de datos</h3></div>
@endforelse
<div>
      {{$productos->links()}}
</div>
@endsection

