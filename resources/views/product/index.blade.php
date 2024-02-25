@extends('layouts.app')

@section('content')

<div class="section text-color rounded mb-4">
    <h5 class="py-2 ">الأكثر شيوعا</h5>
    <div class="swiper mySwiper rounded p-4">
        <div class="swiper-wrapper">
          {{-- @dd() --}}
          @foreach ($categories[0]->products as $category )
          
          <div class="swiper-slide">
            <div class="card h-100  rounded">
            <img src="{{asset('assets/img/download.jpg')}}" alt="" srcset="">
            <div class="card-body">
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">أسم المنتج :</div>
                <p class=" text-start">{{$category->name}}</p>
              </div>
              
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">الوصف :</div>
                <p class=" text-start">{{$category->description}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر القديم :</div>
                <p class=" text-start">{{$category->current_price}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر الحالي :</div>
                <p class=" text-start">{{$category->last_price}}</p>
                {{-- <i class="fa-solid fa-arrow-down"></i> --}}
                <span>
                  @if ($category->last_price < $category->current_price)
                  <svg class="text-align-middle"  xmlns="http://www.w3.org/2000/svg" width="12px" fill="green" viewBox="0 0 384 512"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                    
                  @else
                  <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="red" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>                    
                  @endif
                </span>
              </div>
              <div class="row justify-content-around">
                <a href="" class="col-5 btn btn-outline-success">عرض</a>
                <a href="" class="col-5 btn btn-outline-danger">ابلاغ</a>
              </div>

            </div>
            <div class="card-footer">
              <small class="" >اخر تحديث منذ {{$category->updated_at}} ايام</small>
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
        @foreach ($categories[0]->products as $category )
          
          <div class="swiper-slide">
            <div class="card h-100  rounded">
            <img src="{{asset('assets/img/download.jpg')}}" alt="" srcset="">
            <div class="card-body">
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">أسم المنتج :</div>
                <p class=" text-start">{{$category->name}}</p>
              </div>
              
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">الوصف :</div>
                <p class=" text-start">{{$category->description}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر القديم :</div>
                <p class=" text-start">{{$category->current_price}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر الحالي :</div>
                <p class=" text-start">{{$category->last_price}}</p>
                {{-- <i class="fa-solid fa-arrow-down"></i> --}}
                <span>
                  @if ($category->last_price < $category->current_price)
                  <svg class="text-align-middle"  xmlns="http://www.w3.org/2000/svg" width="12px" fill="green" viewBox="0 0 384 512"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                    
                  @else
                  <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="red" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>                    
                  @endif
                </span>
              </div>
              <div class="row justify-content-around">
                <a href="" class="col-5 btn btn-outline-success">عرض</a>
                <a href="" class="col-5 btn btn-outline-danger">ابلاغ</a>
              </div>

            </div>
            <div class="card-footer">
              <small class="" >اخر تحديث منذ {{$category->updated_at}} ايام</small>
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
        @foreach ($categories[1]->products as $category )
          
          <div class="swiper-slide">
            <div class="card h-100  rounded">
            <img src="{{asset('assets/img/download.jpg')}}" alt="" srcset="">
            <div class="card-body">
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">أسم المنتج :</div>
                <p class=" text-start">{{$category->name}}</p>
              </div>
              
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">الوصف :</div>
                <p class=" text-start">{{$category->description}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر القديم :</div>
                <p class=" text-start">{{$category->current_price}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر الحالي :</div>
                <p class=" text-start">{{$category->last_price}}</p>
                {{-- <i class="fa-solid fa-arrow-down"></i> --}}
                <span>
                  @if ($category->last_price < $category->current_price)
                  <svg class="text-align-middle"  xmlns="http://www.w3.org/2000/svg" width="12px" fill="green" viewBox="0 0 384 512"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                    
                  @else
                  <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="red" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>                    
                  @endif
                </span>
              </div>
              <div class="row justify-content-around">
                <a href="" class="col-5 btn btn-outline-success">عرض</a>
                <a href="" class="col-5 btn btn-outline-danger">ابلاغ</a>
              </div>

            </div>
            <div class="card-footer">
              <small class="" >اخر تحديث منذ {{$category->updated_at}} ايام</small>
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
  <h5 class="py-2">العلافة</h5>
  <div class="swiper mySwiper rounded p-4">
      <div class="swiper-wrapper">
          @foreach ($categories[02->products as $category )
          
          <div class="swiper-slide">
            <div class="card h-100  rounded">
            <img src="{{asset('assets/img/download.jpg')}}" alt="" srcset="">
            <div class="card-body">
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">أسم المنتج :</div>
                <p class=" text-start">{{$category->name}}</p>
              </div>
              
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">الوصف :</div>
                <p class=" text-start">{{$category->description}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر القديم :</div>
                <p class=" text-start">{{$category->current_price}}</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر الحالي :</div>
                <p class=" text-start">{{$category->last_price}}</p>
                {{-- <i class="fa-solid fa-arrow-down"></i> --}}
                <span>
                  @if ($category->last_price < $category->current_price)
                  <svg class="text-align-middle"  xmlns="http://www.w3.org/2000/svg" width="12px" fill="green" viewBox="0 0 384 512"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                    
                  @else
                  <svg xmlns="http://www.w3.org/2000/svg" width="12px" fill="red" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>                    
                  @endif
                </span>
              </div>
              <div class="row justify-content-around">
                <a href="" class="col-5 btn btn-outline-success">عرض</a>
                <a href="" class="col-5 btn btn-outline-danger">ابلاغ</a>
              </div>

            </div>
            <div class="card-footer">
              <small class="" >اخر تحديث منذ {{$category->updated_at}} ايام</small>
            </div>
          </div> 
          </div>
          @endforeach

        
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</div>

@endsection

@section('script')
    {{asset('assets/js/swiper.mjs')}}
@endsection