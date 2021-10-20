@extends('layouts.app')
<style>
    .recentitems {
        height: 600px;
    }

</style>
<script src="{{asset('js/highchart/highcharts.js')}}"></script>
<script src="{{asset('js/highchart/series-label.js')}}"></script>
<script src="{{asset('js/highchart/exporting.js')}}"></script>
<script src="{{asset('js/highchart/export-data.js')}}"></script>
<script src="{{asset('js/highchart/accessibility.js')}}"></script>
@section('content')


<!-- Page content -->
<div class="container-fluid mt-2">
    <div class="d-flex flex-row" >
        <h1>Dashboard</h1>
        <button class="btn btn-primary ml-auto">Settings</button>
    </div>

    <hr>
    <br>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="mb-0 card-title text-uppercase text-muted">Total Users</h5>
                            <span class="mb-0 h2 font-weight-bold">{{number_format($users)}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="text-white shadow icon icon-shape bg-gradient-red rounded-circle">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="mr-2 text-success"><i class="fa fa-arrow-up"></i></span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div>
            </div>


        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="mb-0 card-title text-uppercase text-muted">COURSES</h5>
                            <span class="mb-0 h2 font-weight-bold">{{ number_format($courses) }}</span>
                        </div>
                        <div class="col-auto">
                            <div class="text-white shadow icon icon-shape bg-gradient-orange rounded-circle">
                                <i class="ni ni-bag-17"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="mr-2 text-success"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="mb-0 card-title text-uppercase text-muted">STUDENTS</h5>
                            <span class="mb-0 h2 font-weight-bold">{{ number_format(($students)) }}</span>
                        </div>
                        <div class="col-auto">
                            <div class="text-white shadow icon icon-shape bg-gradient-green rounded-circle">
                                <i class="ni ni-money-coins"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="mr-2 text-success"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="mb-0 card-title text-uppercase text-muted">INSTRUCTORS</h5>
                            <span class="mb-0 h2 font-weight-bold">{{number_format(($instructors)) }}</span>
                        </div>
                        <div class="col-auto">
                            <div class="text-white shadow icon icon-shape bg-gradient-info rounded-circle">
                                <i class="ni ni-chart-bar-32"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="mr-2 text-success"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8" >
            <div class="card bg-default">
                <div class="bg-transparent card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-1 text-light text-uppercase ls-1">Enrollments vs Completions</h6>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <div class="card-body p-1" style="height: 430px;">
                    <!-- Chart -->
                    <div class="chart m-1">
                        <!-- Chart wrapper -->
{{--                        <canvas id="chart-sales-dark" class="chart-canvas"></canvas>--}}
                        <figure class="highcharts-figure">
                            <div id="container"></div>

                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="bg-transparent card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-1 text-uppercase text-muted ls-1">Enrollment methods</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1" style="height: 430px">
                    <!-- Chart -->
                    {{-- <div id="app"> --}}
                        <chartpie-component></chartpie-component>
                        {{-- <pie-chart :data="1212" :user="12" :options="chartOptions"></pie-chart> --}}
                        {{--
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm-4 p-0 pr-1 pl-1" >
            <div class="card" style="height: 500px; ">
                <div class="border-0 card-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="mb-0">Popular Instructors</h4>
                        </div>
                        <div class="text-right col-3">
                            <a href="#!" class="btn btn-sm btn-primary">View all</a>
                        </div>
                    </div>

                </div>
                <div class="table-responsive">
                    <div class="col">
                        @foreach($last_instructors as $instructor)

                            <div class="row p-2 border-bottom">
                                <div class="col-2" style="padding: 5px;"><img class="rounded-circle" style="border-radius: 15px;" src="https://img.pngio.com/bluecircleclip-artsymbollogographics-4367591-free-png-library-user-logo-png-250_250.png" width="40px" height="40px"></div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-10" style="padding: 5px; text-align: left;">
                                            <p style="margin-bottom: -2px;">{{$instructor->firstname . ' '.$instructor->lastname}}</p>
                                            <small><strong>42</strong>&nbsp;Cources&nbsp;</small>
                                            <small style="margin-left: 10px;"><strong>42</strong>&nbsp;Students&nbsp;</small>
                                        </div>
                                        <div class="col-2"><button class="btn btn-sm" type="button" style="margin: 5px;">:</button></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-4 p-0">
            <div class="card" style="height: 500px; ">
                <div class="border-0 card-header">
                    <div class="row align-items-center">
                        <div class="col-7 ">
                            <h3 class="mb-0 header-text">Recent Courses</h3>
                        </div>
                        <div class="text-right col-5">
                            <a href="#!" class="btn btn-sm btn-primary">View all</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1">
                    @foreach($recentCourses as $course)
                        <div class="d-flex flex-row ml-3 mr-3 p-2 pl-0 border-bottom">
                            <div class="col-5 pl-0 pr-1 mr-2">
                                <img src="data:image/jpeg;base64,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"
                                     height="60px" style="background-size: cover;">
                            </div>
                            <div class="col-7 p-0" style="text-align: left;">
                                <p style="font-size: 12px; height: 35px; overflow: hidden;">{{$course->fullname}}</p>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5W-3fSGOIcgkl-Z0fFhkIQirjrBHZ2SBct4ZuJ5k9rqe6iWClEGIHgLee0zoCvlhs8KE&amp;usqp=CAU"
                                     width="25px" height="25px" class="rounded-circle" style="background-size: cover;">
                                <small>Asadbek Fayzulloev</small>
                            </div>
                        </div>
                    @endforeach
                <!-- Projects table -->

                </div>
            </div>

        </div>
        <div class="col-sm-4 p-0 pr-1 pl-1">
            <div class="card" style="height: 500px; ">
                <div class="border-0 card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Social traffic</h3>
                        </div>
                        <div class="text-right col">
                            <a href="#!" class="btn btn-sm btn-primary">View all</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1">
                    @for($i=0;$i<4;$i++)
                        <div class="d-flex flex-row mr-3 p-0 mt-0 mb-0">

                            <div class="col-2 p-0 mr-0" style="text-align: center;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5W-3fSGOIcgkl-Z0fFhkIQirjrBHZ2SBct4ZuJ5k9rqe6iWClEGIHgLee0zoCvlhs8KE&amp;usqp=CAU"
                                     width="35px" height="35px" class="rounded-circle" style="background-size: cover;">
                                <div class="vline"></div>

                            </div>
                            <div class="flex flex-column" style="text-align: left;">
                                <strong class="col-7 pl-0 ml-0" style="text-align: left; font-size: 12px">Asadbek Fayzulloev</strong>
                                <p class="col-12 m-0 p-0" style="text-align: left; height: 35px; overflow-y: hidden; font-size: 10px;">dsadn akjdn wjkan dkjwd nawjkd nawkjdnawj ndawkj dnkawj ndkjnkjwnakjdnwakjdn wandjkwankjdwn wkj nd awjk ndawkjn wakjdnawjkd nawjknjk</p>
                                <small>9:20 pm</small>
                            </div>

                        </div>

                    @endfor

                </div>
            </div>

        </div>
    </div>
    <!-- Footer -->

    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Monthly Average Temperature'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Temperature'
                },
                labels: {
                    formatter: function () {
                        return this.value + '°';
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Tokyo',
                marker: {
                    symbol: 'square'
                },
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
                    y: 26.5,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                    }
                }, 23.3, 18.3, 13.9, 9.6]

            }, {
                name: 'London',
                marker: {
                    symbol: 'diamond'
                },
                data: [{
                    y: 3.9,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
                    }
                }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    </script>
</div>
@endsection
