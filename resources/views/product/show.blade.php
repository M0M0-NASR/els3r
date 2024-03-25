@extends('layouts.app')

@section('products_active')
active-link
@endsection


@section('content')

<div class="row product-info">
    <div class="col-12 py-4 border">
        <div class="row">
            <div class="col-lg-3 col-md-3 img-card d-flex justify-content-center">
                <img class="img-fluid rounded-3" src="{{Storage::url($product->img_cover)}}" alt="" srcset="">
            </div>
            <div class="col-lg-6 col-md-8 info fs-4 d-flex me-3 d-flex justify-content-center">
                <div class="labels fs-5 d-flex flex-column me-2 mt-2">
                    <label for=""  class="mb-2"> الاسم </label>
                    <label for=""  class="mb-2"> الوصف </label>
                    <label for="" class="mb-2"> السعر الخالي </label>
                    <label for="" class="mb-2"> السعر القديم </label>
                    <label for="" class="mb-2">اخر تحديث </label>
                </div>
                <div class="data fs-5 d-flex flex-column mt-2">
                    <label for="" class="mb-2" >: {{$product->name}}</label>
                    <label for="" class="mb-2">: {{$product->description}}</label>
                    <label for="" class="mb-2">: {{$product->current_price}}</label>
                    <label for="" class="mb-2">: {{$product->last_price}}</label>
                    <label for="" class="mb-2">: {{$product->updated_at}}</label>
                </div>
                
            </div>
        </div>
    </div>

    

</div>

<div class="my-3 text-color">
    <div class="row">
        <div class="col-12 col-md-6">
            <h5>اسعار المنتج خلال العام</h5>
            <canvas id="myChart"></canvas>
        </div>
        <div class="col-12 col-md-6">
            <h5>الشكاوي المقدمة خلال العام</h5>
            <canvas id="complinceChart"></canvas>
        </div>
        </div>
        
</div>

<div class="my-3 text-color">
    <div class="row">
       
        </div>        
</div>

@endsection

@section('scripts')

<script >
    var chartData = {!! json_encode($dataChart) !!};
    var complinceData = {!! json_encode($complianceCounts) !!};
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="module" src="{{asset('assets/js/charts.js')}}"></script>
@endsection