@extends('layouts.app')

@section('content')
    <div class="text-color">
        <h2 class="text-color py-2">لوحة التحكم</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">
            <div class="col">
                <div class="text-color p-2 rounded py-3 border d-flex flex-wrap">
                    <h3 class="w-75">
                        الزيارات
                    </h3>
                    <i class="w-25">
                        <svg width="50" fill="#D89216"  viewBox="0 0 640 512"><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                    </i>
                    <p class="w-100 fs-2">12 <span class="fs-5">مستخدم جديد</span></p>
                    <a href="" class="btn text-center w-100 btn-success">المزيد</a>
                </div>
            </div>
            <div class="col">
                <div class="text-color p-2 rounded py-3 border d-flex flex-wrap">
                    <h3 class="w-75">
                        المنتجات
                    </h3>
                    <i class="w-25">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="50" fill="#D89216" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>                    </i>
                    <p class="w-100 fs-2">12 <span class="fs-5"> منتج</span></p>
                    <a href="{{route('product.index')}}" class="btn text-center w-100 btn-success">المزيد</a>
                </div>
            </div>
            <div class="col">
                <div class="text-color p-2 rounded py-3 border d-flex flex-wrap">
                    <h3 class="w-75">
                        الاقسام
                    </h3>
                    <i class="w-25">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#D89216" width="40" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>                    </i>
                    <p class="w-100 fs-2">12 <span class="fs-5">قسم</span></p>
                    <a href="{{route('category.index')}}" class="btn text-center w-100 btn-success">المزيد</a>
                </div>
            </div>
            <div class="col">

                <div class="text-color p-2 rounded py-3 border d-flex flex-wrap">
                    <h3 class="w-75">
                        الشكاوي
                    </h3>
                    <i class="w-25">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#D89216" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M313.4 479.1c26-5.2 42.9-30.5 37.7-56.5l-2.3-11.4c-5.3-26.7-15.1-52.1-28.8-75.2H464c26.5 0 48-21.5 48-48c0-18.5-10.5-34.6-25.9-42.6C497 236.6 504 223.1 504 208c0-23.4-16.8-42.9-38.9-47.1c4.4-7.3 6.9-15.8 6.9-24.9c0-21.3-13.9-39.4-33.1-45.6c.7-3.3 1.1-6.8 1.1-10.4c0-26.5-21.5-48-48-48H294.5c-19 0-37.5 5.6-53.3 16.1L202.7 73.8C176 91.6 160 121.6 160 153.7V192v48 24.9c0 29.2 13.3 56.7 36 75l7.4 5.9c26.5 21.2 44.6 51 51.2 84.2l2.3 11.4c5.2 26 30.5 42.9 56.5 37.7zM32 384H96c17.7 0 32-14.3 32-32V128c0-17.7-14.3-32-32-32H32C14.3 96 0 110.3 0 128V352c0 17.7 14.3 32 32 32z"/></svg>                    </i>
                    <p class="w-100 fs-2">12 <span class="fs-5">شكاوي</span></p>
                    <a href="{{route('complince.index')}}" class="btn text-center w-100 btn-success">المزيد</a>
                </div>
            </div>

        </div>
    </div>

    @endsection