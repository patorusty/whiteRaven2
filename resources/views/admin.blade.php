@extends('layouts.layout')
@section('title','Admin')
@section('content')

<h1>Crear Producto</h1>

<form id="products" name="products" method="POST" action="{{route('admin.products')}}" enctype="multipart/form-data">
    {{ csrf_field() }}  
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label">Nombre del Producto:</label>
        <div class="col-4">
        <input type="text" class="form-control" name="name" id="nombre"/>
        {{-- @if ($errors->has('nombre'))
            <span class="help-block">
                <strong>{{ $errors->first('nombre') }}</strong>
            </span>
        @endif --}}
    </div>
    </div>
    <div class="form-group row">
        <label for="category" class="col-3 col-form-label">Categoria:</label>
        <div class="col-4">
        <select name="category">
                @foreach ($categories->all() as $categoria);
                <option value= "{{ $categoria->id }}">{{ $categoria->name }}</option>
                @endforeach};
        </select>
    </div>

    </div>
    <div class="form-group row">
        <label for="subcategory" class="col-3 col-form-label">SubCategoria: </label>
        <div class="col-4">
        <select name="subcategory">
                @foreach ($subcategories->all() as $subcategoria);
                <option value= "{{ $subcategoria->id }}">{{ $subcategoria->name }}</option>
                @endforeach};
        </select>
    </div>
    </div>
    <div class="form-group row">
        <label for="brand" class="col-3 col-form-label">Marca: </label>
            <div class="col-4">
        <select name="brand">
            @foreach ($brands->all() as $brand)
            <option value= "{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label {{ $errors->has('price') ? ' is-invalid' : '' }}">Precio: </label>
            <div class="col-4">
        <input type="float" name="price" id="price"/>
        @if ($errors->has('price'))
            <span class="help-block">
                <strong>{{ $errors->first('price') }}</strong>
            </span>
        @endif
    </div>
</div>
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label {{ $errors->has('stock') ? ' is-invalid' : '' }}">Stock: </label>
            <div class="col-4">
        <input type="number" name="stock" id="stock"/>
        @if ($errors->has('stock'))
            <span class="help-block">
                <strong>{{ $errors->first('stock') }}</strong>
            </span>
        @endif
    </div>
</div>
    <div class="form-group row">
        <label for="name" class="col-3 col-form-label {{ $errors->has('code') ? ' is-invalid' : '' }}">Codigo de producto: </label>
            <div class="col-4">
        <input type="integer" name="code" id="code"/>
        @if ($errors->has('code'))
            <span class="help-block">
                <strong>{{ $errors->first('code') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-3 col-form-label" for="defaultCheck1">Favoritos</label>
    <div class="col-4">
    <input class="" type="checkbox" value=1 name="favourite" id="defaultCheck1">
    </div>
</div>
<div class="form-group row">
        <label for="description" class="col-3 col-form-label {{ $errors->has('description') ? ' is-invalid' : '' }}">Descripcion:</label>
        <div class="col-4">
        <textarea class="form-control" id="description" name="description" rows="3" cols="2"></textarea>
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
        <label for="avatar" class="col-3 col-form-label col-xs-12">Foto 1:</label>
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
        <th scope="col">Eliminar</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products->all() as $product)
    <tr>
        <td> {{ $product->code }}</td>
        <td> {{ $product->name }}</td>
        <td> {{ $product->brand_id }}</td>
        <td> {{ $product->category_id }}</td>
        <td> {{ $product->sub_category_id }}</td>
        <td> {{ $product->price }}</td>
        <td> {{ $product->stock }}</td>
        <td> {{ $product->description }}</td>
        <td> {{ $product->favourite }}</td>
        <td>
            <img src="images/{{$product->img}}" width="100" alt="">
        </td>
        <form action="/products/{{$product->id}}" method="post">
            {{ method_field('delete') }}   
            {{ csrf_field() }}
            <th><button type="submit" class="fas fa-trash-alt"></button></th>
        </form>
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
    <label for="brands" class="col-3 col-form-label">Nombre de la Marca:</label>
    <div class="col-4">
    <input type="text" name="brands" class="form-control" id="name"/>
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
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
            @foreach ($brands->all() as $brand)
            <tr>
                <td> {{$brand->name}}</td>
                <form action="/brands/{{$brand->id}}" method="post">
                    {{ method_field('delete') }}   
                    {{ csrf_field() }}
                    <th><button type="submit" class="fas fa-trash-alt"></button></th>
                </form>            
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
        <input type="text" name="categories" class="form-control" id="name"/>
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
                <th scope="col">Eliminar</th>
            </tr>
            </thead>
                @foreach ($categories->all() as $category)
                <tr>
                    <td> {{ $category->name }}</td>
                    <form action="/categories/{{$category->id}}" method="post">
                        {{ method_field('delete') }}   
                        {{ csrf_field() }}
                        <th><button type="submit" class="fas fa-trash-alt"></button></th>
                    </form>                  
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
        <input type="text" name="sub_categories" class="form-control" id="name"/>
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
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
                @foreach ($subcategories->all() as $subcategory)
                <tr>
                    <td> {{ $subcategory->name }}</td>
                    <td> {{ $subcategory->parent_id }}</td>
                    <form action="/subcategories/{{$subcategory->id}}" method="post">
                        {{ method_field('delete') }}   
                        {{ csrf_field() }}
                        <th><button type="submit" class="fas fa-trash-alt"></button></th>
                    </form>                  
                </tr>
                @endforeach
        </table>   
<br>
<br>
<br>


@endsection