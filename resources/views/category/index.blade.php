@extends('layouts.app')

@section('content')
    <!-- Swiper -->
    <div class="products rounded mb-4">
        <h5 class="py-2 ">الأكثر شيوعا</h5>
        <div class="swiper mySwiper p-2">
            <div class="swiper-wrapper">
                
                @foreach ($categories as $category)
                <div class="swiper-slide my-2 rounded-2 d-flex flex-column p-1">
                    <a href="{{ route('category.show' , $category->id)}}">
                        <img class="img-fluid" src="{{asset('assets/img/download.jpg')}}" alt="">
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


