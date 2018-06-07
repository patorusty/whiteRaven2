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




{{-- 
<script>
    var url = document.URL;
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, url);
    });
</script> --}}