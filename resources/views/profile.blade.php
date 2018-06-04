@extends('layouts.layout')
@section('content')

<div class="paginaregistro">
    <div class="perfil">
        <div class="titulo-form">
            <p>MI PERFIL</p>
        </div>
    <div class="miperfil">
        <div class="perfilusuario">
            <h1>Bienvenido User</h1>
            <img src="" style="max-width: 200px;">
        </div>
            <a  class="boton-inicio"  href="modificar.php">EDITAR PERFIL</a>
            
            <a class="boton-inicio"  href="logout.php">CERRAR CESION</a>
            <br>
        </div>
</div>
</div>

@endsection
