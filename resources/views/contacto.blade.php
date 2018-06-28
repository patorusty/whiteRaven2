@extends('layouts.layout')
@section('title', 'Contacto')
@section('content')

<div class="paginaregistro">
    <div class="registrarse">
        <div class="titulo-form">
            <p>CONTÁCTENOS</p>
        </div>
            <div class="formulario">
                <form action="" method="POST"  id="contacto" name="contacto" enctype="multipart/form-data">
                    @csrf
                    <div class="div-form">
                        <Label for="nombre">Nombre:</Label>
                        <input type="text" name="name" id="name" class="input-registro form-control " input align='right' value=""/>
                        <span id="error_name" class="invalid-feedback"></span>
                    </div>

                    <div class="div-form">
                        <Label for="apellido">Apellido:</Label>
                        <input type="text" name="lastname" class="input-registro form-control " input align='right' value=""/>
                        <span id="error_lastname" class="invalid-feedback"></span>
                    </div>
                        <div class="errores">
                            <span></span><br>
                        </div>
                    <div class="div-form">
                        <Label for="email">Email:</Label>
                        <input type="text" name="email" class="input-registro form-control " input align='right' value=""/>
                        <span id="error_email" class="invalid-feedback"></span>
                    </div>
                        <div class="errores">
                            <span></span><br>
                        </div>
                    <div class="div-form">
                            <Label for="message">Mensaje:</Label>
                            <textarea name="comentarios" rows="5" cols="50"></textarea> 
                            <span id="error_message" class="invalid-feedback"></span>                  
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