<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Complince;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComplinceRequest;
use App\Exceptions\DuplicateComplinceException;
use Illuminate\Database\UniqueConstraintViolationException;

class ComplinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        return view('complince.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['product_id'] = request()->query('product_id');
        $data['product_name'] = Product::select('name')->find($data['product_id'])->name;

        return view('complince.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComplinceRequest $request)
    {
        //
        $request->validated();
        $data = $request->safe()->merge(['status'=>"يتم النظر"]); 

        try
        {
            Complince::create($data->toArray());
        }

        catch(\Exception $e)
        {
            if($e instanceof UniqueConstraintViolationException)
            {
                $request->session()->flash('alert' , 'لقد قمت  بهذه الشكاوي من قبل');
      
                return redirect()->back();
            }
        }
        
        request()->session()->flash('alert', 'تم تسجيل الشكاوي بنجاح ,سوف يتم التحقق منها ف اقرب وقت');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
