@extends('layouts.app')


@section('content')

<div><canvas id="myChart"></canvas></div>

{{$data}}

@endsection

@section('scripts')

<script >
    var chartData = {!! json_encode($data) !!};

    console.log(chartData);
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="module" src="{{asset('assets/js/charts.js')}}"></script>
@endsection