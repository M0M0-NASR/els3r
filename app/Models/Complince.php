<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complince extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "full_name",
        "ssn",
        "product_id",
        "shop_name",
        "government",
        "shop_address",
        "content",
        "status",
        "number"
    ];


    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d' , strtotime($value));
    }

    public function getStatusAttribute($value)
    {
        $status = ['يتم النظر' =>' يتم النظر ف الشكاوي المقدمة'
        ,'معلقة'=>'لم تراجع بعد' 
        , 'تم الحل'=>'تم حل الشكاوي']; 
        return $status[$value];
        
    }
}
