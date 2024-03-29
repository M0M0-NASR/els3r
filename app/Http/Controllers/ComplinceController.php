<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Complince;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComplinceRequest;
use Illuminate\Database\UniqueConstraintViolationException;

class ComplinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $dataChart = Complince::with('product')->select('product_id', \DB::raw('COUNT(*) as count'))
        ->groupBy('product_id')
        ->orderByRaw('count')
        ->limit('3')->get();

        // dd($dataChart);
        // dd($dataChart->toArray());
        //       data: [{x: 'Sales', y: 20}, {x: 'Revenue', y: 10}]

        return view('complince.index' , compact('dataChart'));
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
        $data = $request->safe()->merge(['status' => "يتم النظر", 'id' => uuid_create(), 'number' => fake()->randomNumber(9)]);

        try {
            $complinceModel = Complince::create($data->toArray());
        } catch (\Exception $e) {
            throw $e;
            if ($e instanceof UniqueConstraintViolationException) {
                $request->session()->flash('alert', 'لقد قمت  بهذه الشكاوي من قبل');
                return redirect()->back();
            }
        }

        request()->session()->flash('alert', 'تم تسجيل الشكاوي بنجاح ,سوف يتم التحقق منها ف اقرب وقت');

        return redirect()->route('complince.print')->with('complince', $complinceModel);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $number)
    {
        //
        $complince = Complince::with('product')->where('number', $number)->first();
        return view('complince.show', compact('complince'));

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

    public function search(Request $request)
    {
        $column = null;
        $value = null;
        //
        if ($request->has('number')) {
            $request->validate(
                [
                    'number' => "required|numeric|exists:complinces,number"
                ],
                [
                    "required" => "ادخل رقم الشكاوي هنا",
                    "numeric" => "ادخل رقم الشكاوي بشكل صحيح",
                    "exists" => "لا يوجد شكاوي",
                ]
            );
            $column = 'number';
            $value = $request->number;
        }

        if ($request->has('ssn')) {
            $request->validate([
                'ssn' => "required|numeric|digits:14"
            ], [
                "ssn.digits" => "ادخل رقم قومي مكون من 14 رقم",
                "required" => "ادخل الرقم القومي هنا",
            ]);
            $column = 'ssn';
            $value = $request->ssn;
        }

        $complince = Complince::with('product')->where($column, $value)->limit(5)->get();

        if (count($complince) == 1) {
            $complince = $complince->first();
            return view('complince.show', compact('complince'));
        }

        return view('complince.index', compact('complince'));
    }

    public function print()
    {
        $complince = request()->session()->get('complince');
        return view("complince.print", compact('complince'));
    }

}
