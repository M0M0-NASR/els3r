<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\ProductPrices;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     */
    public function created(Product $product): void
    {
        //
        ProductPrices::create(
            [
                "product_id" => $product->id,
                "product_price" => $product->current_price,
            ]
        );
    }

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        //
        ProductPrices::update(
            [
                "product_id" => $product->id,
                "product_price" => $product->current_price,
            ]
        );
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     */
    public function restored(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        //
    }
}
