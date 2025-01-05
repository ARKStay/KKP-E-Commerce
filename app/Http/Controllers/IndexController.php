<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Banner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Home',
            'products' => Product::with(['category'])->inRandomOrder()->take(8)->get(),
            'banners' => Banner::where('status', 'on')->get()
        ]);
    }

    public function product_detail($slug)
    {
        $product = Product::with('category')->where('slug', $slug)->firstOrFail();
    
        return view('product_detail', [
            'title' => $product->name,
            'product' => $product,
        ]);        
    }
    
}
