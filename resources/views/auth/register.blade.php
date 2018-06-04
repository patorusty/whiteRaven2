@extends('layouts.layout')
@section('content')

<div class="paginaregistro">
    <div class="registrarse">
            <div class="titulo-form">
                    <p>REGISTRO</p>
            </div>
            <div class="formulario">
            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div-form">
                    <Label for="nombre">Nombre:</Label>
                    <input type="text" name="name" class="input-registro form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" input align='right' value="<?php if (isset($_POST['nombre'])) {echo $_POST['nombre'];}?>"/>
                    <br>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div>
                    
                </div>
                    
                <div class="div-form">
                    <Label for="apellido">Apellido:</Label>
                    <input type="text" name="lastname" class="input-registro form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" input align='right' value=""/>
                </div>
                    <div class="errores">
                        <span></span><br>
                    </div>
                <div class="div-form">
                    <Label for="email">Email:</Label>
                    <input type="text" name="email" class="input-registro form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" input align='right' value=""/>
                </div>
                    <div class="errores">
                        <span></span><br>
                    </div>
                <div class="div-form">
                    <Label for="password">Password:</Label>
                    <input type="password" name="password" class="input-registro form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" input align='right'>
                </div>
                    <div class="errores">
                        <span></span><br>
                    </div>
                <div class="div-form">
                    <Label for="repassword">Confirmar Password:</Label>
                    <input type="password" name="password_confirmation" class="input-registro form-control" input align='right'>
                </div>
                    <div class="errores">
                        <span></span><br>
                    </div>

                <div class="div-form">
                    <label for="avatar">Avatar:</label><br>
                    <input type="file" name="img"><br>
                </div>
                        <div class="errores">
                            <span></span><br>
                        </div>

                <input type="submit" value="REGISTRARME" name = "submit" class="boton-inicio">
                <br>
            </form>
            </div>
    </div>
</div>

@endsection