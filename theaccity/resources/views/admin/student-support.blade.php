
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
                            <li class="breadcrumb-item active" aria-current="page">Student Support Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">                    
                    <a href="student-support" class="btn btn-primary">Student Support List</a>                   
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
                                <h5 class="mb-0 text-primary">Student Support Information</h5>
                            </div>
                            <hr>                           
                             <form id="StudentSupportForm" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Add CSRF token for security -->
                                <input type="hidden" id="id" name="id"> 
                                <div class="mb-3">
                                    <label for="author" class="form-label">Author</label>
                                    <input type="text" class="form-control" name="author" id="author" placeholder="Enter Author Name">
                                </div>
                                <div class="mb-3">
                                    <label for="menu" class="form-lebel">Menu</label>
                                    <select name="menuid" id="menuid" class="form-control mainmenu" required>
                                        <option value="">Select</option>
                                        @foreach($menu as $m)
                                        <option value="{{$m->id}}">{{$m->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="menu" class="form-label">Sub Menu</label>
                                    <select name="submenuid" id="submenuid" class="form-control submenu">
                                        <option value="">Select</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="shot_desc" class="form-label">Description</label>
                                    <textarea class="form-control" name="shot_desc" id="editor" rows="3" placeholder="Enter Description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="file" class="form-label">File Name</label>
                                    <input type="file" name="file_name" class="form-control" id="file_name" accept="image/*">
                                    <div id="filePreview" class="mt-2"></div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="status" type="checkbox" id="status" checked>
                                    <label class="form-check-label" for="status">Active</label>
                                </div>
                                <div class="success_msg"></div>
                                <div class="error_msg"></div>
                                <button type="submit" class="btn btn-primary mt-3" id="NewsSaveBtn">Save</button>
                            </form>
                            
                                    <h3 class="mt-5">Student Support List</h3>
                                     <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr class="light">
                                                <th>Author Name</th>
                                                <th>Title</th>
                                                <th>File</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($news as $slider)
                                            <tr>
                                                <td>{{ $slider->author }}</td>
                                                <td >{{ $slider->title }}</td>
                                                <td>
                                                    @if ($slider->file_name)
                                                    <img src="{{ asset('public/assets/images/student-support/' . $slider->file_name) }}" alt="{{ $slider->title }}" width="50">
                                                    @endif
                                                </td>
                                                <td>{{ $slider->status ? 'Active' : 'Inactive' }}</td>
                                                <td class="nowrap">
                                                    <a class="btn btn-sm btn-primary" href="student-support-edit/{{ $slider->id }}">Edit</a>
                                                    <button class="btn btn-danger btn-sm student-support-deleteBtn" data-id="{{$slider->id}}">Delete</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                              
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--end row-->
          
        </div>
    </div>
@endsection