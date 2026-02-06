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
                            <li class="breadcrumb-item active" aria-current="page">Add Committee</li>
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
                                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                </div>
                                <h5 class="mb-0 text-primary">Add Committee</h5>
                            </div>
                            <hr>    
                            <form id="CommitteeForm" method="POST" enctype="multipart/form-data">
                                        @csrf <!-- Add CSRF token for security -->
                                        <input type="hidden" id="id" name="id"> <!-- Hidden input for slider ID -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                    <label for="year" class="form-label">Select Year</label>
                                                    <select name="year" id="year" class="form-control" required>
                                                        <!-- Options will be populated by JavaScript -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               <div class="mb-3">
                                                    <label for="committee_area" class="form-label"> কমিটি গঠনের এরিয়া </label>
                                                    <select name="committee_area" id="committee_area" class="form-control" required>
                                                        <option value="" class="form-control">Select Committee</option>
                                                        <option value="1" class="form-control">Division</option>
                                                        <option value="2" class="form-control">District</option>
                                                        <option value="3" class="form-control">Upazila/Thana</option>
                                                        <option value="4" class="form-control">Union</option>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <!-- Division Section -->
                                            <div id="division_section" style="display: none;">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="divisions" class="form-label">Select Division </label>
                                                        <select name="divisions" id="divisions" class="form-control">
                                                            <option value="">Select Division Name</option>
                                                            @foreach($division as $div)
                                                            <option value="{{ $div->id }}">{{ $div->bn_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- District Section -->
                                            <div id="district_section" style="display: none;">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="districts" class="form-label">Select District</label>
                                                        <select name="districts" id="districts" class="form-control">
                                                            <!-- Options populated dynamically -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Upazila Section -->
                                            <div id="upazila_section" style="display: none;">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="upazilas" class="form-label">Select Upazila</label>
                                                        <select name="upazilas" id="upazilas" class="form-control">
                                                            <!-- Options populated dynamically -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Union Section -->
                                            <div id="union_section" style="display: none;">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="unions" class="form-label">Select Union</label>
                                                        <select name="unions" id="unions" class="form-control">
                                                            <!-- Options populated dynamically -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="designation" class="form-label">Designation</label>
                                            <input type="text" class="form-control" id="designation" name="designation"  placeholder="Enter Designation">
                                        </div>
                                        <div class="mb-3">
                                            <label for="number" class="form-label">Mobile Number</label>
                                            <input type="text" class="form-control" id="number" name="number" placeholder="Enter Mobile Number">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email </label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address </label>
                                            <textarea class="form-control" rows="3" id="address" name="address" placeholder="Enter Email"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="details" class="form-label">Full Profile</label>
                                            <textarea class="form-control" name="details" id="editor" rows="3" placeholder="Enter Profile Description"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="facebook" class="form-label">Facbook ID </label>
                                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter Facebook ID">
                                        </div>
                                        <div class="mb-3">
                                            <label for="youtube" class="form-label">Youtube </label>
                                            <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Enter Youtube">
                                        </div>
                                        <div class="mb-3">
                                            <label for="twitter" class="form-label">Twitter </label>
                                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter Twitter">
                                        </div>
                                        <div class="mb-3">
                                            <label for="linkedin" class="form-label">Linkedin </label>
                                            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Enter Linkedin">
                                        </div>
                                        <div class="mb-3">
                                            <label for="file_name" class="form-label">Profile Picture</label>
                                            <input type="file" class="form-control" id="file_name" name="file_name" accept="image/*">
                                            <div id="filePreview" class="mt-2"></div> <!-- Preview for existing file -->
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="status" name="status" checked>
                                            <label class="form-check-label" for="status">Active</label>
                                        </div>
                                        <button type="button" class="btn btn-primary mt-3" id="CommitteeSaveBtn">Save</button>
                                    </form>
                                    
                            
                            <h3 class="mt-5">Committee List</h3>
                            <table class="table align-middle mb-0 table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Year</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>File</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($committee as $comm)
                                    <tr>
                                        <td>{{ $comm->year }}</td>
                                        <td class="d-inline-block">{{ $comm->name }}</td>
                                        <td class="d-inline-block">{{ $comm->designation }}</td>
                                        <td>
                                            @if ($comm->file_name)
                                            <img src="{{ asset('public/assets/images/committee/' . $comm->file_name) }}" alt="{{ $comm->name }}" width="50">
                                            @endif
                                        </td>
                                        <td>{{ $comm->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary committee-edit-btn" data-id="{{ $comm->id }}">Edit</button>
                                            <button class="btn btn-danger btn-sm committee-deleteBtn" data-id="{{$comm->id}}">Delete</button>
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