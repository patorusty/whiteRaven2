<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $orders = DB::table('orders')
        ->where('user_id', $id)
        ->get();

        $productos = [];
        foreach ($orders as $order) {
            $productos = $orders->pluck('product_id');
        }
        foreach ($productos as $key => $value) {
            $product[] = explode(" , ", $value);
        }

        foreach($product as $index =>  $unidad) {
            $orders[$index]->productos = [];

            foreach ($unidad as $key => $productoFinal) {
                $orders[$index]->productos[] = \App\Product::find($productoFinal);
            }
        }

        if (!auth()->check()){
            return redirect()->route('login');
        } elseif($orders == null && $product == null){
        
            return view('profile', ['users' => Auth::user()]);
        }else{
            return view('profile', ['users' => Auth::user(),
                                    'orders' => $orders,
                                    'product' => isset($product) ? $product : null,
            ]);
        }
    }
}
