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

    public function store(Request $request)
    {        
     //
    }
}
