<?php

namespace App\Models;

use App\Models\ProductPrices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "name",
        "description",
        "last_price",
        "current_price",
        "category_id"
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function productprices()
    {
        return $this->hasMany(ProductPrices::class);
    }

}
