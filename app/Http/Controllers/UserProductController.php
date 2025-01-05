<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart_Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProductController extends Controller
{
    public function index()
    {
        // Ambil semua input dari request untuk diteruskan ke filter
        return view('user.products', [
            'title' => 'Our Products',
            'products' => Product::latest()->filter(request()->all())->get()
        ]);
    }

    public function cart(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();

        //validasi apakah melibihi stok
        if ($request->quantity > $product->stock) {
            return redirect('user/products/')->with('error', 'The requested quantity exceeds available stock.');
        }

        //cek validasi
        $check_cart = Cart::where('user_id', Auth::user()->id)->where('status', 'pending')->first();

        //simpan ke database carts
        if (empty($check_cart)) {
            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->status = 'pending';
            $cart->price = 0;
            $cart->save();
        }

        //simpan ke database cart_items
        $new_cart = Cart::where('user_id', Auth::user()->id)->where('status', 'pending')->first();

        //cek pesanan detail
        $check_cart_item = Cart_Item::where('product_id', $product->id)->where('cart_id', $new_cart->id)->first();
        if (empty($check_cart_item)) {
            $cart_item = new Cart_Item;
            $cart_item->product_id = $product->id;
            $cart_item->cart_id = $new_cart->id;
            $cart_item->quantity = $request->quantity;
            $cart_item->price = $product->price * $request->quantity;
            $cart_item->save();
        } else {
            $cart_item = Cart_Item::where('product_id', $product->id)->where('cart_id', $new_cart->id)->first();

            $cart_item->quantity = $cart_item->quantity + $request->quantity;

            //harga sekarang
            $new_cart_item_price = $product->price * $request->quantity;
            $cart_item->price = $cart_item->price + $new_cart_item_price;
            $cart_item->update();
        }

        //jumlah total
        $cart = Cart::where('user_id', Auth::user()->id)->where('status', 'pending')->first();
        $cart->price = $cart->price + $product->price * $request->quantity;
        $cart->update();


        return redirect('user/products/')->with('success', 'Product added to cart successfully.');
    }

    public function check_out()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->where('status', 'pending')->first();
        $cart_items = [];

        if (!empty($cart)) {
            $cart_items = Cart_Item::where('cart_id', $cart->id)->get();
        }

        return view('user.cart.index', compact('cart', 'cart_items'));
    }

    public function delete($id)
    {
        $cart_item = Cart_Item::where('id', $id)->first();

        $cart = Cart::where('id', $cart_item->cart_id)->first();
        $cart->price = $cart->price - $cart_item->price;
        $cart->update();

        $cart_item->delete();

        return redirect('user/cart')->with('success', 'Item successfully removed from your cart.');
    }

    public function confirm_check_out()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if (empty($user->address)) {
            return redirect('user/profile')->with('info', 'Please update your address before checking out.');
        }

        if (empty($user->phone)) {
            return redirect('user/profile')->with('info', 'Please update your phone number before checking out.');
        }

        return redirect('user/payment');
    }
}
