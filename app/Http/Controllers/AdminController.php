<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Brand;
use App\Product;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        $subcategories = SubCategory::All();
        $brands = Brand::All();
            return view('admin', 
                        ['categories' => $categories, 
                        'products' => $products,
                        'subcategories' => $subcategories,
                        'brands' => $brands,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::All();
        $categories = Category::All();
        $brands = Brand::All();
        $subcategories = SubCategory::All();
            return view('products', 
                        ['categories' => $categories, 
                        'products' => $products,
                        'subcategories' => $subcategories,
                        'brands' => $brands,]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProducts(Request $request)
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
            // 'img' => 'required|image'
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

        return redirect()->route('admin.index');
    }




    public function storeBrands(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $brand = Brand::create([
            'name'=> $request->input('name'),
        ]);

        $brands = Brand::All();

        return redirect()->route('admin.index');
    }

    public function storeCategories(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = Category::create([
            'name'=> $request->input('name'),
        ]);

        $categories = Category::All();

        return redirect()->route('admin.index');

    }

    public function storeSubCategories(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
        ]);

        $category = Category::create([
            'name'=> $request->input('name'),
            'parent_id'=> $request->input('category'),
        ]);

        $categories = Category::All();

        return redirect()->route('admin.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
