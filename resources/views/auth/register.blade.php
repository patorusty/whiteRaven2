@extends('layouts.layout')
@section('title', 'Registro')
@section('content')

<div class="paginaregistro">
    <div class="registrarse">
            <div class="titulo-form">
                    <p>REGISTRO</p>
            </div>
            <div class="formulario">
            <form action="{{ route('register') }}" method="POST" id="registro" name="registro" enctype="multipart/form-data">
                @csrf
                <div class="div-form">
                        <label for="name" class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" autofocus>
                            <span id="error_name" class="invalid-feedback"></span>
                            {{-- @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif --}}
                        </div>
                    </div>
                    <div class="div-form">
                            <label for="lastname" class="col-md-4 control-label">Apellido</label>
                            <div class="col-md-8">
                                <input id="lastname" type="text" class="form-control " name="lastname" value="{{ old('lastname') }}" autofocus>
                                <span id="error_lastname" class="invalid-feedback"></span>
                                {{-- @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>
                    <div class="div-form">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>
                                <span id="error_email" class="invalid-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">Este email ya se encuentra registrado</span>
                                @endif
                            </div>
                        </div>
                    <div class="div-form">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-8">
                                <input id="password" type="text" class="form-control " name="password" value="" autofocus>
                                <span id="error_password" class="invalid-feedback"></span>
                                {{-- @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>
                    <div class="div-form">
                            <label for="password_confirmation" class="col-md-4 control-label">Reingrese Password</label>
                            <div class="col-md-8">
                                <input id="password_confirmation" type="text" class="form-control " name="password_confirmation" value="" autofocus>
                                <span id="error_rePassword" class="invalid-feedback"></span>
                                {{-- @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>
                <div class="div-form">
                        <label for="img" class="col-md-4 control-label">Avatar:</label>
                    <div class="col-md-8">
                    <input type="file" id="img" name="img" class="form-control ">
                    <span id="error_img" class=""></span>
                        {{-- @if ($errors->has('img'))
                            <span class="help-block">
                                <strong>{{ $errors->first('img') }}</strong>
                            </span>
                        @endif --}}
                    </div>
                </div>
                <input type="submit" value="REGISTRARME" name = "submit" class="boton-inicio">
                <br>
            </form>
            </div>
    </div>
</div>

@endsection