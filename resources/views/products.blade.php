
@extends('layouts.layout')
@section('content')

<form id="products" name="products" method="POST" action="{{route('products.add')}}">
    {{ csrf_field() }}  
    <div>
        <label for="name">Nombre del Producto: </label>
        <input type="text" name="name" id="name"/>
    </div>
    <div>
        <label for="category">Categoria: </label>
        <select name="category">
            @foreach ($categories->all() as $categoria)
            <option value= "{{ $categoria->id }}">{{ $categoria->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="brand">Marca: </label>
        <select name="brand">
            @foreach ($brands->all() as $brand)
            <option value= "{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="name">Precio: </label>
        <input type="float" name="price" id="price"/>
    </div>
    <div>
        <label for="name">Stock: </label>
        <input type="integer" name="stock" id="stock"/>
    </div>
    <div>
        <label for="name">Codigo de producto: </label>
        <input type="integer" name="codigo" id="stock"/>
    </div>
    <div>
        <label for="name">Descripcion: </label>
        <input type="textarea" name="description" id="description"/>
    </div>
    <div class="div-form">
        <label for="avatar">Avatar:</label><br>
        <input type="file" name="img"><br>
    </div>
    <input type="submit" value="Crear Producto" name="submit"/>
</form>
<br>

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

