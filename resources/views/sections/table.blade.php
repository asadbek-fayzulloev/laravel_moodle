@extends('layouts.app')

@section('content')
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="border-0 card-header">
                    <h3 class="mb-0">Light table</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort" data-sort="enrollment">ENROLLMENT</th>
                                <th scope="col" class="sort" data-sort="budget">Course</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="completion">COURSE PROGRESS</th>
                                <th scope="col" class="sort" data-sort="enrollment">ROLES</th>
                                <th scope="col"></th>

                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @forelse ($users as $user)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                            data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="mb-0 text-sm name">
                                                {{ $user->firstname . '  '. $user->lastname  }} </span>
                                        </div>
                                    </div>


                                </th>
                                <td class="budget">
                                    {{$user->enrol}}
                                </td>
                                <td class="course">
                                    {{ $user->fullname }}
                                </td>
                                <td>
                                    @switch($user->status)
                                    @case(0)
                                    <span class="mr-4 badge badge-dot">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
                                    </span>
                                    @break
                                    @case(1)
                                    <span class="mr-4 badge badge-dot">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
                                    </span>
                                    @break

                                    @default

                                    @endswitch

                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2 completion">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{ $user->shortname }}
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-warning">Edit</button>
                                    {{-- <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> --}}
                                </td>

                            </tr>
                            @empty

                            @endforelse


                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="py-4 card-footer">
                    <nav aria-label="...">
                        <ul class="mb-0 pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>

<!-- Argon Scripts -->
<!-- Core -->
@endsection
