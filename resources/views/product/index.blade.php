@extends('layouts.app')

@section('content')

<div class="section text-color rounded mb-4">
    <h5 class="py-2 ">الأكثر شيوعا</h5>
    <div class="swiper mySwiper rounded p-4">
        <div class="swiper-wrapper">
          @foreach ($products as $product )
          <div class="swiper-slide">
            <div class="card h-100  rounded">
            <img src="{{asset('assets/img/download.jpg')}}" alt="" srcset="">
            <div class="card-body">
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">أسم المنتج :</div>
                <p class=" text-start">ارز</p>
              </div>
              
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">الوصف :</div>
                <p class=" text-start">أرز فلاحي معباء</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر القديم :</div>
                <p class=" text-start">10 جنيه</p>
              </div>
              <div class="d-flex justify-content-start gap-3 text-align-middle">
                <div class="text-end ms-1">سعر جديد :</div>
                <p class=" text-start">10 جنيه</p>
              </div>
              <div class="row justify-content-around">
                <a href="" class="col-5 btn btn-outline-success">عرض</a>
                <a href="" class="col-5 btn btn-outline-danger">ابلاغ</a>
              </div>

            </div>
            <div class="card-footer">
              <small class="">اخر تحديث منذ 3 ايام</small>
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
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</div>
<div class="section text-color rounded mb-4">
  <h5 class="py-2">منتجات ألبان</h5>
  <div class="swiper mySwiper rounded p-4">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</div>
<div class="section text-color rounded mb-4">
  <h5 class="py-2">العلافة</h5>
  <div class="swiper mySwiper rounded p-4">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        </div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</div>

@endsection

@section('script')
    {{asset('assets/js/swiper.mjs')}}
@endsection