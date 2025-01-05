<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Banner;
use Illuminate\Http\Request;

class UserIndexController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'title' => 'Home',
            'products' => Product::with(['category'])->inRandomOrder()->take(8)->get(),
            'banners' => Banner::where('status', 'on')->get()
        ]);
    }

    public function detail($slug)
    {
        $product = Product::with('category')->where('slug', $slug)->firstOrFail();
    
        return view('user.detail', [
            'title' => $product->name,
            'product' => $product,
        ]);
    }
    
}
