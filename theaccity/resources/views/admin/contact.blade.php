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
                            <li class="breadcrumb-item active" aria-current="page">Contact Information</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
            <!--end breadcrumb-->
            
            <div class="card">
                <div class="card-header bg-secondary"><h6 class="text-uppercase">Contact Information</h6></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover" style="width: 100%;border-top: 1px solid;">
                            <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Message</th>
                                    <th>Request Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $contacts)
                                    <tr>
                                        <td>{{ $contacts->id }}</td>
                                        <td>{{ $contacts->email }}</td>
                                        <td>{{ $contacts->phone }}</td>
                                        <td>{{ $contacts->address }}</td>
                                        <td>{{ $contacts->message }}</td>
                                        <td>{{ $contacts->created_at }}</td>
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
