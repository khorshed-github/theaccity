
@extends("admin_layouts.app")

@section("style")
<link href="public/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")
<style>
    .ck-editor{
        color:#000 !important;
    }
</style>
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
                            <li class="breadcrumb-item active" aria-current="page">News Edit Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">                    
                    <a href="news" class="btn btn-primary">News List</a>                   
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
                                <h5 class="mb-0 text-primary">News Edit Information</h5>
                            </div>
                            <hr>                           
                                     <form id="NewsForm" method="POST" enctype="multipart/form-data">
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <input type="hidden" id="id" value="{{$news->id}}" name="id"> <!-- Hidden input for slider ID -->
                                         <div class="mb-3">
                                            <label for="title" class="form-label">Type</label>
                                            <input type="text" class="form-control" name="type" id="type" value="{{$news->type}}" placeholder="Enter Type" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$news->title}}" rows="3" id="title" placeholder="Enter title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="shot_desc" class="form-label">Message Details</label>
                                            <textarea name="shot_desc" class="form-control shot_desc" id="editor" rows="3" placeholder="Enter short description">{{$news->shot_desc}}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="file_name" class="form-label">Picture Upload</label>
                                            <input type="file" name="file_name" class="form-control" id="file_name" accept="image/*">
                                            <div id="filePreview" class="mt-2">
                                                <img src="{{ asset('public/assets/images/news/' . $news->file_name) }}" alt="Existing Image" width="150" class="img-thumbnail">
                                            <p class="mt-2"><strong>Current Image:</strong> {{$news->file_name}}</p>
                                            </div> <!-- Preview for existing file -->
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="status" type="checkbox" id="status" checked>
                                            <label class="form-check-label" for="status">Active</label>
                                        </div>
                                        <div class="success_msg"></div>
                                        <div class="error_msg"></div>
                                        <button type="submit" class="btn btn-primary mt-3" id="NewsSaveBtn">Save</button>
                                    </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--end row-->
          
        </div>
    </div>
@endsection