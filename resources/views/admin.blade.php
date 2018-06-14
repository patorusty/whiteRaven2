@extends('layouts.layout')
@section('content')
<h1>Crear Producto</h1>

<form id="products" name="products" method="POST" action="{{route('admin.products')}}">
    {{ csrf_field() }}  
    <div>
        <label for="name">Nombre del Producto: </label>
        <input type="text" name="name" id="name"/>
    </div>
    <div>
        <label for="category">Categoria: </label>
        <select>
                <optgroup label="Gorras">
                        @foreach ($categories->all() as $categoria);
                        <option value= "{{ $categoria->id }}">{{ $categoria->name }}</option>
                        @endforeach};
                </optgroup>
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
<br>
<br>
<br>

  -----------------------------------------------------------------------------------

<br>
<br>
<br>
<h1>Crear Marca</h1>

  <form id="brands" name="brands" method="POST" action="{{route('admin.brands')}}">
    {{ csrf_field() }}  
<div>
    <label for="name">Nombre de la Marca:</label>
    <input type="text" name="name" id="name"/>
</div>

<input type="submit" value="Crear Marca" name="submit"/>
</form>
<br>
    <table class="egt" border=”1″>
            <tr>
                <th>Id</th>
                <th>Nombre de la Marca</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($brands->all() as $brand)
            <tr>
                <td> {{ $brand->id }}</td>
                <td> {{ $brand->name }}</td>
                <th><i class="fas fa-edit"></i></th>
                <th><i class="fas fa-trash-alt"></i></th>
            </tr>
            @endforeach
    </table>   
<br>
<br>
<br>

  -----------------------------------------------------------------------------------
  
<br>
<br>
<br>
<h1>Crear Categoria</h1>
<form id="categories" name="categories" method="POST" action="{{route('admin.categories')}}">
        {{ csrf_field() }}  
    <div>
        <label for="name">Nombre de la Categoria:</label>
        <input type="text" name="name" id="name"/>
    </div>
    <div>
        <label for="category">Integra la categoria: </label>
        <select name="category">
            @foreach ($categories->all() as $categoria)
            <option value= "{{ $categoria->id }}">{{ $categoria->name }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="Crear Categoria" name="submit"/>
    </form>
    <br>
        <table class="egt" border=”1″>
                <tr>
                  <th>Id</th>
                  <th>Nombre de Categoria</th>
                  <th>Categoria Padre</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                @foreach ($categories->all() as $category)
                <tr>
                    <td> {{ $category->id }}</td>
                    <td> {{ $category->name }}</td>
                    <td> {{ $category->parent_id }}</td>
                    <th><i class="fas fa-edit"></i></th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                @endforeach
              </table>   
<br>
<br>
<br>
-----------------------------------------------------------------------------------
  
<br>
<br>
<br>
<h1>Crear Sub Categoria</h1>
<form id="subcategories" name="subcategories" method="POST" action="{{route('admin.subcategories')}}">
        {{ csrf_field() }}  
    <div>
        <label for="name">Nombre de la Sub Categoria:</label>
        <input type="text" name="name" id="name"/>
    </div>
    <div>
        <label for="category">Integra la categoria: </label>
        <select name="category">
            @foreach ($categories->all() as $categoria)
            <option value= "{{ $categoria->id }}">{{ $categoria->name }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="Crear Sub Categoria" name="submit"/>
    </form>
    <br>
        <table class="egt" border=”1″>
                <tr>
                  <th>Id</th>
                  <th>Nombre de Categoria</th>
                  <th>Categoria Padre</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                @foreach ($categories->all() as $category)
                <tr>
                    <td> {{ $category->id }}</td>
                    <td> {{ $category->name }}</td>
                    <td> {{ $category->parent_id }}</td>
                    <th><i class="fas fa-edit"></i></th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                @endforeach
              </table>   
<br>
<br>
<br>





@endsection