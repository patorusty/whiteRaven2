<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Brand;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;


class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('cart');
        return view('cart', ['carts' => session('carts')]);
        $carts = session('carts');

        // $carts = \Session::get('carts');
    }


    public function store(Request $request)
    {

        // $cart = (object)array(
        //     'name'=> $request->input('name'),
        //     'quantity'=> $request->input('quant'),
        //     'price'=> $request->input('price'),
        // );


        $cartarray = ([
            'name'=> $request->input('name'),
            'quantity'=> $request->input('quant'),
            'price'=> $request->input('price'),
        ]);
        $cart = collect($cartarray);
        session(['carts'=>$cart]);

        $carts = session('carts');
        return redirect()->route('cart.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('cart')->with('carts', Cart::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
