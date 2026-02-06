@extends("admin_layouts.app")
@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")

@if($globalinfo->type == 1 || $globalinfo->type == 2)
<div class="page-wrapper">
    <div class="page-content">
        <h4 class="text-center mb-2 text-info">Welcome to Admin Panel</h4>
        <h5 class="text-center mb-4 text-warning">The Academic City</h5>

        <div class="row">
            <div class="col-xl-4">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="align-items-center">                            
                            <p class="mb-1 text-secondary text-center">University</p>
                            <h4 class="mb-0 text-center"> <i class='bx bxs-group'></i> {{ $univerity }}</h4>                                                
                        </div>
                    </div>
                    <div id="chart12"></div>
                </div>
                </div>
                <div class="col-xl-4">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="align-items-center">
                                <p class="mb-1 text-secondary text-center"> Subjects</p>
                                <h4 class="mb-0 text-center"> <i class='bx bxs-group'></i> {{ $subject}} </h4>                     
                        </div>
                    </div>
                    <div id="chart13"></div>
                </div>
                </div>
                <div class="col-xl-4">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="align-items-center">
                                <p class="mb-1 text-secondary text-center"> Total Course</p>
                                <h4 class="mb-0 text-center"> <i class='bx bxs-group'></i> {{ $courseDetails }} </h4>                     
                        </div>
                    </div>
                    <div id="chart13"></div>
                </div>
            </div>
            @endif
           
        </div>
    </div>
</div>


@endsection

@section("script")
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/index.js"></script>
@endsection