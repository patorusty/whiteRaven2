@extends('layouts.layout')
@section('title','Carrito')
@section('content')
<body>
    <table>
    <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Borrar</th>
    </tr>
    @foreach($carts as $key => $value)
    <tr>
        <td>{{$key->value}}</td>
        <td>{{$key->value}}</td>
        <td>{{$key->value}}</td>
    </tr>
    @endforeach
</table>



{{dd($carts)}}
</body>
@endsection
