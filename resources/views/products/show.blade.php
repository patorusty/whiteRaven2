@extends('layouts.layout')
@section('title', 'Productos')
@section('content')

<div class="container">
        <div class="">
                <ul class="bread mt-3">
                    <li class=""><a href="#0" class="bc-li">Home</a></li>
                    <li class=""><a href="{{ route('products.index') }}" class="bc-li">Productos</a></li>
                    <li class="">{{$product->name}}</li>
                    </ul>
                </div>
    <div class="row mt-3 mx-auto">
        <div class="col-md-6">
            <div class="col-md-12 d-flex justify-content-center">
            <img src="{{asset('images/' . $product->img)}}" class="img-product rounded" alt="">
        </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-9 border border-light">
                <h3 class="text-product">
                    {{$product->name}}
                </h3>
                <h3 class="text-product">
                    $ {{$product->price}}
                </h3>
                <h4 class="text-product mb-5">
                    Color
                </h4>
                        <div class="row mt-6 mt-1">
                            <div class="col-sm-6">
                                <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <ion-icon name="remove" size="small" class="masmenos"></ion-icon>    
                                    </button>
                                    <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                            <ion-icon name="add" size="small" class="masmenos"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                <button class="btn btn-dark mt-5">Agregar al Carrito</button>
                <p class="text-product mt-5">{{$product->description}}</p>
        </div>
    </div>
</div>
</div>


@endsection