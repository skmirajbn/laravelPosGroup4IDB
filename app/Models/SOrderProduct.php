<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SOrderProduct extends Model {
    use HasFactory;
    protected $fillable = [
        'sales_order_id',
        'product_id',
        'quantity'
    ];
    public function product() {
        return $this->belongsTo(ProductsModel::class);
    }
}
