@extends('layouts.app')
@section('content')
    <style type="text/css">
        .highcharts-figure, .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }
        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }
        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
            padding: 0.5em;
        }
        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

    </style>

<script src="{{asset('js/highchart/highcharts.js')}}"></script>
<script src="{{asset('js/highchart/series-label.js')}}"></script>
<script src="{{asset('js/highchart/exporting.js')}}"></script>
<script src="{{asset('js/highchart/export-data.js')}}"></script>
<script src="{{asset('js/highchart/accessibility.js')}}"></script>
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        This chart shows how symbols and shapes can be used in charts.
        Highcharts includes several common symbol shapes, such as squares,
        circles and triangles, but it is also possible to add your own
        custom symbols. In this chart, custom weather symbols are used on
        data points to highlight that certain temperatures are warm while
        others are cold.
    </p>
</figure>




@endsection
