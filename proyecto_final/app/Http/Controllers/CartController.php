<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;

class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    //show cart

        public function show()
        {

            $cart = \Session::get('cart');
            $total = $this->total();
            return view('store.cart', compact('cart', 'total'));
            
        }

    // Add item

                        public function add(Products $products)
                        {
                            $cart =\Session::get('cart');
                            $products->quantity = 1;
                            $cart[$products->author] = $products;
                            \Session::put('cart', $cart);

                            return redirect()->route('cart-show');
                        }

    // Delete item

    public function delete(products $products)
    {
        $cart = \Session::get('cart');
        unset($cart[$products->author]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    // Edit item 

    // update item

    public function update(Products $products, $quantity)
    {
        $cart = \Session::get('cart');
        $cart[$products->author]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    

    //Trash cart


    public function trash()
    {
        \Session::forget('cart');

        return redirect()->route('cart-show');        
    }

    //Total

    private function total()
    {
        $cart = \Session::get('cart');
        $total  = 0;
        foreach($cart as $item){
            $total += $item->price * $item->quantity;

        }
        return $total;
    }


//DETALLE DEL PEDIDO 

public function orderDetail()
{
    if(count(\Session::get('cart'))<=0) return redirect()->route('home');
    $cart = \Session::get('cart');
    $total = $this->total();


    return view('store.order-detail', compact('cart', 'total'));      
}

}

