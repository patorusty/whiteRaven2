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

        $productos = $orders->pluck('product_id');
        foreach ($productos as $key => $value) {
            $product = explode(", ", $value);
            }

        if (!auth()->check()){
            return redirect()->route('login');
        } elseif($orders == null && $product == null){
            $orders = ('');
            $product = ('');
            return view('profile', ['users' => Auth::user()]);
        }else{
            return view('profile', ['users' => Auth::user(),
                                    'orders' => $orders,
                                    'product' => $product,
            ]);
        }
    }
}
