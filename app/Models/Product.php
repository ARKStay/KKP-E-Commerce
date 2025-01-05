<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        // 'brand',
        'sizes_id',
        'color',
        // 'material',
        'price',
        'stock',
        'description',
        'image'
    ];


    protected $with = ['category', 'sizes'];

    public function scopeFilter($query, array $filters)
    {
        // Pastikan pencarian berdasarkan nama produk
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        });
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function sizes(): BelongsTo
    {
        return $this->belongsTo(Sizes::class, 'sizes_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function cartItems()
    {
        return $this->hasMany(Cart_Item::class);
    }
}
