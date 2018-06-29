@extends('layouts.layout')
@section('title', 'Productos')
@section('content')
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
                <img src='{{asset('images/' . $product->img)}}'  alt="" class="img-product rounded" alt="">
            </div>
        </div>
        <div class="col-md-6">
    <form id="carts" name="carts" method="POST" action="{{route('cart.store')}}" >
        {{ csrf_field() }} 
            <div class="col-md-9 border border-dark">
                <h3 class="text-product">
                    <input type= 'text' style="visibility:hidden" name='name' value='{{$product->name}}'> {{$product->name}}
                </h3>
                <h3 class="text-product" >
                    <input type= 'number' type="hidden" style="display:none" name='price' value='{{$product->price}}'>$ {{$product->price}}
                    <input type= 'number' type="hidden" style="display:none" name='code' value='{{$product->code}}'>
                </h3>
                <div class="row mt-6 mt-1">
                    <div class="col-sm-6">
                        <div class="d-flex flex-row">
                            <input type="number" name="quant"  value=0  max="10">
                            {{-- <ion-icon name="add" size="medium" class="masmenos"></ion-icon> --}}
                        </div>
                        <div>
                            <p>El Stock disponible de este producto es {{$product->stock}}</p>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark mt-5">Agregar al Carrito</button>
            </form>
                <p class="text-product mt-5">{{$product->description}}</p>
        </div>
    </div>
</div>


{{-- // botones que saque --}}
{{-- <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
<ion-icon name="remove" size="small" class="masmenos"></ion-icon></button> --}}

{{-- <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> </button> --}}

{{-- // clase que saque del input de cantidad
class="form-control input-number" --}}

@endsection