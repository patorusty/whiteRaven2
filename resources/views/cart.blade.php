@extends('layouts.layout')
@section('title','Carrito')
@section('content')
    <div class="d-flex flex-column align-items-center">
    <h1 class="mt-3">CART</h1>
    <div class="col-md-8">
        <table class="table table-hover table-striped mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>Item</th>
                    <th>Codigo</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Precio Total</th>
                    <th>Borrar</th>
                </tr>
            </thead>
                @foreach($carts as $key => $value)
                    <tr>
                        @foreach($value as $producto)
                            <td>{{$producto}}</td>
                        @endforeach
                        <form action="/cart/{{$value['id']}}" method="post">
                                {{ method_field('delete') }}   
                                {{ csrf_field() }}
                                <th><button type="submit" class="fas fa-trash-alt"></button></th>
                            </form>
                        </td>
                    </tr>
                @endforeach
    </table>
   
                Precio Final: ${{$final}}
                <form id="orders" name="orders" method="POST" action="{{route('order.store')}}" >
                        {{ csrf_field() }}  
                <input type= 'text' type="hidden" style="display:none" name='product_id' value='{{$productlist}}'>
                        <input type= 'text'  style="display:none" type="hidden" width="0px" height="0px" name='price' value='{{$final}}'>
                        <button  class="btn btn-block btn-dark"  type="submit" >COMPRAR</button>
                </form>
            </div>
        </div>
@endsection
