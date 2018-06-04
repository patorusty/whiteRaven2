@extends('layouts.app')
@section('content')

<div class="paginaregistro">
    <div class="perfil">
        <div class="titulo-form">
            <p>EDITAR MI PERFIL</p>
        </div>
<div class="miperfil">  
<form method="post" enctype="multipart/form-data">
<div class="div-form">
    <label for="nombre">Nombre</label>
    <input class="input-edit" type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']?>">
</div>	
<div class="errores">	
    <span><?= $nombre_error ?></span>
</div>

<div class="div-form">
    <label for="apellido">Apellido</label>
    <input class="input-edit" type="text" name="apellido" value="<?= $_SESSION['usuario']['apellido']?>">
    </div>	
<div class="errores">
    <span><?= $apellido_error ?></span>
</div>

<div class="div-form">
    <label for="email">Email</label>
    <input class="input-edit" type="email" name="email" value="<?= $_SESSION['usuario']['email']?>">
    </div>	
<div class="errores">	
    <span><?= $email_error ?></span>
</div>

<div class="div-form">
    <label for="password">Password Actual</label>
    <input class="input-edit" type="password" name="oldpassword" value="">
    </div>	
<div class="errores">	
    <span><?= $password_error ?></span>
</div>

<div class="div-form">
    <label for="password">Nuevo Password</label>
    <input class="input-edit" type="password" name="newpassword" value="">
    </div>	
<div class="errores">	
    <span><?= $password_new_error ?></span>
</div>

<div class="div-form-img" style="max-width: 200px;">
<img src="<?= $_SESSION['usuario']['imagen']?>">
</div>

<div class="div-form">
    <label for="imagen" type="file">Imagen</label>
    <input type="file" name="imagen" class="form-control">
</div>
<div class="div-for-botones">
    <input type="submit" name="submit" value="MODIFICAR" class="boton-modificar">
    <a href="perfil.php" class="link-modificar">VOLVER A MI PERFIL</a>
</div>


        </div>
    </div>
</div>
</form>
</div>

@endsection