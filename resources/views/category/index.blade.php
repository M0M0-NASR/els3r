@extends('layouts.app')


@section('products_active')
active-link
@endsection


@section('content')

@auth
    

<nav>
    <a href="{{route('product.create')}}" class="btn btn-success my-2">
        اضافة منتج
        <svg width="18" class="mx-1 " fill="#D89216" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg> </a>
        <a href="{{route('category.create')}}" class="btn btn-success my-2">
            اضافة قسم
            <svg width="18" class="mx-1 " fill="#D89216" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg> </a>
            
        </nav>
  
@if(session('alert'))
  
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>System Message!</strong> {{session('alert')}}.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif  
@endauth


<!-- Swiper -->
<div class="products rounded mb-4">
    <h5 class="py-2 ">الأكثر شيوعا</h5>
    <div class="swiper mySwiper p-2">
        <div class="swiper-wrapper">
            
            @foreach ($categories as $category)
            <div class="swiper-slide my-2 rounded-2 d-flex flex-column p-1">
                <a href="{{ route('category.show' , $category->slug)}}">
                    <img class="img-fluid" src="{{$category->img_cover}}" alt="">
                    <div class="d-flex justify-content-between align-items-center mt-2 mx-2" >
                        <h4 class="text-end ">{{ $category->name}}</h4>
                        <h6 class=" text-white-50">{{ $category->products_count}} منتج</h6>
                    </div>
                </a>          
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        {{-- <div class="swiper-pagination"></div> --}}
        </div>
</div>
<!-- Swiper JS -->
 
@endsection


