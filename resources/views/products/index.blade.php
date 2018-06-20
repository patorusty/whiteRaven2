
@extends('layouts.layout')
@section('title', 'Productos')
@section('content')

  <div class="container">


      <div class="">
          <ul class="bread">
            <li class=""><a href="/home" class="bc-li">Home</a></li>
            <li class="">Productos</li>
          </ul>
        </div>

      <div class="row text-center">

        @foreach ($products->all() as $product)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="images/{{$product->img}}" alt="">
            <div class="card-body">
              <h4 class="card-title">{{ $product->name }}</h4>
            </div>
            <div class="card-footer">
            <a href="{{route('products.show', $product->id)}}" class="btn btn-block btn-dark">Ver mas</a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
@endsection

