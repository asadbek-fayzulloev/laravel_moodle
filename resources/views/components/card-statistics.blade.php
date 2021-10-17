<div class="card card-stats">
    <!-- Card body -->
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h5 class="mb-0 card-title text-uppercase text-muted">Total {{$users}}</h5>
                <span class="mb-0 h2 font-weight-bold">{{$text}}</span>
            </div>
            <div class="col-auto">
                <div class="text-white shadow icon icon-shape bg-gradient-red rounded-circle">
                    <i class="ni ni-active-40"></i>
                </div>
            </div>
        </div>
        <p class="mt-3 mb-0 text-sm">
            <span class="mr-2 text-success"><i class="fa fa-arrow-up"></i> {{$inc}}%</span>
            <span class="text-nowrap">Since last month</span>
        </p>
    </div>
</div>
