// Foreach de imagenes 
@foreach (explode(" , ", $product->img)  as $value)
    <img src='{{asset('images/' . $value)}}' width="100" alt="" class="img-product rounded" alt="">
@endforeach

//// Funciones para juntar dos imagenes en una coleccion
$img1 = $request->file('img1')->storePublicly($folder, 'assets');
        if (!$request->file('img2')){
            $img2 = " ";
        } elseif ($request->file('img2')) {
            $img2 = $request->file('img2')->storePublicly($folder, 'assets');
        } 
        $imagenes = collect([$img1, $img2]);

        $array = $imagenes->implode(" , ");