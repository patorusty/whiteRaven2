@extends('layouts.layout')
@section('content')

<div class="paginaregistro">
    <div class="registrarse">
        <div class="titulo-form">
            <p>CONTÁCTENOS</p>
        </div>
            <div class="formulario">
                <form action="" method="POST" enctype="multipart/form-data">
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
                            <Label for="email">Mensaje:</Label>
                            <textarea name="comentarios" rows="5" cols="60"></textarea>                   
                    </div>
                        <div class="errores">
                                <span></span><br>
                        </div>
                    
                    <input type="submit" value="ENVIAR MENSAJE" name = "submit" class="boton-inicio">
                </form>
            </div>
    </div>
</div>
@endsection