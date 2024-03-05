@extends('layouts.app')


@section('content')

<div class="d-flex flex-column border p-3 text-color" >
    <h3 class="text-center mb-4">تتبع حالة الشكاوي</h3>
    <div class="d-flex">
        <div class="labels me-1">
            <h5 class="mb-3">الاسم رباعي</h5>
            <h5 class="mb-3">الحالة</h5>
            <h5 class="mb-3">بتاريخ</h5>
            <h5 class="mb-3">المحافظة</h5>
            <h5 class="mb-3">المدينة</h5>
            <h5 class="mb-3">المحل</h5>
            <h5 class="mb-3">المنتج </h5>
            <h5 class="mb-3">محتوي الشكاوي</h5>
        </div>
        <div class=" labels">
        <h5 class="mb-3">: {{$complince->full_name}}</h5>
        <h5 class="mb-3">: {{$complince->status}}</h5>
        <h5 class="mb-3">: {{$complince->created_at}}</h5>
        <h5 class="mb-3">: {{$complince->government}}</h5>
        <h5 class="mb-3">: {{$complince->city}}</h5>
        <h5 class="mb-3">: {{$complince->shop_name}}</h5>
        <h5 class="mb-3">: {{$complince->product->name}}</h5>
        <h5 class="mb-3">: {{$complince->content}}</h5>
        </div>
    </div>
    <div>
        <a href="{{route('complince.index')}}" class="btn btn-success">
            <svg width='20' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
        العودة لصفحة البحث</a>
        <a  class="btn btn-primary">
            <svg width='20' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
            اطبع</a>
    </div>
</div>


@endsection()