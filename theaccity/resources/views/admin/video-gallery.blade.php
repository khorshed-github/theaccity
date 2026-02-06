
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
                            <li class="breadcrumb-item active" aria-current="page">Upload New Video Gallery</li>
                        </ol>
                    </nav>
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
                                <h5 class="mb-0 text-primary">Upload New Video Gallery</h5>
                            </div>
                            <hr>    
                            <form id="VideoGallerysForm" method="POST" enctype="multipart/form-data">
                                        @csrf <!-- Add CSRF token for security -->
                                        <input type="hidden" id="id" name="id"> <!-- Hidden input for slider ID -->
                                        <div class="mb-3">
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <label for="link" class="form-label">Youtube Link</label>
                                            <input type="text" class="form-control" id="link" placeholder="Enter Youtube Link">
                                        </div>
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Enter title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="file_name" class="form-label">File Name</label>
                                            <input type="file" class="form-control" id="file_name" accept="image/*">
                                            <div id="filePreview" class="mt-2"></div> <!-- Preview for existing file -->
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status" checked>
                                            <label class="form-check-label" for="status">Active</label>
                                        </div>
                                        <button type="button" class="btn btn-primary mt-3" id="VideoGallerySaveBtn">Save</button>
                                    </form>
                                    
                            
                            <div class="card mt-4">
                               <div class="card-header bg-primary"> <h3 class="">Video Gallery Upload List</h3></div>
                               <div class="card-body">
                                <table id="example" class="table table-striped table-bordered table-hover" style="width: 100%;border-top: 1px solid;">
                                <thead class="table-success">
                                    <tr>
                                        <th>Title</th>
                                        <th>Youtube Link</th>
                                        <th>File</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($video_gallery as $slider)
                                    <tr>
                                        <td>{{ $slider->title }}</td>
                                        <td class="d-inline-block" style="max-width: 250px;">{{ $slider->link }}</td>
                                        <td>
                                            @if ($slider->file_name)
                                            <img src="{{ asset('public/assets/images/video-gallery/' . $slider->file_name) }}" alt="{{ $slider->title }}" width="50">
                                            @endif
                                        </td>
                                        <td>{{ $slider->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary video-gallery-edit-btn" data-id="{{ $slider->id }}">Edit</button>
                                            <button class="btn btn-danger btn-sm video-gallery-deleteBtn" data-id="{{$slider->id}}">Delete</button>
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