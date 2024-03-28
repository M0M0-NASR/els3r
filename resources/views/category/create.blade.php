@extends('layouts.app')

@section('content')
<nav>
    <a href="{{route('product.create')}}" class="btn btn-success my-2">
      اضافة منتج
      <svg width="18" class="mx-1 " fill="#D89216" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg> </a>
      <a href="{{route('category.create')}}" class="btn btn-success my-2">
        اضافة قسم
        <svg width="18" class="mx-1 " fill="#D89216" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg> </a>
    
</nav>

@if (session('alert'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>System Message!</strong> {{session('alert')}}.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<form method="POST" enctype="multipart/form-data" action="{{route('category.store')}}" class="row g-3  border rounded p-2 my-2">
  @csrf
  @method('post')  
    <div class="col-12">
      <label for="inputEmail4" class="form-label">اسم القسم</label>
      <input name="name" value="{{old('name')}}" type="text" id="inputEmail4" placeholder="أدخل اسم المنتج"
        class="form-control @error('full_name') is-invalid @enderror">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
      <label for="inputAddress2" class="form-label">صورة للقسم</label>
      <input name="img_cover" type="file" id="inputAddress2" placeholder="اختار صورة للمنتج"
      class="form-control @error('img_cover') is-invalid @enderror">
      @error('img_cover')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>

    <div class="submit">
      <button type="submit" class="btn btn-success color-main w-100">حفظ</button>
    </div>

</form> 
    
@endsection