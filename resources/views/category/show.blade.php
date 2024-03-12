

@extends('layouts.app')

@section('products_active')
active-link
@endsection


@section('content')
    <div class="category row text-color">
        @foreach ($category as $product )
          
          <div class="col-md-6 col-lg-4  rounded mb-4">
            <div class="card h-100  rounded shadow">
            <img src="{{$product->img_cover}}" class="rounded" alt="" srcset="">
            <div class="card-body">
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">أسم المنتج :</div>
                <p class=" text-start">{{$product->name}}</p>
              </div>
              
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">الوصف :</div>
                <p class=" text-start">{{$product->description}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر القديم :</div>
                <p class=" text-start">{{$product->current_price}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر الحالي :</div>
                <p class=" text-start">{{$product->last_price}}</p>
                {{-- <i class="fa-solid fa-arrow-down"></i> --}}
                <span>
                  @if ($product->last_price < $product->current_price)
                  <svg class="text-align-middle"  xmlns="http://www.w3.org/2000/svg" width="12px" fill="green" viewBox="0 0 384 512"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                    
                  @else
                  <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="red" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>                    
                  @endif
                </span>
              </div>
              <div class="row justify-content-around">
                <a href="{{route('product.show' , $product->slug)}}" class="col-5 btn btn-outline-success">عرض</a>
                <a href="{{route('complince.create' , ['product_id' => $product->id])}}" class="col-5 btn btn-outline-danger">ابلاغ</a>
              </div>

            </div>
            <div class="card-footer text-center">
              <small class="" >اخر تحديث منذ {{$product->updated_at}} </small>
            </div>
          </div> 
          </div>
          @endforeach


          <nav aria-label="Page navigation example">
            <ul class="pagination d-flex justify-content-center ">
              <li class="page-item">
                <a class="page-link" href="{{$category->previousPageUrl()}}" aria-label="السابق">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              @php
                    $current = $category->url($category->currentPage());
                    $i = 1;                
              @endphp

              
              @foreach ($category->links()->elements[0] as $page )
              
              <li class="page-item"><a class="page-link @if($current == $page)active @endif"
                 href=" {{$page}}">{{$i++}}</a></li>
              @endforeach
              <li class="page-item">
                <a class="page-link" href="{{$category->nextPageUrl()}}" aria-label="التالي">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
         
    </div>

    
@endsection