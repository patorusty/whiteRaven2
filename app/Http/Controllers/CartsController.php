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
        $carts = session('carts');
        $productlist = $carts->implode('code', ' , ');
        $pricelist = $carts->implode('price', ' , ');

        $precio = $carts->pluck('totalprice');
        $final = collect($precio)->sum();

        if ($carts === null){
            return view('home');
        } else {
            return view('cart', ['carts' => session('carts'),
                                'productlist' => $productlist,
                                'final' => $final
            ]);
        }

    }


    public function store(Request $request)
    {
        $carts = session('carts');

        if ($carts === null){
            $nro = 1;
        } else{
            $nro = session('carts')->count()+1;
        }

        $cartarray = ([
            'id' => $nro,
            'code' => $request->input('code'),
            'name'=> $request->input('name'),
            'quantity'=> $request->input('quant'),
            'price'=> $request->input('price'),
            'totalprice'=> $request->input('price') * $request->input('quant'),
        ]);

        if (!session('carts')) {
            session(['carts'=>collect()]);    
        } 

        session('carts')->push($cartarray);
        
        return redirect()->back();

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
    // public function destroy(Cart $cart)
    // {
    //     session('carts')->delete();
    // }

    public function destroy($id)
    {
        foreach(session('carts') as $key => $value){
            if ($value['id'] == $id) {
                session('carts')->forget($key);
            }
        }
        return redirect('cart');

    }
}
