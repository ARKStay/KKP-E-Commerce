<?php

namespace App\Http\Controllers;

use App\Models\Sizes;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::filter($request->only('search'))->get();
        return view('dashboard.products.index', ['title' => 'Product List', 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Products.create', [
            'title' => 'Add Product',
            'categories' => Category::all(),
            'sizes' => Sizes::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|file|max:30720',
            'sizes_id' => 'required|exists:sizes,id',
            'color' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        Product::create($validatedData);

        return redirect('/dashboard/products')->with('Success', 'New product has been added!');
    }

    public function show(Product $product)
    {
        return view('dashboard.Products.show', [
            'product' => $product,
            'title' => 'Show Product',
            'categories' => Category::all(),
            'sizes' => Sizes::all()
        ]);
    }

    public function edit(Product $product)
    {
        return view('dashboard.Products.edit', [
            'title' => 'Edit Product',
            'product' => $product,
            'categories' => Category::all(),
            'sizes' => Sizes::all()
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|file|max:30720',
            'sizes_id' => 'required|exists:sizes,id',
            'color' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        $product->update($validatedData);

        return redirect('/dashboard/products')->with('Success2', 'Category updated successfully!');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete();
        return redirect('/dashboard/products')->with('Success', 'Product has been deleted!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);

        // Tambahkan nomor acak di akhir slug
        $randomNumber = rand(1000, 9999); // Nomor acak antara 1000 dan 9999
        $slug .= '-' . $randomNumber;

        return response()->json(['slug' => $slug]);
    }
}
