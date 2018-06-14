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
                        <label for="name" class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="div-form">
                            <label for="lastname" class="col-md-4 control-label">Apellido</label>
                            <div class="col-md-8">
                                <input id="lastname" type="text" class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" autofocus>
    
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="div-form">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>
    
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="div-form">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="" autofocus>
    
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="div-form">
                            <label for="password_confirmation" class="col-md-4 control-label">Reingrese Password</label>
                            <div class="col-md-8">
                                <input id="password_confirmation" type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" value="" autofocus>
    
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                <div class="div-form">
                    <label for="avatar" class="col-md-4 control-label">Avatar:</label>
                    <div class="col-md-8">
                    <input type="file" name="img">
                    </div>
                </div>
                <input type="submit" value="REGISTRARME" name = "submit" class="boton-inicio">
                <br>
            </form>
            </div>
    </div>
</div>

@endsection