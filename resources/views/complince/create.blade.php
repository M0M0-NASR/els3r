@extends('layouts.app')

@section('complince_active')
active-link
@endsection

@section('content')

@if (session('alert'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>System Message!</strong> {{session('alert')}}.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<form method="POST" action="{{route('complince.store')}}" class="row g-3  border rounded p-2">
  @csrf
  @method('post')  
  <input type="hidden" readonly value="id">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">صاحب الشكاوي</label>
      <input name="full_name" value="{{old('full_name')}}" type="text" id="inputEmail4" placeholder="الاسم رباعي"
        class="form-control @error('full_name') is-invalid @enderror">
        @error('full_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    
    
      </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">رقم القومي</label>
      <input name="ssn" value="{{old('ssn')}}" type="text" id="inputPassword4" placeholder="ادخل 14 رقم"
      class="form-control @error('ssn') is-invalid @enderror">
      @error('ssn')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror



    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label"readonly >اسم المنتج</label>
      <input type="text" value="{{$data['product_name']}}" id="inputAddress" placeholder="مثل: ارز , مكرونة"
      class="form-control @error('product_id') is-invalid @enderror" readonly>
      <input type="hidden" name="product_id" value="{{$data['product_id']}}" class="form-control" id="inputAddress" placeholder="مثل: ارز , مكرونة">
      @error('product_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">اسم المحل</label>
      <input name="shop_name" value="{{old('shop_name')}}" type="text" id="inputAddress2" placeholder="اسم المحل - المنطقة"
      class="form-control @error('shop_name') is-invalid @enderror">
      @error('shop_name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>
    <div class="col-md-12">
      <label for="inputCity" class="form-label">المحافظة</label>
      <input name="government" value="{{old('government')}}" type="text" id="inputCity" placeholder="المحافظة"
      class="form-control @error('government') is-invalid @enderror">
      @error('government')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-md-12">
        <label for="inputCity" class="form-label">العنوان بالتفصيل</label>
        <input name="shop_address" value="{{old('shop_address')}}" type="text" id="inputCity" placeholder=""
        class="form-control @error('shop_address') is-invalid @enderror">
        @error('shop_address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="exampleFormControlTextarea1" class="form-label">محتوي الشكاوي</label>
        <textarea name="content"   id="exampleFormControlTextarea1" rows="3" placeholder="اكتب شكواك"
        class="form-control @error('content') is-invalid @enderror">
        {{old('content')}}
        </textarea>
        @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
    </div>
    <div class="submit">
      <button type="submit" class="btn btn-success color-main w-100">تسجيل الشكاوي</button>
    </div>
  </form>
@endsection