<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::All();
        $categories = Category::All();
        $brands = Brand::All();
        return view('products', 
                    ['categories' => $categories, 
                     'products' => $products,
                     'brands' => $brands,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $folder = 'fotoProducto';

        // $path = $request['img']->storePublicly($folder);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'category' => 'required',
            'brand' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'description' => 'required|string|max:255',
            'codigo' => 'required|integer',
            'img' => 'required|image'
        ]);


        $product = Product::create([
            'name'=> $request->input('name'),
            'category_id'=> $request->input('category'),
            'brand_id'=> $request->input('brand'),
            'price'=> $request->input('price'),
            'stock'=> $request->input('stock'),
            'description'=> $request->input('description'),
            'codigo'=> $request->input('codigo'),
            // 'img' => $path
        ]);

        $products = Product::All();

        return redirect()->route('products.add');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
