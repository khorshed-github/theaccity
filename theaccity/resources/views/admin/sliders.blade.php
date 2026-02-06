
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
                            <li class="breadcrumb-item active" aria-current="page">Home Page Content Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">                    
                    <a href="sliders" class="btn btn-primary">Home Page Content</a>                   
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
                                <h5 class="mb-0 text-primary">Home Page Content</h5>
                            </div>
                            <hr>                           
                                     <form id="sliderForm" method="POST" enctype="multipart/form-data">
                                        @csrf <!-- Add CSRF token for security -->
                                        <input type="hidden" id="id" name="id"> <!-- Hidden input for slider ID -->
                                        <div class="mb-3">
                                            <label for="type" class="form-label">Select Type/Position</label>
                                            <select name="type" id="type" class="form-control position_type_change">
                                                <option value="">Select</option>
                                                <option value="slider">Main Slider</option>
                                                <option value="testimonial">Testimonial</option>
                                                <option value="consultants">Consultants</option>
                                            </select>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <label for="title" class="form-label position_type_title">Title</label>
                                            <input type="text" class="form-control" id="title">
                                        </div>
                                        <div class="mb-3 designation_show_hide d-none">
                                            <label for="title" class="form-label position_type_designation">Designation</label>
                                            <input type="text" class="form-control" id="designation">
                                        </div>
                                        <div class="mb-3">
                                            <label for="shot_desc" class="form-label position_type_desc">Short Description</label>
                                            <textarea class="form-control" id="shot_desc" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="file_name" class="form-label">Upload Attached File</label>
                                            <input type="file" class="form-control" id="file_name" accept="image/*">
                                            <div id="filePreview" class="mt-2"></div> <!-- Preview for existing file -->
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status" checked>
                                            <label class="form-check-label" for="status">Active</label>
                                        </div>
                                        <button type="button" class="btn btn-primary mt-3" id="saveBtn">Save</button>
                                    </form>
                                
                            <div class="card mt-4">
                               <div class="card-header bg-primary"> <h3 class="">Home Page Content List</h3></div>
                               <div class="card-body">
                                <table id="example" class="table table-striped table-bordered table-hover" style="width: 100%;border-top: 1px solid;">
                                        
                                        <thead class="table-success">
                                            <tr>
                                                <th>Type</th>
                                                <th>Title</th>
                                                <th>Short Description</th>
                                                <th>File</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sliders as $slider)
                                            <tr>
                                                <td>{{ $slider->type }}</td>
                                                <td>{{ $slider->title }}</td>
                                                <td>{{ $slider->shot_desc }}</td>
                                                <td>
                                                    @if ($slider->file_name)
                                                    <img src="{{ asset('public/assets/images/sliders/' . $slider->file_name) }}" alt="{{ $slider->title }}" width="50">
                                                    @endif
                                                </td>
                                                <td>{{ $slider->status ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary sliders-edit-btn" data-id="{{ $slider->id }}">Edit</button>
                                                    <button class="btn btn-danger btn-sm sliders-deleteBtn" data-id="{{$slider->id}}">Delete</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>                               

                              </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--end row-->
          
        </div>
    </div>
@endsection