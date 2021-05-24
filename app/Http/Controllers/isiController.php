<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class isiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.homelayout',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
}
