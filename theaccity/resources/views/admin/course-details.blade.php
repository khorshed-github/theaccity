
@extends("admin_layouts.app")

@section("style")
<link href="public/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Website Information</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Course Details Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">                    
                    <a href="course-details-add" class="btn btn-primary">Add New Course Details</a>                   
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-image me-1 font-22 text-primary"></i>
                                </div>
                                <h5 class="mb-0 text-primary">Course Details</h5>
                            </div>
                                <table id="example" class="table table-striped table-bordered table-hover" style="width: 100%;border-top: 1px solid;">
                                <thead>
                                    <tr class="light">
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($course_details as $slider)
                                    <tr>
                                        <td >{{ $slider->title }}</td>
                                       <td>
                                            {!! $slider->status 
                                            ? '<button class="badge  bg-success">Online</button>' 
                                            : '<button class="badge  bg-danger">Offline</button>' !!}
                                        </td>

                                        <td class="nowrap">
                                            <button class="btn btn-warning btn-sm CourseDetails-onoff" data-id="{{$slider->id}}">ON/OFF</button>
                                            <a href="course-details/{{$slider->id}}" class="btn btn-success btn-sm CourseDetails-edit-btn">Edit</a>
                                            <button class="btn btn-danger btn-sm CourseDetails-deleteBtn" data-id="{{$slider->id}}">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                </div>
            </div>
            <!--end row-->
          
        </div>
    </div>
@endsection