@extends('layouts.layout')
@section('content')

<div class="paginalogin">
    <div class="ingreso">
        <div class="titulo-form">
            <p>CLIENTE REGISTRADO</p>
        </div>
        <div class="formulario">
            <form method="POST" action="{{ route('login') }}">
                @csrf                
                <div class="div-form">
                    <label for="email">E-mail: </label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif                </div>
                <br>
                <div class="div-form">
                    <label for="password">Contraseña:</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <br>
                <label for="recordar">Recordame</label>
                <input type="checkbox" name="remember" value="1">
                <br>
                <a href="{{ route('password.request') }}"> Olvidó su contraseña?</a>
                <br>
                <input type="submit" name="submit" value="INICIO DE SESIÓN" class="boton-inicio">
            </form>
        </div>
    </div>

    <div class="registro">
        <div class="titulo-form">
            <p>NUEVO CLIENTE</p>
        </div>
        <div class="textoyboton">
        <p class="texto-registro">Creando una cuenta usted podrá comprar más rápido, estar al día con el estado de su pedido, y mantener un
            seguimiento de los pedidos que ha realizado previamente.</p>
        <a class="boton-registrar" href="{{ route('register') }}">REGISTRARME</a>
    </div>
    </div>

</div>

@endsection