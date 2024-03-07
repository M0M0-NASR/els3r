@extends('layouts.print')


@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable Layout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .printable-layout {
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .section-content {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
{{-- @dd($complince) --}}
<div class="printable-layout">
    <div class="header">
        <h1>شكاوي رقم {{$complince->number}}</h1>
    </div>

    <div class="section">
        <div class="section-title">البيانات الشخصية</div>
        <div class="section-content">
            <p><strong>الاسم رباعي:</strong> {{$complince->full_name}}</p>
            <p><strong>الرقم القومي:</strong> {{$complince->ssn}}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">بيانات المنتج</div>
        <div class="section-content">
            <p><strong> رقم المنتج:</strong>{{$complince->product_id}}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">بيانات المحل</div>
        <div class="section-content">
            <p><strong>اسم المحل:</strong>{{$complince->shop_name}}</p>
            <p><strong>المخافظة:</strong> {{$complince->government}}</p>
            <p><strong>العنوان:</strong> {{$complince->address}}</p>
        </div>
    </div>

    <div class="section">
        <div class="section-title">الشكاوي</div>
        <div class="section-content">
            <p><strong>محتوي الشكاوي:</strong> {{$complince->content}}</p>
        </div>
    </div>

    <div class="footer">
        <p>رقم الشكاوي: {{$complince->number}}</p>
        <p>بتاريخ: {{$complince->created_at}}</p>
    </div>
</div>


{{-- @dd($complince) --}}
@endsection


@section('scripts')
    <script>
        window.print();
    </script>
@endsection