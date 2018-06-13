
@extends('layouts.layout')
@section('content')



<table class="egt" border=”1″>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Marca</th>
      <th>Categoria</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Descripcion</th>
      <th>Imagen</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    @foreach ($products->all() as $product)
    <tr>
        <td> {{ $product->id }}</td>
        <td> {{ $product->codigo }}</td>
        <td> {{ $product->name }}</td>
        <td> {{ $product->brand_id }}</td>
        <td> {{ $product->category_id }}</td>
        <td> {{ $product->price }}</td>
        <td> {{ $product->stock }}</td>
        <td> {{ $product->description }}</td>
        <td> <img src="{{ $product->img }}" style="max-width: 200px;"></td>
        <th><i class="fas fa-edit"></i></th>
        <th><i class="fas fa-trash-alt"></i></th>
    </tr>
    @endforeach
  </table>    
@endsection

