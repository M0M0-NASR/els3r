<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "name",
        "description",
        "last_price",
        "current_price"
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
