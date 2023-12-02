<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model {
    use HasFactory;
    protected $fillable = [
        'stock'
    ];

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
