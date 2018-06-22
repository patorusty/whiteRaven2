@extends('layouts.layout')
@section('title', 'Perfil')
@section('content')

<div class="paginaregistro">
    <div class="perfil">
        <div class="titulo-form">
            <p>MI PERFIL</p>
        </div>
    <div class="miperfil">
        <div class="perfilusuario">
            
            <h1>Bienvenido {{ $users->name }} </h1>
            <img src='images/{{$users->img}}' style="max-width: 200px;">
        </div>
            <a  class="boton-inicio"  href="{{ route('login')}}">EDITAR PERFIL</a>
            <form action="{{ route('logout') }}" method="POST">
            <a class="boton-inicio"  href="{{ route('logout')}}">CERRAR CESION</a>
            @csrf
            </form>
            <br>
        </div>
    </div>
</div>

@endsection



