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
                        <Label for="nombre" class="col-md-4 control-label">Nombre:</Label>
                        <div class="col-md-8">
                        <input type="text" name="name" id="name" class="form-control " input align='right' value="" id="name"/>
                        <span id="error_name" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="div-form">
                        <Label for="apellido" class="col-md-4 control-label">Apellido:</Label>
                        <div class="col-md-8">
                        <input type="text" name="lastname" class="form-control " input align='right' value="" id="lastname"/>
                        <span id="error_lastname" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="div-form">
                        <Label for="email" class="col-md-4 control-label">Email:</Label>
                        <div class="col-md-8">
                        <input type="text" name="email" class="form-control " input align='right' value="" id="email"/>
                        <span id="error_email" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="div-form">
                            <Label for="message" class="col-md-4 control-label">Mensaje:</Label>
                            <div class="col-md-8">
                            <textarea name="message" class="form-control " rows="3" id="message"></textarea> 
                            <span id="error_message" class="invalid-feedback"></span>   
                            </div>               
                    </div>
                    <input type="submit" value="ENVIAR MENSAJE" name = "submit" class="boton-inicio">
                </form>
            </div>
    </div>
</div>
@endsection