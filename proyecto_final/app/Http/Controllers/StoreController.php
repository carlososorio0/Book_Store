<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;



class StoreController extends Controller
{
    public function index()
    {
        $products = Products::all();
        //dd($products);
        return view('store.index', compact('products'));
    }

    public function show($author)
    {
        $products = products::where('author', $author)->first();
        //dd($products);

        return view('store.show', compact('products'));
    }
}
