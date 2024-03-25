<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ProductPrices;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check())
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
            $product = Product::create($data);
            ProductPrices::create([
                "price" => $product->current_price,
                "product_id" => $product->id,
            ]);
            request()->session()->flash('alert', 'تم الاضافة بنجاح');

        }
        catch( \Throwable $e)
        {   
            // throw $e;
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
    public function edit(string $slug)
    {
        //
        $categories = Category::all('name' , 'id');
        $product = Product::where('slug' , $slug)->first();
        // dd($product);
        return view('product.edit' , compact('categories' , 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, string $slug)
    {
        //
        $data = $request->validated();
        

        $productModel = Product::where('slug' , $slug)->first();

        if($request->file('img_cover'))
        {
            $data['img_cover'] = $request->file('img_cover')->store('products');

            $img_cover_path = $productModel->img_cover ;
             
            Storage::delete($img_cover_path);
        }

        try
        {
            $productModel->update($data);
            ProductPrices::create([
                "price" => $productModel->current_price,
                "product_id" => $productModel->id,
            ]);
            request()->session()->flash('alert', 'تم الاضافة بنجاح');

        }
        catch( \Throwable $e)
        {   
            // throw $e;
            request()->session()->flash('alert', ' خطاء اثناء التعديل حاول مرة اخري');

        }
        finally
        {

            return redirect()->route('product.update' , $productModel->slug);
     
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        //
        $productModel = Product::where('slug' , $slug)->first();


        $img_cover_path = $productModel->img_cover;
        Storage::delete($img_cover_path);

        $productModel->delete();

        return redirect()->route('product.index');
       
    }


}
