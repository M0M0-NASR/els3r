



@extends('layouts.app')

@section('content')

<div class="div">
    <h2>الاكثر شكاوي</h2>
    <canvas id="mostComplinceChart" class="border">
    </canvas>
</div>


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

@if(isset($complince))
<table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">رقم الشكاوي</th>
        <th scope="col">المنتج </th>
        <th scope="col">المحل</th>
        <th scopescope="col">عرض</th>
        
      </tr>
    </thead>
    <tbody class="table-group-divider">
        @php
            $i = 1;
        @endphp
      @foreach ($complince as $oneComplince  )
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$oneComplince->number}}</td>
        <td>{{$oneComplince->product->name}}</td>
        <td>{{$oneComplince->shop_name}}</td>
        <td>
            <a href="{{route('complince.show' , $oneComplince->number)}}" class="btn btn-success">
                عرض</a>
        </td>    
    </tr>
      @endforeach
                    
    </tbody>
  </table>

@endif


@endsection


@section('scripts')
<script >
    var chartData = {!! json_encode($dataChart) !!};
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="module" src="{{asset('assets/js/complinceChart.js')}}"></script>
@endsection