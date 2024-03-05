



@extends('layouts.app')

@section('content')
<canvas id="myChart" class="border"></canvas>

<div class="search">

    <form class="mb-3" action="{{route('complince.search')}}">
        <div>
            <label for="" class="mb-2">تتبع حالة الشكاوي</label>
            <div class="d-flex">
                <input name="number" type="text" class="form-control" placeholder="اكتب رقم الشكاوي">
                <input type="submit" class="btn btn-success" value="ابحث">
            </div>
            @error('number')
                {{$message}}
            @enderror                   
        </div>
    </form>
    
    <form action="{{route('complince.search')}}">
        <div>
            <label for="" class="mb-2">ابحث عن شكاواك</label>
            <div class="d-flex">
                <input name="ssn" type="text" class="form-control" placeholder="اكتب الرقم القومي">
                <input type="submit" class="btn btn-success" value="ابحث">
            </div>
            @error('ssn')
                {{$message}}
            @enderror            
        </div>
    </form>

</div>



@endsection