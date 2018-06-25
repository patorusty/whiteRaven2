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
                            @for($i = 1; $i <= (count ($carts, 1)); $i++)
                            {{ $i}}
                            @endfor
                        </td>
                    @foreach($value as $producto)
                        <td>{{$producto}}</td>
                    @endforeach
                        <td>borrar</td>
                </tr>
                @endforeach
</body>
@endsection
