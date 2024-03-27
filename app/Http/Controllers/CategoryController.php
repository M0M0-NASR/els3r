<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::withCount('products')->get();

        // dd($categories);
        return view('category.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //

        $data  = $request->validated();

        if($request->has('img_cover'))
        {
            $data['img_cover'] =  $request->file('img_cover')->store('categories');
        }

        try
        {
            Category::create($data);
            request()->session()->flash('alert' , 'تم الاضافة بنجاح');
        
        }
        catch(\Throwable $e)
        {
            throw $e;
            request()->session()->flash('alert' , 'حدث خطأ اثناء الاضافة, حاول مرة اخري');

        }
        finally
        {
            return redirect()->route('category.index');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //
        $category = Category::where('slug' , $slug)->first()->products()->paginate('15');

        // dd($category);
        return view('category.show' , compact('category'));
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
