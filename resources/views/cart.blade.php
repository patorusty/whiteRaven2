@extends('layouts.layout')
@section('title','Carrito')
@section('content')
    <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Codigo Producto</th>
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
    <div>
                Precio Final: $
            @foreach($carts as $key => $value)
                {{$value['totalprice']}}
            @endforeach
    </div>
                <form id="orders" name="orders" method="POST" action="{{route('order.store')}}" >
                        {{ csrf_field() }}  
                        <input type= 'text' style="visibility:hidden" name='product_id' value='{{$value['id']}}'>
                        <input type= 'text' style="visibility:hidden" name='price' value='800'>
                        <button  class="boton-inicio"  type="submit" >COMPRAR</button>
                </form>
@endsection
