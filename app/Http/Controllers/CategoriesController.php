<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {

        return view('category.index');
    }

    public function listado()
    {
        return view('categories')->with('categories', Category::all());
    }

    public function create()
    {
        return view('categories')->with('categories', Category::all());
    }

    public function storeCategories(Request $request)
    {

        $this->validate($request, [
            'categories' => 'required',
        ]);

        $category = Category::create([
            'name'=> $request->input('categories'),
        ]);

        $categories = Category::All();

        return redirect()->route('admin.index');

    }

    public function store(Request $request)
    {        
     //
    }

    public function destroy($id) {
        $product = \App\Category::find($id);
        $product->delete();
        return redirect('admin');
        }
}
