@extends('layouts.app')
<style>
    .recentitems {
        height: 600px;
    }
</style>
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
        <div class="col-xl-8">
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
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
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
                <div class="card-body">
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
                        @for($i=0;$i<5;$i++)
                            <div class="row p-2 border-bottom">
                                <div class="col-2" style="padding: 5px;"><img class="rounded-circle" style="border-radius: 15px;" src="base64,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&quot;) no-repeat;background-size: cover;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5W-3fSGOIcgkl-Z0fFhkIQirjrBHZ2SBct4ZuJ5k9rqe6iWClEGIHgLee0zoCvlhs8KE&amp;usqp=CAU" width="40px" height="40px"></div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-10" style="padding: 5px; text-align: left;">
                                            <p style="margin-bottom: -2px;">Rob Persival</p>
                                            <small><strong>42</strong>&nbsp;Cources&nbsp;</small>
                                            <small style="margin-left: 10px;"><strong>42</strong>&nbsp;Cources&nbsp;</small>
                                        </div>
                                        <div class="col-2"><button class="btn btn-sm" type="button" style="margin: 5px;">:</button></div>
                                    </div>
                                </div>
                            </div>
                        @endfor
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
                            <a href="#!" class="btn btn-sm btn-primary">See all</a>
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
</div>
@endsection
