<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductPrices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource For Admin and User.
     */
    public function index()
    {
        // Return Products for Admin View
        if (Auth::check()) {
            $products = Product::
            get(['id', 'slug', 'name', 'img_cover', 'description', 'last_price', 'current_price', 'updated_at', 'category_id']);
            
            return view("product.index", compact("products"));
        }
        // Return Products for User View
        $products = Product::
            get(['id', 'slug', 'name', 'img_cover', 'description', 'last_price', 'current_price', 'updated_at', 'category_id'])
            ->groupBy('category_id');

        return view("product.index", compact("products"));
    }

    /**
     * Show the form for creating a new Product.
     */
    public function create()
    {
        // get All available Categories from database
        $categories = Category::all('name', 'id');
        
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // Validate Inputs 
        $data = $request->validated();

        //  Validate and Store img
        if ($request->file('img_cover')) {
            $data['img_cover'] = $request->file('img_cover')->store('products');
        }

        // Save Product Model in Database
        try {
            $product = Product::create($data);
            //  Save Product Prices in Database
            ProductPrices::create([
                "price" => $product->current_price,
                "product_id" => $product->id,
            ]);
            
            request()->session()->flash('alert', 'تم الاضافة بنجاح');

        } catch (\Throwable $e) {
            // throw $e;
            request()->session()->flash('alert', ' خطاء اثناء الاضافة حاول مرة اخري');

        } finally {

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
            ->pluck('count', 'date');

        return view('product.show', compact('dataChart', 'product', 'complianceCounts'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        //
        $categories = Category::all('name', 'id');
        $product = Product::where('slug', $slug)->first();
        // dd($product);
        return view('product.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, string $slug)
    {
        //
        $data = $request->validated();


        $productModel = Product::where('slug', $slug)->first();

        if ($request->file('img_cover')) {
            $data['img_cover'] = $request->file('img_cover')->store('products');

            $img_cover_path = $productModel->img_cover;

            Storage::delete($img_cover_path);
        }

        try {
            $productModel->update($data);
            ProductPrices::create([
                "price" => $productModel->current_price,
                "product_id" => $productModel->id,
            ]);
            request()->session()->flash('alert', 'تم الاضافة بنجاح');

        } catch (\Throwable $e) {
            // throw $e;
            request()->session()->flash('alert', ' خطاء اثناء التعديل حاول مرة اخري');

        } finally {

            return redirect()->route('product.update', $productModel->slug);

        }


    }

    /**
     * Remove the specified resource from storage or Database.
     */
    public function destroy(string $slug)
    {
        //
        try {
            // get Product With img_cover column
            $productModel = Product::where('slug', $slug)->first('img_cover');

            // delete Cover_img from  Storage 
            $img_cover_path = $productModel->img_cover;
            Storage::delete($img_cover_path);

            // delete Product Model form Database
            Product::where('slug' , $slug)->delete();
            
            request()->session()->flash('alert', 'تم الحذف بنجاح');

        } catch (\Throwable $e) {
            // throw $e;
            request()->session()->flash('alert', 'خطاء اثناء الحذف حاول مرة اخري');

        } finally {

            // Redirect after try-catch 
            return redirect()->route('product.index');

        }

    }

}
