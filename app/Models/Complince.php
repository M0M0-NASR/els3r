<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complince extends Model
{
    use HasFactory;

    protected $fillable = [
        "full_name",
        "ssn",
        "product_id",
        "shop_name",
        "government",
        "shop_address",
        "content",
        "status"
    ];
}
