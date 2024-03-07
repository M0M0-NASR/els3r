



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

@if(isset($complince)))

<table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">رقم الشكاوي</th>
        <th scope="col">المنتج </th>
        <th scope="col">المحل</th>
        <th scopescope="col">عرض</th>
        <th scopescope="col">طباعة</th>
        
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
            <a href="{{route('complince.index')}}" class="btn btn-success">
                عرض</a>
        </td>
        <td>
            <a  class="btn btn-primary">
                <svg width='20' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                    اطبع
            </a>
        </td>
    </tr>
                    @endforeach
                    
    </tbody>
  </table>

@endif


@endsection