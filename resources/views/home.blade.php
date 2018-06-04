@extends('layouts.layout')

{{-- @section('content2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./images/Banner6.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./images/Banner7.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./images/Banner8.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="contenido">
    <p class="titulos">- NEW ARRIVALS -</p>
    <div class="nuevos">
        <div class="productos-nuevos">
            <div class="imgnuevo">
                <img src="./images/Snapnblack.jpg" class="img-nuevo" alt="">
            </div>
            <div>
                <div class="pdeproducto">
                    <p class="titulo-producto">SNAPBACK NEGRA</p>
                </div>
            </div>
        </div>
        <div class="productos-nuevos">
            <div class="imgnuevo">
                <img src="./images/5pannelr&Wcamo.jpg" class="img-nuevo" alt="">
            </div>
            <div>
                <div class="pdeproducto">
                    <p class="titulo-producto">5 PANELES CAMO</p>
                </div>
            </div>
        </div>
        <div class="productos-nuevos">
            <div class="imgnuevo">
                <img src="./images/truckergb.jpg" class="img-nuevo" alt="">
            </div>
            <div>
                <div class="pdeproducto">
                    <p class="titulo-producto">TRUCKER NEGRA Y GRIS</p>
                </div>
            </div>
        </div>

    </div>
    <div class="custom-program">

        <div class="custom-text custom-text1">
            <p>- CUSTOM PROGRAM -</p>
        </div>
        <div class="custom-text custom-text2">
            <p>48 // UNIDADES</p>
            <p>3 // COLORES</p>
            <p>4 // SEMANAS DE ENTREGA</p>
        </div>
    </div>
    <p class="titulos">- DESTACADOS -</p>
    <div class="caja-destacados">
        <div class="destacados">
            <div class="imgdestacado">
                <img src="./images/sq1.png" class="img-destacado" alt="">

                <div class="pdestacado">
                    <p class="titulo-destacado">SNAP 5 PANELES</p>
                </div>
            </div>
        </div>
        <div class="destacados">
            <div class="imgdestacado">
                <img src="./images/sq2.png" class="img-destacado" alt="">
                <div class="pdestacado">
                    <p class="titulo-destacado">SNAP LANA</p>
                </div>
            </div>
        </div>
        <div class="destacados">
            <div class="imgdestacado">
                <img src="./images/sq3.png" class="img-destacado" alt="">


                <div class="pdestacado">
                    <p class="titulo-destacado">BEANIES</p>
                </div>
            </div>
        </div>
        <div class="destacados">
            <div class="imgdestacado">
                <img src="./images/sq4.png" class="img-destacado" alt="">
                <div>
                    <div class="pdestacado">
                        <p class="titulo-destacado">SNAP 7 PANELES</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
