<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cart_id',
        'total_price',
        'shipping_method',
        'image',
        'payment_status',
        'order_status',
    ];

    /**
     * Relasi dengan model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi dengan model Cart
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    /**
     * Relasi dengan model CartItem untuk mendapatkan barang di dalam order
     */
    public function cartItems()
    {
        return $this->hasMany(Cart_Item::class, Cart::class, 'id', 'cart_id');
    }
}
