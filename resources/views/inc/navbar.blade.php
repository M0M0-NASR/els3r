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
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{url('/product')}}">الرئيسية</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('product.productsPage')}}">المنتجات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('complince.index')}}">الشكاوي</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">مين احنا</a>
          </li>      
        </ul>
    {{-- end link list --}}

    {{-- start search bar --}}

        <form class="d-flex gap-2" role="search">
            <input class="form-control" type="search" placeholder="اكتب اسم السلعة مثل:ارز" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">بحث</button>
          </form>      
      
        </div>
    {{-- end search bar --}}
    </div>
  </nav>