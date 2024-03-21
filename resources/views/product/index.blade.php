@extends('layouts.app')

@section('main_active')
active-link
@endsection


@section('content')
@guest
  
<div class="section text-color rounded mb-4">
    <h5 class="py-2 ">الأكثر شيوعا</h5>
    <div class="swiper mySwiper rounded p-4">
        <div class="swiper-wrapper">
          {{-- @dd() --}}
          @foreach ($products[3] as $product )
          
          <div class="swiper-slide">
            <div class="card h-100  rounded">
            <img src="{{$product->img_cover }}" alt="" srcset="">
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
            <div class="card-footer">
              <small class="" >اخر تحديث منذ {{$product->updated_at}} </small>
            </div>
          </div> 
          </div>
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<div class="section text-color rounded mb-4">
  <h5 class="py-2">البقوليات</h5>
  <div class="swiper mySwiper rounded p-4">
      <div class="swiper-wrapper">
        @foreach ($products[1] as $product )
          
          <div class="swiper-slide">
            <div class="card h-100  rounded">
              <img src="{{$product->img_cover }}" alt="" srcset="">
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
                <a href="{{route('complince.create')}}" class="col-5 btn btn-outline-danger">ابلاغ</a>
              </div>

            </div>
            <div class="card-footer">
              <small class="" >اخر تحديث منذ {{$product->updated_at}} </small>
            </div>
          </div> 
          </div>
          @endforeach

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</div>
<div class="section text-color rounded mb-4">

  <h5 class="py-2">منتجات ألبان</h5>
  <div class="swiper mySwiper rounded p-4">
      <div class="swiper-wrapper">
        @foreach ($products[1] as $product )
          
          <div class="swiper-slide">
            <div class="card h-100  rounded">
              <img src="{{$product->img_cover }}" alt="" srcset="">
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
            <div class="card-footer">
              <small class="" >اخر تحديث منذ {{$product->updated_at}} </small>
            </div>
          </div> 
          </div>
          @endforeach

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</div>
<div class="section text-color rounded mb-4">
  <h5 class="py-2">عطارة</h5>
  <div class="swiper mySwiper rounded p-4">
      <div class="swiper-wrapper">
        @foreach ($products[3] as $product )
          
          <div class="swiper-slide">
            <div class="card h-100  rounded">
              <img src="{{$product->img_cover }}" alt="" srcset="">
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
                <a href="{{route('complince.create')}}" class="col-5 btn btn-outline-danger">ابلاغ</a>
              </div>

            </div>
            <div class="card-footer">
              <small class="" >اخر تحديث منذ {{$product->updated_at}} </small>
            </div>
          </div> 
          </div>
          @endforeach

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</div>
@endguest


@auth

<nav>
  <a href="{{route('product.create')}}" class="btn btn-success my-2">
    اضافة منتج
    <svg width="18" class="mx-1 " fill="#D89216" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg> </a>
    <a href="{{route('category.create')}}" class="btn btn-success my-2">
      اضافة قسم
      <svg width="18" class="mx-1 " fill="#D89216" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg> </a>
  
</nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">المنتج</th>
      <th scope="col">القسم</th>
      <th scope="col"> السعر الحالي</th>
      <th scope="col">السعر القديم</th>
      <th scope="col">اخر تحديث</th>
      <th scope="col">الشكاوي</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

    {{-- @dd($products) --}}
    @foreach ($products as $product)
      
    <tr class="align-middle">
      <th scope="row" ></th>
      <td >{{$product->name}}</td>
      <td>{{$product->category->name}}</td>
      <td>{{$product->current_price}}</td>
      <td>{{ $product->last_price}}</td>
      <td>{{$product->updated_at}}</td>
      <td></td>
      <td class="d-flex gap-1">
        <a href="{{route('product.edit' , $product['slug'])}}" class="btn btn-success">
          <svg width="18" fill="#D89216" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
        </a>
        <form action="{{route('product.destroy' , $product['slug'])}}" method="POST">
          @csrf
          @method('delete')
          <button class="btn btn-danger">
            <svg fill="#D89216" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endauth


@endsection

@section('script')
    {{-- {{asset('assets/js/swiper.mjs')}} --}}
@endsection


