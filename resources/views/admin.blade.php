@extends('layouts.layout')
@section('title','Admin')
@section('content')
<h1>Crear Producto</h1>

<form id="products" name="products" method="POST" action="{{route('admin.products')}}">
    {{ csrf_field() }}  
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label">Nombre del Producto:</label>
        <div class="col-4">
        <input type="text" class="form-control" name="name" id="name"/>
    </div>
    </div>
    <div class="form-group row">
        <label for="category" class="col-3 col-form-label">Categoria:</label>
        <div class="col-4">
        <select name="category">
                @foreach ($categories->all() as $categoria);
                <option value= "{{ $categoria->name }}">{{ $categoria->name }}</option>
                @endforeach};
        </select>
    </div>

    </div>
    <div class="form-group row">
        <label for="subcategory" class="col-3 col-form-label">SubCategoria: </label>
        <div class="col-4">
        <select name="subcategory">
                @foreach ($subcategories->all() as $subcategoria);
                <option value= "{{ $subcategoria->name }}">{{ $subcategoria->name }}</option>
                @endforeach};
        </select>
    </div>
    </div>
    <div class="form-group row">
        <label for="brand" class="col-3 col-form-label">Marca: </label>
            <div class="col-4">
        <select name="brand">
            @foreach ($brands->all() as $brand)
            <option value= "{{ $brand->name }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label">Precio: </label>
            <div class="col-4">
        <input type="float" name="price" id="price"/>
    </div>
</div>
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label">Stock: </label>
            <div class="col-4">
        <input type="integer" name="stock" id="stock"/>
    </div>
</div>
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label">Codigo de producto: </label>
            <div class="col-4">
        <input type="integer" name="codigo" id="stock"/>
    </div>
</div>
<div class="form-group row">
        <label for="description" class="col-3 col-form-label">Descripcion:</label>
        <div class="col-4">
        <textarea class="form-control" id="description" rows="3" cols="2"></textarea>
    </div>
</div>
    <div class="form-group row">
        <label for="avatar" class="col-3 col-form-label col-xs-12">Avatar:</label>
            <div class="col-4">
        <input type="file" name="img">
    </div>
</div>

    <button type="submit" class="btn btn-dark">Crear</button>
    
</form>
<br>
<div><hr></div>
<br>

<table class="egt table table-striped table-hover" border=”1″>
        <thead class="thead-dark">
    <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Marca</th>
        <th scope="col">Categoria</th>
        <th scope="col">SubCategoria</th>
        <th scope="col">Precio</th>
        <th scope="col">Stock</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Favorito</th>
        <th scope="col">Imagen</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
    </tr>
    </thead>
    <tbody>
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
    </tbody>
    </table> 

<div><hr></div>   
<br>
<br>
<hr>
<h1>Crear Marca</h1>

    <form id="brands" name="brands" method="POST" action="{{route('admin.brands')}}">
    {{ csrf_field() }}
    <div class="form-group row">
    <label for="name" class="col-3 col-form-label">Nombre de la Marca:</label>
    <div class="col-4">
    <input type="text" name="name" class="form-control" id="name"/>
</div>
</div>
<button type="submit" class="btn btn-dark">Crear Marca</button>
</form>
<br>
<div><hr></div> 
    <table class="egt table table-striped table-hover" border=”1″>
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre de la Marca</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
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
<div><hr></div> 
<br>
<h1>Crear Categoria</h1>
<form id="categories" name="categories" method="POST" action="{{route('admin.categories')}}">
        {{ csrf_field() }}  
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label">Nombre de la Categoria:</label>
        <div class="col-4">
        <input type="text" name="name" class="form-control" id="name"/>
    </div>
    </div>

    <button type="submit" class="btn btn-dark">Crear Categoria</button>
    </form>
    <div><hr></div>
    <br>
        <table class="egt table table-striped table-hover" border=”1″>
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre de Categoria</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
            </thead>
                @foreach ($categories->all() as $category)
                <tr>
                    <td> {{ $category->name }}</td>
                    <th><i class="fas fa-edit"></i></th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                @endforeach
        </table>   
<br>
<div><hr></div>
<br>
<h1>Crear Sub Categoria</h1>
<form id="subcategories" name="subcategories" method="POST" action="{{route('admin.subcategories')}}">
        {{ csrf_field() }}  
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label">Nombre de Sub Categoria:</label>
        <div class="col-4">
        <input type="text" name="name" class="form-control" id="name"/>
        </div>
    </div>
    <div class="form-group row">
        <label for="category" class="col-2 col-form-label">Integra la categoria: </label>
        <div class="col-4">
        <select name="category">
            @foreach ($categories->all() as $categoria)
            <option value= "{{ $categoria->name }}">{{ $categoria->name }}</option>
            @endforeach
        </select>
    </div>
    </div>
    <button type="submit" class="btn btn-dark">Crear Sub Categoria</button>
    </form>
    <br>
        <table class="egt table table-striped table-hover" border=”1″>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre de la SubCategoria</th>
                    <th scope="col">Categoria Padre</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach ($subcategories->all() as $subcategory)
                <tr>
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