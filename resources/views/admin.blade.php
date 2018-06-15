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
        <select name="category">
                @foreach ($categories->all() as $categoria);
                <option value= "{{ $categoria->name }}">{{ $categoria->name }}</option>
                @endforeach};
        </select>
    </div>
    <div>
        <label for="subcategory">SubCategoria: </label>
        <select name="subcategory">
                @foreach ($subcategories->all() as $subcategoria);
               <option value= "{{ $subcategoria->name }}">{{ $subcategoria->name }}</option>
               @endforeach};
        </select>
    </div>
    <div>
        <label for="brand">Marca: </label>
        <select name="brand">
            @foreach ($brands->all() as $brand)
            <option value= "{{ $brand->name }}">{{ $brand->name }}</option>
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
    <div>
        <label for="name">Producto Destacado: </label>
        <input type='checkbox' name='favourite' id='favourite' value=1 />
    </div>
    <div class="div-form">
        <label for="avatar">Foto 1:</label><br>
        <input type="file" name="img1"><br>
    </div>
    <div class="div-form">
        <label for="avatar">Foto 2:</label><br>
        <input type="file" name="img2"><br>
    </div>
    <div class="div-form">
        <label for="avatar">Foto 3:</label><br>
        <input type="file" name="img3"><br>
    </div>
    <div class="div-form">
        <label for="avatar">Foto 4:</label><br>
        <input type="file" name="img4"><br>
    </div>
    <input type="submit" value="Crear Producto" name="submit"/>
</form>
<br>

<table class="egt" border=”1″>
    <tr>
      <th>Codigo Prod.</th>
      <th>Nombre</th>
      <th>Marca</th>
      <th>Categoria</th>
      <th>SubCategoria</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Descripcion</th>
      <th>Destacado</th>
      <th>Imagen</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    @foreach ($products->all() as $product)
    <tr>
        <td> {{ $product->codigo }}</td>
        <td> {{ $product->name }}</td>
        <td> {{ $product->brand_id }}</td>
        <td> {{ $product->category_id }}</td>
        <td> {{ $product->subcategory_id }}</td>
        <td> {{ $product->price }}</td>
        <td> {{ $product->stock }}</td>
        <td> {{ $product->description }}</td>
        <td> {{ $product->favourite }}</td>
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
                <th>Nombre de la Marca</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($brands->all() as $brand)
            <tr>
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

    <input type="submit" value="Crear Categoria" name="submit"/>
    </form>
    <br>
        <table class="egt" border=”1″>
                <tr>
                  <th>Nombre de Categoria</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                @foreach ($categories->all() as $category)
                <tr>
                    <td> {{ $category->name }}</td>
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
            <option value= "{{ $categoria->name }}">{{ $categoria->name }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="Crear Sub Categoria" name="submit"/>
    </form>
    <br>
        <table class="egt" border=”1″>
                <tr>
                  <th>Id</th>
                  <th>Nombre de la SubCategoria</th>
                  <th>Categoria Padre</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                @foreach ($subcategories->all() as $subcategory)
                <tr>
                    <td> {{ $subcategory->id }}</td>
                    <td> {{ $subcategory->name }}</td>
                    <td> {{ $subcategory->parent_id }}</td>
                    <th><i class="fas fa-edit"></i></th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                @endforeach
              </table>   
<br>
<br>
<br>





@endsection