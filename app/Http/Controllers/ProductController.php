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
        $categories = Category::with('products')->limit(10)->get();

        // dd($categories[2]);

        return view("product.index", compact("categories"));
    }

    public function productsPage()
    {
        return view('product.productsPage');
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
    public function show(string $id)
    {
        //

        // dd(Product::find($id)->ProductPrices()->pluck('price' , 'updated_at'));
        $dataChart = Product::find($id)->ProductPrices()->pluck('price', 'updated_at');
        $product = Product::find($id);

        return view('product.show', compact('dataChart', 'product'));

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
