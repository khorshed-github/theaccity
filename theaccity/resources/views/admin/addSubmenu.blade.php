@extends("admin_layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Admin Panel</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Submenu Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">                    
                    <a href="submenu" class="btn btn-primary">Submenu List</a>                   
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                   
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                </div>
                                <h5 class="mb-0 text-primary">Submenu Information</h5>
                            </div>
                            <hr>
                            <form class="row g-3" id="submenu_register_form">
                                @csrf
                                <div class="col-md-6">
                                    <label for="menu" class="form-label">Menu</label>
                                    <select id="menu" class="form-select" name="menuid">
                                        <option selected>Select Menu</option>
                                        @foreach ($menu as $saler)
                                        <option value="{{ $saler->id }}">{{ $saler->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-12">
                                    <label for="name" class="form-label">Name</label>
                                    <textarea class="form-control" id="name" name="name" rows="3"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug">
                                </div>
                                
                                <div class="error_msg"></div>
                                <div class="success_msg"></div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-5">Submit Request</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--end row-->
          
        </div>
    </div>
@endsection



