
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
                            <li class="breadcrumb-item active" aria-current="page">Subject Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">                    
                    <a href="subject" class="btn btn-primary">Subject Information</a>                   
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
                                <h5 class="mb-0 text-primary">Subject Information</h5>
                            </div>
                            <hr>                           
                                     <form id="SubjectForm" method="POST" enctype="multipart/form-data">
                                        @csrf <!-- Add CSRF token for security -->
                                        <input type="hidden" id="id" name="id"> <!-- Hidden input for slider ID -->
                                        
                                        <div class="mb-3">
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <label for="title" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status" checked>
                                            <label class="form-check-label" for="status">Active</label>
                                        </div>
                                        <button type="button" class="btn btn-primary mt-3" id="SubjectSaveBtn">Save</button>
                                    </form>
                                    
                                    
                                    <div class="card mt-4">
                                       <div class="card-header bg-primary"> <h3 class="">Subject List</h3></div>
                                       <div class="card-body">
                                        <table id="example" class="table table-striped table-bordered table-hover" style="width: 100%;border-top: 1px solid;">
                                            <thead class="table-success">
                                            <tr>
                                                <th>Subject</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($subject as $slider)
                                            <tr>
                                                <td class="text-truncate">{{ $slider->name }}</td>
                                                <td>{{ $slider->status ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary Subject-edit-btn" data-id="{{ $slider->id }}">Edit</button>
                                                    <button class="btn btn-danger btn-sm Subject-deleteBtn" data-id="{{$slider->id}}">Delete</button>
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