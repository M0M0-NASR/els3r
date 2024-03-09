<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::
            get(['id', 'slug', 'name', 'description', 'last_price', 'current_price', 'updated_at', 'category_id'])
            ->groupBy('category_id');


        // dd($products);
// 
        return view("product.index", compact("products"));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //
        $dataChart = Product::where('slug', $slug)->first()->ProductPrices()->pluck('price', 'updated_at');
        $product = Product::where('slug', $slug)->first();
        
        // Assuming you have a model named Compliance for the table
        $complianceCounts = Product::where('slug', $slug)->first()->
            complinces()
            ->groupBy(\DB::raw('DATE(created_at)'))
            ->select(\DB::raw('DATE(created_at) as date'), \DB::raw('COUNT(*) as count'))
            ->pluck('count' , 'date');

        return view('product.show', compact('dataChart', 'product' , 'complianceCounts'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
