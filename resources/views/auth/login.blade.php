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
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su Email">
                        @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif  
                        </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" id="password" name="password" required class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Password">
                        @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="remember" value="1" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                        <br>
                        <a href="{{ route('password.request') }}"> Olvidó su contraseña?</a> 
                    </div>
                    <button type="submit" class="boton-inicio">INICIAR SESION</button>
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