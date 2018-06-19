@extends('layouts.layout')
@section('title', 'Productos')
@section('content')

<div class="container">
    <div class="col-md-6">
        <img src="{{asset('images/' . $product->img)}}" style="max-width: 200px;" alt="">
    </div>
    <div class="col-md-6">
            <h3>
                {{$product->name}}
            </h3>
            <h3>
                {{$product->price}}
            </h3>
    </div>
</div>
{{$product->brand_id}}


@endsection