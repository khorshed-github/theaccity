
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
                            <li class="breadcrumb-item active" aria-current="page">Question & Answer</li>
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
                                <h5 class="mb-0 text-primary">Question & Answer</h5>
                            </div>
                            <hr>                           
                                <form id="QaForm" method="POST" enctype="multipart/form-data">
                                        @csrf <!-- Add CSRF token for security -->
                                        <input type="hidden" id="id" name="id">
                                        <div class="mb-3">
                                            <label for="type" class="form-label">Page Type</label>
                                            <select id="type" class="form-select" name="type">
                                                <option selected>Select Type</option>
                                                <option value="complaint">Complaint</option>
                                                <option value="legal">Legal</option>
                                                <option value="safe-guarding">Safe guarding</option>
                                                <option value="data-protection">Data protection</option>
                                                <option value="question-answer">Question & Answer</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <label for="question" class="form-label">Question</label>
                                            <input type="text" class="form-control" id="question" name="question" placeholder="Enter Question">
                                        </div>
                                        <div class="mb-3">
                                            <label for="answer" class="form-label">Answer Details</label>
                                            <textarea name="answer" class="form-control" id="answer" rows="3" placeholder="Enter Answer Details"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-primary mt-3" id="QaSaveBtn">Save</button>
                                    </form>
                                    
                                    
                                    <div class="card mt-4">
                                       <div class="card-header bg-primary"> <h3 class="">Our Responsibility</h3></div>
                                       <div class="card-body table-responsive">
                                       <table id="example" class="table table-striped table-bordered table-hover" style="width: 100%;border-top: 1px solid;">
                                        <thead class="table-success">
                                            <tr>
                                                <th>Type</th>
                                                <th>Question</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($qaa as $qa)
                                            <tr>
                                                <td class="text-truncate">{{ $qa->type }}</td>
                                                <td class="text-truncate">{{ $qa->question }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary Qa-edit-btn" data-id="{{ $qa->id }}">Edit</button>
                                                    <button class="btn btn-danger btn-sm Qa-deleteBtn" data-id="{{$qa->id}}">Delete</button>
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