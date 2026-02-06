
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
                            <li class="breadcrumb-item active" aria-current="page">University Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">                    
                    <a href="university" class="btn btn-info">University Information</a>                   
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">                   
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-image me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">University Information</h5>
                            </div>
                            <hr>                           
                                     <form id="UniversityForm" method="POST" enctype="multipart/form-data">
                                        @csrf <!-- Add CSRF token for security -->
                                        <input type="hidden" id="id" name="id"> <!-- Hidden input for slider ID -->
                                        
                                        <div class="mb-3">
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <label for="title" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter name">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="file_name" class="form-label">Upload University Logo</label>
                                            <input type="file" class="form-control" id="file_name" accept="image/*">
                                            <div id="filePreview" class="mt-2"></div> <!-- Preview for existing file -->
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status" checked>
                                            <label class="form-check-label" for="status">Active</label>
                                        </div>
                                        <button type="button" class="btn btn-info mt-3" id="UniversitySaveBtn">Save</button>
                                    </form>
                                    
                                    
                                    <div class="card mt-4">
                                       <div class="card-header bg-info"> <h3 class="">University List</h3></div>
                                       <div class="card-body">
                                        <table id="example" class="table table-striped table-bordered table-hover" style="width: 100%;border-top: 1px solid;">

                                        <thead class="table-info">
                                            <tr>
                                                <th>Name</th>
                                                <th>Logo</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($university as $countries)
                                            <tr>
                                                <td class="text-truncate">{{ $countries->name }}</td>
                                                <td>
                                                    @if ($countries->file_name)
                                                    <img src="{{ asset('public/assets/images/University/' . $countries->file_name) }}" alt="{{ $countries->name }}" width="50">
                                                    @endif
                                                </td>
                                                <td>{{ $countries->status ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-info University-edit-btn" data-id="{{ $countries->id }}">Edit</button>
                                                    <button class="btn btn-danger btn-sm University-deleteBtn" data-id="{{$countries->id}}">Delete</button>
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