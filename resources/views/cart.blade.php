@extends('layouts.layout')
@section('title','Carrito')
@section('content')
<body>
    <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tr>
                <td>{{count ($carts, 1)}}</td>
                @foreach($carts as $key => $value)
                <td>{{$value}}</td>
                @endforeach
                <td>borrar</td>
            </tr>
</body>
@endsection
