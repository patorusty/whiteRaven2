
@extends('layouts.layout')
@section('title', 'Productos')
@section('content')
      <div class="mt-3">
          <ul class="bread">
            <li class=""><a href="/home" class="bc-li">Home</a></li>
            <li class="">Productos</li>
          </ul>
        </div>
      <div class="row text-center mt-3">

        @foreach ($products->all() as $product)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
              <img src='{{asset('images/' . $product->img)}}' width="200" alt="" class="img-product rounded" alt="">
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
@endsection

