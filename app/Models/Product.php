<?php

namespace App\Models;

use App\Models\ProductPrices;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "name",
        "description",
        "img_cover",
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
    public function complinces()
    {
        return $this->hasMany(Complince::class);
    }

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getUpdatedAtAttribute($value)
    {

        $now = \Carbon\Carbon::parse(date('Y-m-d H:i:s', time()));
        $updatedAt = \Carbon\Carbon::parse($value);

        $times = [
            $updatedAt->diffInMinutes($now),
            $updatedAt->diffInHours($now),
            $updatedAt->diffInDays($now),
            $updatedAt->diffInWeeks($now)
        ];

        $showTime = null;
        $datesPeriod = ['دقيقة' , 'ساعة' , 'يوما' , ' شهرا'];

        $i = 0;
        foreach ($times as $time) {
            if($time != 0) $showTime = $time . ' ' . $datesPeriod[$i];
            $i++;
        }


        return $showTime;
    }
}
