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
            @foreach($carts as $key => $value)
                <tr>
                        <td>
                            {{$key+1}}
                        </td>
                    @foreach($value as $producto)
                        <td>{{$producto}}</td>
                    @endforeach
                        <td>borrar</td>
                </tr>
                @endforeach
</body>
@endsection
