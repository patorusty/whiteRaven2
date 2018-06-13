
@extends('layouts.layout')
@section('content')

<form id="brands" name="brands" method="POST" action="">
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
            </tr>
            @foreach ($brands->all() as $brand)
            <tr>
                <td> {{ $category->id }}</td>
                <td> {{ $category->name }}</td>
                <th><i class="fas fa-edit"></i></th>
                <th><i class="fas fa-trash-alt"></i></th>
            </tr>
            @endforeach
          </table>   
@endsection

