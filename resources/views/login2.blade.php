@extends('layouts.layout')
@section('content')

<div class="paginalogin">
    <div class="ingreso">
        <div class="titulo-form">
            <p>CLIENTE REGISTRADO</p>
        </div>
        <div class="formulario">
            <form method="post">
                <div class="div-form">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" class="input-email" input align='right'value="">
                </div>
                <br>
                <div class="div-form">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" class="input-password" input align='right' value="">
                </div>
                <br>
                <label for="recordar">Recordame</label>
                <input type="checkbox" name="recordar" value="1">
                <br>
                <a href="/reseteo.html"> Olvidó su contraseña?</a>
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
        <a class="boton-registrar" href="registro.php">REGISTRARME</a>
    </div>
    </div>

</div>

@endsection