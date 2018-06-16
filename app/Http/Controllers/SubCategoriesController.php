<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use App\SubCategoryController;

class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subcategory.index');

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
     * @param  \App\SubCategoryController  $subCategoryController
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategoryController $subCategoryController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategoryController  $subCategoryController
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategoryController $subCategoryController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategoryController  $subCategoryController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategoryController $subCategoryController)
    {
        //
    }

    public function storeSubCategories(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
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
     * @param  \App\SubCategoryController  $subCategoryController
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategoryController $subCategoryController)
    {
        //
    }
}
