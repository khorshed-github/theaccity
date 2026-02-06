@extends("admin_layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Website Software</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <a href="addProfile" class="btn btn-primary">Add New User Profile</a>
                </div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">User Profile Information</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Access Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($profiles as $profile)
                                    <tr>
                                        <td>
                                            <div class="d-flex gap-1 mb-3">
                                                <div class="border p-1 small rounded">
                                                    <i class="text-success fs-6 edit-btn-profile" width="15"
                                                        height="15" data-feather="check-circle" data-bs-toggle="modal"
                                                        data-bs-target="#editModal_{{ $profile->id }}"
                                                        data-id="{{ $profile->id }}"
                                                        data-name="{{ $profile->name }}"
                                                        data-number="{{ $profile->number }}"
                                                        data-password="{{ $profile->password }}"
                                                        data-type="{{ $profile->type }}"
                                                        data-status="{{ $profile->status }}"></i></div>
                                                <div class="border p-1 small rounded"><i class="text-danger" width="15"
                                                        height="15" data-feather="delete"></i></div>
                                            </div>

                                            <div class="modal fade" id="editModal_{{ $profile->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit Profile Info</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form id="editProfileForm" method="POST">
                                                            @csrf                                                            
                                                            <input type="hidden" id="edit-id-{{ $profile->id }}" name="id">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="edit-name"
                                                                            class="form-label">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="edit-name-{{ $profile->id }}" name="name">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="edit-number"
                                                                            class="form-label">Number</label>
                                                                        <input type="text" class="form-control"
                                                                            id="edit-number-{{ $profile->id }}" name="number">
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12">
                                                                        <label for="edit-password"
                                                                            class="form-label">Password</label>
                                                                        <input type="text" class="form-control"
                                                                            id="edit-password-{{ $profile->id }}" name="password">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="edit-type"
                                                                            class="form-label">Type</label>
                                                                            <select class="form-control"
                                                                            id="edit-type-{{ $profile->id }}" name="type">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Super Admin</option>
                                                                            <option value="2">Software Access</option>
                                                                            <option value="3">Website Access</option>
                                                                            </select>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="edit-status"
                                                                            class="form-label">Status</label>
                                                                            <select class="form-control"
                                                                            id="edit-status-{{ $profile->id }}" name="status">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Active</option>
                                                                            <option value="2">In Active</option>
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="error_msg"></div>
                                                            <div class="success_msg"></div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $profile->name }}</td>
                                        <td>{{ $profile->number }}</td>
                                        <td>{{ $profile->type == 1 ? 'Super Admin' : ($profile->type == 2 ? 'Software Access' : ($profile->type == 3 ? 'Website Access' : 'Not Defined!')) }}</td>
                                        <td>{{ $profile->status == 1 ? 'Active' : ($profile->status == 0 ? 'In Active' : 'Not Define') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->
@endsection
