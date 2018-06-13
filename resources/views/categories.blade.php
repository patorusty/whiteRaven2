
@extends('layouts.layout')
@section('content')

<form id="categories" name="categories" method="POST" action="{{route('categories.add')}}">
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






    @endsection

