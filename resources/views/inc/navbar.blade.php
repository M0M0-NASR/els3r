<nav class="navbar navbar-expand-lg ">
    <div class="container main-color">
    {{-- start logo and collapse button --}}
    
      <a class="navbar-brand mx-0 px-0" href="#">
        <img class="logo" src="{{asset('assets/img/logo.png')}}" alt="" srcset="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse main-color justify-content-between" id="navbarSupportedContent">
    {{-- end logo and collapse button --}}
        
    {{-- start link list --}}
        <ul class="navbar-nav mb-2 mb-lg-0 gap-3">
          <li class="nav-item @yield('main_active')">
            <a class="nav-link " aria-current="page" href="{{url('/product')}}">الرئيسية</a>
          </li>  
          <li class="nav-item @yield('products_active')">
            <a class="nav-link " aria-current="page" href="{{route('category.index')}}">المنتجات</a>
          </li>
          <li class="nav-item @yield('complince_active')">
            <a class="nav-link " href="{{route('complince.index')}}">الشكاوي</a>
          </li>
          <li class="nav-item @yield('about_active')">
            <a class="nav-link " href="{{route('site.about')}}">مين احنا</a>
          </li>      
        </ul>
    {{-- end link list --}}

    {{-- start search bar --}}

        <div class="d-flex gap-2" role="search">
            <input id="searchInput" class="form-control" type="search" placeholder="اكتب اسم السلعة مثل:ارز" aria-label="Search" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <button class="btn btn-outline-success" type="" >بحث</button>
        </div>      
      
        </div>
    {{-- end search bar --}}
    </div>
  </nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ابحث عن منتجات او اقسام</h1>
        <div class="d-flex justify-content-start align-items-center">
          <div>
            <label for="category">الاقسام</label>
            <input class="filter" id="category" type="radio" name="filter" value="category" class="btn btn-success" >
          </div>
          <div class="ms-2">
            <label for="product">منتجات</label>
            <input class="filter" id="product" type="radio" name="filter" value="product" class=" btn btn-success" >
          </div>
          <button type="button" class="btn-close ms-2" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      </div>
      <div id="search" class="d-flex gap-2  p-2" role="search" >
        <input name="search" id="myModal" class="form-control" type="search" placeholder="اكتب اسم السلعة مثل:ارز">
      </div>  
      <div class="modal-body">
        <div id="searchResults">
          
        </div>
      </div>
      
    </div>
  </div>
</div>


@section('scripts')

<script src="{{asset('assets/js/searchBar.js')}}"></script>
    
@endsection