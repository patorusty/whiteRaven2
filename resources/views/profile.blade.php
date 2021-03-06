@extends('layouts.layout')
@section('title', 'Perfil')
@section('content')

<div class="paginaperfil">
    <div class="perfil">
        <div class="titulo-form">
            <p>MI PERFIL</p>
        </div>
    <div class="miperfil">
        <div class="perfilusuario">
            
            <h1>Bienvenido {{ $users->name }} </h1>
            <img src='images/{{$users->img}}' style="max-width: 200px;">
        </div>
            <a  class="boton-inicio" style="display:none;" href="{{ route('login')}}">EDITAR PERFIL</a>
            <form action="{{ route('logout') }}" method="POST">
            <a class="boton-inicio"  href="{{ route('logout')}}">CERRAR CESION</a>
            @csrf
            </form>
            <br>
        </div>
    </div>
    <div class="perfil">
            <div class="titulo-form">
                <p>ORDENES</p>
            </div>
        <div class="miperfil">
                <table class="egt table table-striped table-hover" border=”1″>
                    <thead class="thead-dark">
                        <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Productos</th>
                                <th scope="col">Precio</th>                     
                        </tr>
                    </thead>
                            @foreach ($orders->all() as $order)
                            <tr>
                                    <td>{{$order->date}}</td>
                                    <td>
                                        <ul>
                                            @foreach($order->productos as $gorra)
                                                <li>{{$gorra['name']}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{$order->price}}</td>
                            </tr>
                            @endforeach
                </table>
        </div>
    </div>
</div>
@endsection



