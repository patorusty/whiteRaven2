<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Product;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::All();
        return view('subcategories.index', compact('subcategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subcategories')->with('subcategories', SubCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategoriesController  $subCategoriesController
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = SubCategory::find($id);
        $products = $subcategory->products;

        return view('subcategories.show', compact('products','subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategoriesController  $subCategoriesController
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategoriesController $subCategoriesController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategoriesController  $subCategoriesController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategoriesController $subCategoriesController)
    {
        //
    }

    public function storeSubCategories(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:sub_categories',
            'category' => 'required',
        ]);

        $category = SubCategory::create([
            'name'=> $request->input('name'),
            'parent_id'=> $request->input('category'),
        ]);

        $categories = SubCategory::All();

        return redirect()->route('admin.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategoriesController  $subCategoriesController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $product = \App\SubCategory::find($id);
        $product->delete();
        return redirect('admin');
        }
}
