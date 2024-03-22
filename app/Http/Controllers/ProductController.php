<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar\Facades\Debugbar;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::authenticate())
        {
            $products = Product::
            get(['id', 'slug', 'name', 'img_cover' ,  'description', 'last_price', 'current_price', 'updated_at', 'category_id' ]);
            return view("product.index", compact("products"));
        }
        //
        $products = Product::
            get(['id', 'slug', 'name', 'img_cover' ,  'description', 'last_price', 'current_price', 'updated_at', 'category_id'])
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
        $categories = Category::all('name' , 'id');
        return view('product.create' ,compact( 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
        $data = $request->validated();
        
        if($request->file('img_cover'))
        {
            $data['img_cover'] = $request->file('img_cover')->store('products');
        }
        
        try
        {
            Product::create($data);
            request()->session()->flash('alert', 'تم الاضافة بنجاح');

        }
        catch( Exception $e)
        {
            request()->session()->flash('alert', ' خطاء اثناء الاضافة حاول مرة اخري');

        }
        finally
        {

            return redirect()->route('product.create');
     
        }
        
        


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
