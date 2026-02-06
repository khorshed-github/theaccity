@extends('admin_layouts.app')

@section('style')
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('wrapper')
    <!--start page wrapper -->
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
                            <li class="breadcrumb-item active" aria-current="page">Menu Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <a href="AddNewMenu" class="btn btn-primary">Add New Menu</a>
                </div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">Menu Information</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $customer)
                                    <tr>
                                        <td>
                                            <div class="d-flex gap-1 mb-3">
                                                <div class="border p-1 small rounded">
                                                    <i  class="text-success fs-6 edit-btn-menu" width="15"
                                                        height="15" data-feather="check-circle" data-bs-toggle="modal"
                                                        data-bs-target="#editModal_{{ $customer->id }}"
                                                        data-id="{{ $customer->id }}"
                                                        data-name="{{ $customer->name }}"></i></div>
                                                <div class="border p-1 small rounded"><i class="text-danger" width="15"
                                                        height="15" data-feather="delete"></i></div>
                                            </div>

                                            <div class="modal fade" id="editModal_{{ $customer->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit Menu Info</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form id="editMenuForm" method="POST">
                                                            @csrf                                                            
                                                            <input type="hidden" id="edit-id-{{ $customer->id }}" name="id">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="edit-name"
                                                                            class="form-label">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="edit-name-{{ $customer->id }}" name="name">
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="error_msg"></div>
                                                            <div class="success_msg"></div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    Changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>{{ $customer->name }}</td>
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
