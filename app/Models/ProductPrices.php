<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrices extends Model
{
    use HasFactory;
    protected $fillable = [
        "price",
        "updated_at"
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function getUpdatedAtAttribute($value)
    {
        $diffInHours = $value->diffInHours(time());
        dd($diffInHours);
        return date("Y-m-d", strtotime($diffInHours));
    }
}
